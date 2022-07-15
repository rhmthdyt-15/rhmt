<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\M_Siswa;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('login.Login-aplikasi');
    }

    public function berhasil()
    {
        $data = M_Siswa::all();
        return view('login.berhasil')->with([
            'data' => $data
        ]);
    }

    public function postlogin(Request $request)
    {

        $data = $request->only('username', 'password');

        if (Auth::attempt(['name' => $data['username'], 'password' => $data['password']])) {
            return redirect('/berhasil');
        }

        return redirect('/login');
    }

    public function store(Request $request)
    {

        $data = $request->except(['_token']);
        M_Siswa::insert($data);
        return redirect('/berhasil');
    }

    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        $data = M_Siswa::findOrFail($id);
        return view('login.show')->with([
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = M_Siswa::findOrfail($id);
        $data = $request->except('_token');
        $item->update($data);
        return redirect('/berhasil');
    }

    public function destory($id)
    {
        $item = M_Siswa::findOrfail($id);
        $item->delete();
        return redirect('/berhasil');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('login');
    }
}
