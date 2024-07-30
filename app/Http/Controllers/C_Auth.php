<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Auth extends Controller
{

  public function index()
  {
    return view('base', ['title' => 'SIF | Login']);
    // if (session()->has('username')) {
    //     // return view('/dashboard', ['title' => 'Dashboard']);
    //     return redirect('/sekre/dashboard');
    // }

    // return view('auth.login', ['title' => 'SIF | Login']);
  }

  public function login(Request $request)
  {
    $username = $request->username;
    $password = $request->password;

    $response = Http::asForm()->post('https://gateway.telkomuniversity.ac.id/issueauth', [
      'username' => $username,
      'password' => $password,
    ]);

    if (!isset($response['token'])) {
      return redirect('/')->with('status', 'Login Gagal !');
    } else {
      session(['username' => $username]);
      session(['password' => $password]);
      session()->save();
      return view('base');
    }
  }

  public function logout()
  {
    if (session()->has('username')) {
      session()->flush();
      session()->save();
    }
    return redirect('/');
  }
}