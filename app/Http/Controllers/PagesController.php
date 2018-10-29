<?php

namespace App\Http\Controllers;

use App\Album;
use App\Aplikan;
use App\Category;
use App\Events\FormDownloadBrosurEvent;
use App\Mail\UserRegistered;
use App\Mail\UserRegisteredNotificatioToAdmin;
use App\Post;
use App\University;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index(Request $request)
	{
		//\Cookie::get('sin');
		if($request->has('psr')){
			return response()->view('pages.index')->cookie('psr', $request->psr, time() + (86400 * 30));
			//\Cookie::queue('psr', $request->psr, time() + (86400 * 30));		
		}

		if($request->has('sin')){
			return response()->view('pages.index')->cookie('sin', $request->sin, time() + (86400 * 30));
			//\Cookie::queue('sin', $request->sin, time() + (86400 * 30));		
		}			
		return view('pages.index');
	}	

	public function postdownloadbrosur(Request $request)
	{		
		//dd($request->all());
		$aplikan  = Aplikan::whereEmail($request->email)->first();
		if($aplikan){
			return view('pages.successdownloadbrosur',compact(['aplikan']));
		}

		if($request->has('sumber_informasi_lainnya')){
			//$request->all()['sumber_informasi'] = $request->sumber_informasi.' ('.$request->sumber_informasi_lainnya.')';
			$request->merge(['tanggal_daftar' => \Carbon\Carbon::now(),'aplikan_status_id' =>2,'konsentrasi_id' => 1,'sumber_informasi' => $request->sumber_informasi.' ('.$request->sumber_informasi_lainnya.')']);
		} else{
			$request->merge(['tanggal_daftar' => \Carbon\Carbon::now(),'aplikan_status_id' =>2,'konsentrasi_id' => 2]);
		}	

		if($request->has('user_id')){
			$request->merge(['tanggal_take' => \Carbon\Carbon::now()]);			
		}
		
		$aplikan = Aplikan::create($request->except(['_token']));
		// Script API Kirim.email 
                $client = new \GuzzleHttp\Client(["base_uri"=>"https://aplikasi.kirim.email/api/v3/"]);
                
                $headers = config('kirim_email');

                $client->request('POST','subscriber',[
                    'headers'=>$headers,
                    'form_params'=>[
                        //optional parameter, but you should put it
                        'full_name'=>$aplikan->nama,
                        //required parameter
                        'email'=>$aplikan->email,
                        //required parameter in create but optional in update, might be array or just singular
                        'lists'=> [25056],
                        //optional parameter, fields, we explain it in the update part, but you can also use it here
                    ],
                ]);
        // End Script API Kirim.email
		event(new FormDownloadBrosurEvent($aplikan));
		return view('pages.successdownloadbrosur',compact(['aplikan']));
	}

	public function single($slug)
	{
		$post = Post::whereSlug($slug)->first();
		if(!$post){
			return view('errors.404');
		}
		return view('pages.single',compact(['post']));
	}

	public function category($slug)
	{
		$category = Category::whereSlug($slug)->first();
		$posts = $category->posts()->paginate(10);
		return view('pages.category',compact('category','posts'));
	}

	public function register()
	{
		return view('pages.register');
	}

	public function postregister(Request $request)
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
			'website_url' => $request->website,
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
		\Mail::to($user->email)->send(new UserRegistered($user));
		\Mail::to(getOption('theme_option_email'))->send(new UserRegisteredNotificatioToAdmin($user));
		return view('pages.registrationthankyou');
	}

	public function galleries()
	{
		$albums = Album::orderBy('created_at','desc')->paginate(10);
		return view('pages.galleries',compact(['albums']));
	}

	public function albumsingle($slug)
	{
		$album = Album::whereSlug($slug)->first();
		return view('pages.albumsingle',compact(['album']));
	}
}
