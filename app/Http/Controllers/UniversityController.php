<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class UniversityController extends Controller
{
    public function index()
    {        
        $universities = University::paginate(20);
        return view('universities.index',compact(['universities']));
    }

    public function create(){
        return view('universities.create');
    }

    public function store(Request $request)
    {
        $university = University::create($request->all());

        return redirect()->back()->with('success','Product has been created Successfully');
    }

    public function show(University $university)
    {        

        return view('universities.show',compact(['university']));
    }

    public function edit(University $university)
    {        
        return view('universities.edit',compact(['university']));
    }

    public function update(Request $request, University $university)
    {        
        $university->update($request->all());

        return redirect()->route('universities.index')->with('success','Product has been updated Successfully');
    }

    public function destroy(University $university)
    {
        $university->delete();

        return redirect()->route('universities.index')->with('success','Product has been deleted Successfully');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;        
        \DB::table("universities")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Universities Deleted successfully."]);
    }
}