<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
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
			'image' => 'required',
		]);
		
		try {
			if ($request->hasFile('image')) {
				$path = Uploader::file('image')->store();
				
				if ($path != false) {
					$photo = new Photo(['path' => $path]);
					$photo->saveOrFail();
					
					return response()->json(['message' => "Photo enregistrée avec succès.", 'photo' => $photo]);
				}
			}
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de l'enregistrement de la photo.", 'exception' => $e->getMessage()], 500);
		}
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param \App\Photo $photo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Photo $photo)
	{
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Photo $photo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Photo $photo)
	{
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Photo $photo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Photo $photo)
	{
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Photo $photo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Photo $photo)
	{
		try {
			$path = app()->publicPath() . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $photo->path;
			$photo->delete();
			
			if (file_exists($path)) {
				$fs = new Filesystem();
				$fs->delete($path);
			}
			
			return response()->json(['message' => "La photo a été supprimée avec succès."]);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la suppression de la photo.", 'exception' => $e->getMessage()], 500);
		}
	}
}
