<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class GalleryController extends Controller
{
	public function index()
	{
		$albums = Album::orderBy('created_at','desc')->get();
		return view('galleries.index',compact(['albums']));
	}

	public function ajaxupload(Request $request)
	{
		return response()->json(['request'=> $request->all()],200);
	}

	public function albumstore(Request $request)
	{
		$album = new Album;
		$album->name = $request->name;
		$album->description = $request->description;
		$album->save(); 
		return redirect()->back()->with('success','Album has been created successfully');
	}

	public function albumview(Album $album)
	{
		return view('galleries.view',compact(['album']));
	}

	public function upload(Request $request)
	{	
		$images = []	;
		//dd($request->all());
		foreach($request->name as $key => $name){
			$images[$key]['name'] = $name;			
		}

		foreach($request->description as $key => $description){
			$images[$key]['description'] = $description;			
		}

		foreach($request->path as $key => $path){
			$images[$key]['path'] = $path;			
		}

		$album = Album::find($request->album_id);
		foreach($images as $image){
			$album->images()->create($image);			
		}
		return redirect()->back()->with('success','Images has been uploaded to current album');
	}
}
