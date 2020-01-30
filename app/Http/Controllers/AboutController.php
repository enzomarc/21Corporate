<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
	/**
	 * Show website information admin page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$page = 'about';
		$info = DB::table('about')->first();

		return view('admin.about', compact('page', 'info'));
	}
	
	/**
	 * Store website information.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Illuminate\Validation\ValidationException
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'about' => 'required',
			'quote' => 'required',
			'author' => 'required',
		]);
		
		try {
			$data = $request->except('_token');
			DB::table('about')->truncate();
			DB::table('about')->insert($data);
			
			return response()->json(['message' => "Vos informations ont été mises à jours avec succès."]);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la mise à jour de vos informations.", 'exception' => $e->getMessage()], 500);
		}
	}
}
