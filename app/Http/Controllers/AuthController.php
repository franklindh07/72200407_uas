<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;



use Validator;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(10);
        return view('user', ['user' => $user]);
    }
    
    public function login()
    {
        return view('login');
    }

    public function formuliruser()
    {
        return view('formuliruser');
    }

    public function simpanuser(Request $request)
    {

        // $rules = array(
        //     'nim_user' => 'required',
        //     'nama_user' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required',
        //     'no_hp' => 'required',
        //     'password' => 'required',
            
        // );

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails())
        // {
        //     return redirect('/user/formuliruser')->withErrors($validator);
        // }
        // else
        // {
        //     $user = User::create([
        //         'nim_user' => $request->nim_user,
        //         'nama_user' => $request->nama_user,
        //         'email' => $request->email,
        //         'no_hp' => $request->no_hp,
        //         'password' => bcrypt($request->password)
        //     ]);

        //     return redirect('/user');

        // }

        $validateData = $request->validate([
            'nim_user' => ['required', 'min:8', 'max:8'],
            'nama_user' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns|unique:users',
             'no_hp' => 'required',
             'password' => 'required|min:6|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/user')->with('success', 'Registrasi Berhasil');
    }

    public function ceklogin(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/')->with('gagal', 'Email atau Password Salah');
        }
        else
        {
            return redirect('/mahasiswa');
        } 
    }

    
    public function edituser($id)
    {
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->nim_user = $request->nim_user;
        $user->nama_user = $request->nama_user;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->save();
        return redirect('/user')->with('error', 'Data berhasil diubah');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('warning', 'Data berhasil dihapus');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('error', 'Berhasil Logout');;
    }

    public function registrasi()
    {
        return view('formulirregistrasi');
    }

    public function simpanregistrasi(Request $request)
    {

        // $rules = array(
        //     'nim_user' => 'required',
        //     'nama_user' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required',
        //     'no_hp' => 'required',
        //     'password' => 'required',
            
        // );

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails())
        // {
        //     return redirect('/user/formuliruser')->withErrors($validator);
        // }
        // else
        // {
        //     $user = User::create([
        //         'nim_user' => $request->nim_user,
        //         'nama_user' => $request->nama_user,
        //         'email' => $request->email,
        //         'no_hp' => $request->no_hp,
        //         'password' => bcrypt($request->password)
        //     ]);

        //     return redirect('/user');

        // }

        $validateData = $request->validate([
            'nim_user' => ['required', 'min:8', 'max:8'],
            'nama_user' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns|unique:users',
             'no_hp' => 'required',
             'password' => 'required|min:6|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
  
    
    }



