<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\University;

class AnggotaController extends Controller
{
    public function index()
    {        
        $anggota = User::whereRoleId(3)->orderBy('created_at','desc')->paginate(20);
        return view('anggota.index',compact(['anggota']));
    }

    public function create(){
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $password = str_random(8);
        $user = User::create([
            'role_id' => 3,
            'username' => createUsername($request->first_name),
            'email' => $request->email,
            'password' => bcrypt($password),
            'activated' => 1,           
        ]);

        $university = University::create([          
            'name' => $request->university_name,
            'yayasan_name' => $request->yayasan_name,
            'rektor_name' => $request->rektor_name,
            'phone' => $request->university_phone,
            'website_url' => $request->website_url,
            'address' => $request->university_address
        ]);
        $user->profile()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'phone' => $request->phone,
            'agama' => $request->agama,
            'address' => $request->address,
            'university_id' => $university->id          
        ]);

        return redirect()->route('anggota.index')->with('success','Data anggota berhasil ditambahkan');
    }

    public function show($anggota)
    {        
        $anggota = User::find($anggota);
        return view('anggota.show',compact(['anggota']));
    }

    public function edit($anggota)
    {    
        $anggota = User::find($anggota);        
        return view('anggota.edit',compact(['anggota']));
    }

    public function update(Request $request,$anggota)
    {        
        $anggota = User::find($anggota);
        $anggota->update($request->all());
        $anggota->profile->update($request->all());

        return redirect()->route('anggota.index')->with('success','Data anggota berhasil diupdate');
    }

    public function destroy($anggota)
    {
        $anggota = User::find($anggota);
        $anggota->profile->delete();
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success','Data anggota berhasil di Hapus');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;        
        \DB::table("anggota")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Anggota Deleted successfully."]);
    }
}