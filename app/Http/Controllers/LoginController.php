<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\empleados;
//use App\User;


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
  protected $redirectTo = '/home';

  /**
  * Create a new controller instance.
  *
  * @return void
  */

  public function __construct()
  {
    $this->middleware('guest')->except(['logout']);
  }

  protected function guard(){
    return Auth::guard('usuario');
  }

  public function login(Request $r){

    DB::beginTransaction();
    try {

      $usuario =  empleados::where('pass', $r->password)->where('usuario', $r->user)->where('visible', 'SI')->first();
      // dd($usuario);
      if($usuario){
        Auth::login($usuario);

        if (Auth::guard('usuario')->user() != null ){

          $user = Auth::guard('usuario')->user()->idEmpleados;

          date_default_timezone_set('America/Mexico_City');
          $fecha_acceso = date("Y-m-d H:i:s");
          DB::commit();

          return redirect()->route('inicio')->with([
            'success' => 'Bienvenido '
            ])->withCookie(cookie('user', $user)
            )->withCookie(cookie('Sitio', 'Examen'));
          }
        }

        return back()->with('error', 'Estas credenciales no coinciden.');

      } catch (\Exception $e) {
        DB::rollback();
        return $e->getMessage();
        return back()->with('error', $e->getMessage());
      }

    }



  }
