<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
	/**
	 * Show gallery administration page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$photos = DB::table('gallery')->get();
		$page = 'gallery';
		
		return view('admin.gallery', compact('photos', 'page'));
	}
	
	/**
	 * Store a new photo in the gallery.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(Request $request)
	{
		try {
			$data = $request->except('_token', 'image');
			
			if ($request->hasFile('image')) {
				$path = Uploader::file('image')->store();
				
				if ($path != false) {
					$data['path'] = $path;
					
					if (DB::table('gallery')->insert($data))
						return response()->json(['message' => "La photo a été ajoutée avec succès à la gallerie."]);
					else
						return response()->json(['message' => "Impossible d'ajouter cette photo à la gallerie."], 500);
				} else {
					return response()->json(['message' => "Impossible d'ajouter cette photo à la gallerie."], 500);
				}
			} else {
				return response()->json(['message' => "Aucune photo n'a été spécifiée. Veuillez en choisir une."], 500);
			}
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de l'ajout de la photo.", 'exception' => $e->getMessage()], 500);
		}
	}
	
	/**
	 * Delete photo with the given id.
	 *
	 * @param int $photo
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function delete(int $photo)
	{
		try {
			$photo = DB::table('gallery')->find($photo);
			
			if ($photo != null) {
				$path = app()->publicPath() . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $photo->path;
				DB::table('gallery')->delete($photo->id);
				
				if (file_exists($path)) {
					$fs = new Filesystem();
					$fs->delete($path);
				}
				
				return response()->json(['message' => "L'image a été supprimée avec succès."]);
			} else {
				return response()->json(['message' => "Impossible de trouver l'image spécifiée."], 500);
			}
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la suppression de l'image.", 'exception' => $e->getMessage()], 500);
		}
	}
}
