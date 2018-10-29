<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AnggotaController extends Controller
{
    public function index()
    {        
        $anggota = User::whereRoleId(3)->paginate(20);
        return view('anggota.index',compact(['anggota']));
    }

    public function create(){
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $anggota = User::create($request->all());

        return redirect()->back()->with('success','Anggota has been created Successfully');
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

        return redirect()->route('anggota.index')->with('success','Product has been updated Successfully');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success','Product has been deleted Successfully');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;        
        \DB::table("anggota")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Anggota Deleted successfully."]);
    }
}