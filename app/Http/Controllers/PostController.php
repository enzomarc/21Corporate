<?php
	
	namespace App\Http\Controllers;
	
	use App\Post;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Collection;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Str;
	
	class PostController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$posts = Post::all();
			$page = 'news';
			
			$posts->transform(function (Post $post) {
				$author = User::find($post->author);
				$tags = json_decode($post->tags);
				$post->author = $author != null ? $author->first_name . ' ' . $author->last_name : $post->author;
				$post->tags = implode(', ', $tags);
				
				return $post;
			});
			
			return view('admin.news.index', compact('page', 'posts'));
		}
		
		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			$page = 'news';
			
			return view('admin.news.create', compact('page'));
		}
		
		/**
		 * Store a newly created resource in storage.
		 *
		 * @param Request $request
		 * @return \Illuminate\Http\JsonResponse
		 * @throws \Illuminate\Validation\ValidationException
		 * @throws \Throwable
		 */
		public function store(Request $request)
		{
			$this->validate($request, [
				'title' => 'required',
				'content' => 'required',
			]);
			
			$data = $request->except('_token');
			
			try {
				if ($request->hasFile('hero')) {
					$hero = $request->file('hero')->storePublicly('public');
					
					if ($hero != false)
						$data['image'] = $hero;
				}
				
				if ($data['tags'] != null) {
					$tags = explode(',', $data['tags']);
					$data['tags'] = json_encode($tags);
				}
				
				$data['author'] = auth()->user()->id;
				$data['slug'] = Str::slug($data['title'], '_', 'fr');
				
				$post = new Post($data);
				$post->saveOrFail();
				
				return response()->json(['message' => "Nouvelle publiée avec succès.", 'post' => $post], 201);
			} catch (\Exception $e) {
				return response()->json(['message' => "Une erreur est survenue lors de la publication de la nouvelle.", 'exception' => $e->getMessage()], 500);
			}
		}
		
		/**
		 * Display the specified resource.
		 *
		 * @param \App\Post $post
		 * @return \Illuminate\Http\Response
		 */
		public function show(Post $post)
		{
			try {
				return response()->json(['post' => $post]);
			} catch (\Exception $e) {
				return response()->json(['message' => "Impossible de récupérer les informations de la nouvelle.", 'exception' => $e->getMessage()], 500);
			}
		}
		
		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param \App\Post $news
		 * @return \Illuminate\Http\Response
		 */
		public function edit(Post $news)
		{
			$post = $news;
			$tags = json_decode($post->tags);
			$post->tags = implode(',', $tags);
			$page = 'news';
			
			return view('admin.news.edit', compact('page', 'post'));
		}
		
		/**
		 * Update the specified resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @param \App\Post $news
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, Post $news)
		{
			$post = $news;
			$data = $request->except('_token');
			
			try {
				if ($request->hasFile('hero')) {
					$hero = $request->file('hero')->storePublicly('public');
					
					if ($hero != false)
						$data['image'] = $hero;
				}
				
				if(isset($data['tags']) && $data['tags'] != null) {
					$tags = explode(',', $data['tags']);
					$data['tags'] = json_encode($tags);
				}
				
				$data['slug'] = Str::slug($data['title'], '_', 'fr');
				$post->update($data);
				
				return response()->json(['message' => "La nouvelle a été mise à jour avec succès.", 'post' => $post]);
			} catch (\Exception $e) {
				return response()->json(['message' => "Une erreur est survenue lors de la mise à jour de la nouvelle.", 'exception' => $e->getMessage(), 'line' => $e->getLine()], 500);
			}
		}
		
		/**
		 * Remove the specified resource from storage.
		 *
		 * @param \App\Post $post
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(Post $news)
		{
			try {
				$news->delete();
				return response()->json(['message' => "La nouvelle a été supprimée avec succès."]);
			} catch (\Exception $e) {
				return response()->json(['message' => "Une erreur est survenue lors de la suppression de la nouvelle.", 'exception' => $e->getMessage()], 500);
			}
		}
		
		/**
		 * Show all news.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function all()
		{
			$page = 'news';
			$posts = Post::all()->sortBy('created_at', SORT_DESC, true);
			$posts->transform(function (Post $post) {
				$author = User::find($post->author);
				$tags = json_decode($post->tags);
				$post->author = $author != null ? $author->first_name : $post->author;
				$post->tags = implode(', ', $tags);
				$post->description = "lorem ipsum dolor sit amet consectetur adipisicing elit.";
				
				return $post;
			});
			
			return view('news.index', compact('posts', 'page'));
		}
		
		/**
		 * Show single news.
		 *
		 * @param string $slug
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function single(string $slug)
		{
			$post = Post::all()->where('slug', $slug)->first();
			$page = 'news';
			
			if ($post != null) {
				$author = User::find($post->author);
				$tags = json_decode($post->tags);
				$post->author = $author != null ? $author->first_name : $post->author;
				$post->description = "lorem ipsum dolor sit amet consectetur adipisicing elit.";
				$post->tag = new Collection();
				foreach ($tags as $tag) {
					if (!$post->tag->contains($tag))
						$post->tag->add($tag);
				}
				
				return view('news.single', compact('post', 'page'));
			} else {
				return response()->json("Impossible d'afficher cet article.", 404);
			}
		}
		
		/**
		 * Get all news tags.
		 *
		 * @return \Illuminate\Http\JsonResponse
		 */
		public function tags()
		{
			$tags = new Collection();
			$temp = DB::table('posts')->distinct()->get('tags');
			$temp->transform(function ($tag) {
				return json_decode(json_decode($tag->tags));
			});
			
			foreach ($temp as $item) {
				foreach ($item as $tag) {
					if (!$tags->contains($tag))
						$tags->add($tag);
				}
			}
			
			return response()->json(['tags' => $tags]);
		}
	}
