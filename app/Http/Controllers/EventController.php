<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
	/**
	 * Show all events page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function all()
	{
		$events = Event::all();
		$page = 'events';

		$events->transform(function (Event $event) {
			$event->subscriptions = DB::table('subscriptions')->where('event', $event->id)->count();
			return $event;
		});

		return view('events.index', compact('events', 'page'));
	}

	/**
	 * Show single event page.
	 *
	 * @param Event $event
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function single(Event $event)
	{
		$page = 'events';
		$event->subscriptions = DB::table('subscriptions')->where('event', $event->id)->count();

		return view('events.single', compact('event', 'page'));
	}

	/**
	 * Store visitor participation to an event.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function subscribe(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'event' => 'required',
		]);

		try {
			$data = $request->except('_token');
			$exists = DB::table('subscriptions')->where('email', $data['email'])->where('event', $data['event'])->first() != null;

			if ($exists)
				return response()->json(['message' => "Vous participez déjà à cet evènement."]);

			DB::table('subscriptions')->insert($data);

			return response()->json(['message' => "Votre participation a été enregistrée avec succès."], 201);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de l'enregistrement de votre participation.", 'exception' => $e->getMessage()], 500);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$events = Event::all();
		$page = 'events';

		$events->transform(function (Event $event) {
			$event->subscriptions = DB::table('subscriptions')->where('event', $event->id)->count();
			return $event;
		});

		return view('admin.events.index', compact('events', 'page'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$page = 'events';
		return view('admin.events.create', compact('page'));
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
			'start_date' => 'required',
		]);

		try {
			$data = $request->except('_token');

			if ($request->hasFile('image')) {
				$path = Uploader::file('image')->store();

				if ($path != false)
					$data['image'] = $path;
			}

			if ($data['end_date'] == "")
				$data['end_date'] = $data['start_date'];

			$event = new Event($data);
			$event->saveOrFail();

			return response()->json(['message' => "Evènement créé avec succès.", 'event' => $event], 201);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la création de l'evènement.", 'exception' => $e->getMessage()], 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function show(Event $event)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Event $event)
	{
		$page = 'events';
		$event->start_date = date('Y-m-d', strtotime($event->start_date));
		$event->end_date = date('Y-m-d', strtotime($event->end_date));

		return view('admin.events.edit', compact('event', 'page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Event $event)
	{
		try {
			$data = $request->except('_token');

			if ($request->hasFile('image')) {
				$path = Uploader::file('image')->store();

				if ($path != false) {
					$data['image'] = $path;

					$old = app()->publicPath() . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $event->image;

					if (file_exists($old)) {
						$fs = new Filesystem();
						$fs->delete($old);
					}
				}
			}

			$event->update($data);

			return response()->json(['message' => "L'evènement a été mis à jour avec succès.", 'event' => $event]);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la mise à jour de l'evènement.", 'exception' => $e->getMessage()], 500);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Event $event)
	{
		try {
			$old = app()->publicPath() . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $event->image;

			if (file_exists($old)) {
				$fs = new Filesystem();
				$fs->delete($old);
			}

			$event->delete();

			return response()->json(['message' => "L'evènement a été supprimé avec succès."]);
		} catch (\Exception $e) {
			return response()->json(['message' => "Une erreur est survenue lors de la mise à jour de l'evènement.", 'exception' => $e->getMessage()], 500);
		}
	}
}
