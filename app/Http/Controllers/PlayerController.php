<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Career;
use App\Photo;
use App\Player;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
	/**
	 * Show website players page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function all()
	{
		$page = 'players';
		$players = Player::with(['achievements', 'careers', 'photos'])->get();
		$temp = DB::table('players')->distinct()->get('preferred_position');
		$positions = [];
		
		foreach($temp as $position) {
			$positions[] = $position->preferred_position;
		}
		
		return view('players.players', compact('page', 'players', 'positions'));
	}
	
	/**
	 * Show website player page.
	 *
	 * @param int $player
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
	 */
	public function single(int $player)
	{
		try {
			$page = 'players';
			$player = Player::with(['achievements', 'careers', 'photos'])->findOrFail($player);
			$photos = $player->photos;
			
			return view('players.player', compact('page', 'player', 'photos'));
		} catch (\Exception $e) {
			return redirect()->back()->withErrors("Impossible d'afficher les informations du joueur sélectionné.");
		}
	}
	
	/**
	 * Show players list page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$players = Player::with(['achievements', 'careers', 'photos'])->get();
		$page = 'players';
		
		return view('admin.players.index', compact('players', 'page'));
	}
	
	/**
	 * Show the player creation page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		$page = 'players';
		return view('admin.players.create', compact('page'));
	}
	
	/**
	 * Show the player edition page.
	 *
	 * @param int $player
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
	 */
	public function edit(int $player)
	{
		try {
			$page = 'players';
			$player = Player::with(['achievements', 'careers', 'photos'])->findOrFail($player);
			
			$player->date_of_birth = date('Y-m-d', strtotime($player->date_of_birth));
			$player->contract_expiration = date('Y-m-d', strtotime($player->contract_expiration));
			$player->eu_passport = $player->eu_passport == true ? "1" : "0";
			$player->positions = json_decode($player->positions);
			
			return view('admin.players.edit', compact('player', 'page'));
		} catch (\Exception $e) {
			return response()->json(['message' => "Impossible de modifier cet utilisateur.", 'exception' => $e->getMessage()], 500);
		}
	}
	
	/**
	 * Store a newly created player.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Illuminate\Validation\ValidationException
	 * @throws \Throwable
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'first_name' => 'required',
			'date_of_birth' => 'required',
			'nationality' => 'required',
			'eu_passport' => 'required',
			'height' => 'required',
			'weight' => 'required',
		]);
		
		try {
			$data = $request->except('_token');
			$data['positions'] = json_encode($data['positions']);
			
			$player = new Player($data);
			$player->saveOrFail();
			
			// Store player careers items
			if (isset($data['careers'])) {
				$careers = $data['careers'];
				
				foreach ($careers as $tmp) {
					$career = [
						'player' => $player->id,
						'period' => $tmp['period'],
						'club' => $tmp['club'],
						'current_club' => $tmp['current_club'] == "Oui" ? true : false,
						'country' => $tmp['country'],
						'matches' => $tmp['matches'],
						'goals' => $tmp['goals']
					];
					
					$career = new Career($career);
					$career->save();
				}
			}
			
			// Store player achievements items
			if (isset($data['achievements'])) {
				$achievements = $data['achievements'];
				
				foreach ($achievements as $tmp) {
					$tmp['player'] = $player->id;
					$achievement = new Achievement($tmp);
					$achievement->save();
				}
			}
			
			// Store player photos
			if (isset($data['photos'])) {
				$photos = $data['photos'];
				
				foreach ($photos as $photo) {
					$photo = Photo::find($photo['id']);
					
					if ($photo != null)
						$photo->update(['player' => $player->id]);
				}
			}
			
			return response()->json(['message' => "Le joueur a été ajouté avec succès.", 'player' => $player], 201);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de l'ajout du joueur.", 'exception' => $e->getMessage()], 500);
		}
	}
	
	/**
	 * Update the given player with the given data.
	 *
	 * @param Request $request
	 * @param int $player
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update(Request $request, int $player)
	{
		try {
			$data = $request->except('_token');
			$data['positions'] = json_encode($data['positions']);
			
			$player = Player::with(['achievements', 'careers', 'photos'])->findOrFail($player);
			$player->update($data);
			
			// Truncate player achievements, careers and photos
			foreach ($player->achievements as $achievement)
				$achievement->delete();
			
			foreach ($player->careers as $career)
				$career->delete();
			
			// Store player careers items
			if (isset($data['careers'])) {
				$careers = $data['careers'];
				
				foreach ($careers as $tmp) {
					$career = [
						'player' => $player->id,
						'period' => $tmp['period'],
						'club' => $tmp['club'],
						'current_club' => $tmp['current_club'] == "Oui" ? true : false,
						'country' => $tmp['country'],
						'matches' => $tmp['matches'],
						'goals' => $tmp['goals']
					];
					
					$career = new Career($career);
					$career->save();
				}
			}
			
			// Store player achievements items
			if (isset($data['achievements'])) {
				$achievements = $data['achievements'];
				
				foreach ($achievements as $tmp) {
					$tmp['player'] = $player->id;
					$achievement = new Achievement($tmp);
					$achievement->save();
				}
			}
			
			// Store player photos
			if (isset($data['photos'])) {
				$photos = $data['photos'];
				
				foreach ($photos as $photo) {
					$photo = Photo::find($photo['id']);
					
					if ($photo != null)
						$photo->update(['player' => $player->id]);
				}
			}
			
			return response()->json(['message' => "Le joueur a été mis à jour avec succès.", 'player' => $player]);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la mise à jour du joueur.", 'exception' => $e->getMessage()], 500);
		}
	}
	
	/**
	 * Delete the given player.
	 *
	 * @param int $player
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function destroy(int $player)
	{
		try {
			$player = Player::with(['achievements', 'careers', 'photos'])->findOrFail($player);
			
			// Delete related
			foreach ($player->achievements as $achievement)
				$achievement->delete();
			
			foreach ($player->careers as $career)
				$career->delete();
			
			foreach ($player->photos as $photo) {
				$path = app()->publicPath() . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $photo->path;
				$photo->delete();
				
				if (file_exists($path)) {
					$fs = new Filesystem();
					$fs->delete($path);
				}
			}
			
			$player->delete();
			
			return response()->json(['message' => "Le joueur a été supprimé avec succès."]);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la suppression du joueur.", 'exception' => $e->getMessage()], 500);
		}
	}
}
