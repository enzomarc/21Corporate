<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/
	
	use AuthenticatesUsers;
	
	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}
	
	/**
	 * Show admin login page.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
	 */
	public function login()
	{
		if (auth()->check())
			return redirect()->route('home');
		
		return view('admin.login');
	}
	
	/**
	 * Authenticates user with the given credentials.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function auth(Request $request)
	{
		try {
			$this->validate($request, [
				'email' => 'required',
				'password' => 'required'
			]);
			
			$credentials = $request->only(['email', 'password']);
			
			if (auth()->attempt($credentials))
				return response()->json(['message' => "Bienvenue sur votre tableau de bord " . auth()->user()->first_name . ".", 'login_status' => 'success']);
			else
				return response()->json(['message' => "Adresse email ou mot de passe incorrect.", 'login_status' => 'invalid'], 401);
		} catch (\Exception $e) {
			return response()->json(['message' => "Adresse email ou mot de passe incorrect.", 'login_status' => 'invalid', 'exception' => $e->getMessage()], 401);
		}
	}
	
	/**
	 * Logout the logged user.
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function logout()
	{
		auth()->logout();
		return redirect()->route('home');
	}
}
