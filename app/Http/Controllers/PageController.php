<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

        class PageController extends Controller
{
    public function landing()
    {
        return view('landing'); // Mengarah ke view landing.blade.php
    }

    public function directtologin(Request $request)
    {

        return view("login");
    }
    public function directtoregister(Request $request)
    {

        return view("login");
    }
    function create(){
        return view("create-pengelolaan");
    }


    public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'jenny@gmail.com' && $password === 'password') {
        session(['username' => 'Jenny Aneza']);

        return redirect()->route('dashboard');
    }

    return back()->withErrors(['login' => 'Email atau password salah']);
}



    public function pengelolaan()
    {
        $nama = session("username");

        $posts = [
            [
                'title' => 'Jenny bergelut dengan uts pweb',
                'author' => 'Jenny Aneza',
                'date' => '5 Mei 2025',
                'body' => 'Pagi ini aku sedang dihantam tugas UTS PWEB ku yang--- ah gini doang mah SUSAHHH:D tapi gpp, im okay, semoga dapat A. Sebenernya aku bingung ya ges ya mau diisi apa dan gimana. Ya Allah pasrah gue deehh'
            ],
            [
                'title' => 'Jenny sudah menuntaskan uts pweb',
                'author' => 'Jenny Aneza',
                'date' => '6 Mei 2025',
                'body' => 'Alhamdulillah tugas pweb sudah selesai!! Happy sekali loh best.. Plong gitu rasanya:)) Eits, tapi tugas yg lain masih belom, ada profis, project datmin, pr datmin. HAHAHA /ketawa tugas'
            ],
        ];

        return view('pengelolaan', compact('nama', 'posts'));
    }



    public function dashboard(Request $request)
    {
        dd(session()->all());

        if (!session()->has('username')) {
            return redirect()->route('login'); // Lempar balik ke login jika belum login
        }

        $username = session('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = session('username');

        return view('profile', compact('username'));
    }
}
