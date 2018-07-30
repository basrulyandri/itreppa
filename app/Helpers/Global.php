<?php

function getOption($key,$serialize = false){
	$option = \App\Option::whereOptionKey($key)->first();

	if($serialize){
		return unserialize($option->option_value);
	}

	return $option->option_value;
}

function getPtOption($key,$unserialize = false){
	$option = \App\PtOption::whereOptionKey($key)->wherePtId(\Auth::user()->pt_id)->first();

	if($unserialize){
		return unserialize($option->option_value);
	}

	return $option->option_value;
}

function toRp($angka)
{
 	$jadi = "Rp. " . number_format($angka,0,',','.');
	return $jadi;
}

function jmlTagihan($status){
	return \App\Tagihan::whereStatus($status)->count();
}

function jmlAplikanSaya(){
	return \App\Aplikan::whereUserId(auth()->user()->id)->count();
}

function numberToColumn($number)
{
	if($number == 1){
		return 12;
	}elseif($number == 2){
		return 6;
	}elseif($number == 3){
		return 4;
	}else{
		return 3;
	}
}

function posts()
{
	return \App\Post::whereType('post')->whereStatus('published')->get();
}

function postsAndPages()
{
	return \App\Post::whereIn('type',['post','page'])->whereStatus('published')->orderBy('type')->get();
}

function pages(){
	return \App\Post::whereType('page')->whereStatus('published')->orderBy('created_at','desc')->get();
}

function sliders()
{	
	return \App\Post::whereIn('id',array_flatten(unserialize(getOption('theme_option_slider_contents'))))->get();
}

function latestPosts($take = 5){
	return \App\Post::whereStatus('published')->whereType('post')->orderBy('created_at','desc')->take($take)->get();
}

function listPresenters(){
	return \App\User::whereRoleId(3)->pluck('username','id');
}

function aplikanHistories($aplikan){	
	$followup = $aplikan->followedUpBy()->whereType('followup')->orderBy('followup.created_at','desc')->get();	
	$layani = 	$aplikan->followedUpBy()->whereType('layani')->orderBy('followup.created_at','desc')->get();
	$layani->map(function($item,$key) use ($followup){
		$followup->push($item);
	});

	return $followup->sortByDesc('pivot.created_at');	
}

function userActivities($user){	
	$followup = $user->followup()->orderBy('followup.created_at','desc')->get();	
	$melayani = $user->melayani()->orderBy('melayani.created_at','desc')->get();
	$melayani->map(function($item,$key) use ($followup){
		$followup->push($item);
	});

	return $followup->sortByDesc('pivot.created_at');	
}