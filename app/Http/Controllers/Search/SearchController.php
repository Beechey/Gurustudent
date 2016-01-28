<?php

namespace Gurustudent\Http\Controllers;
use Gurustudent\User;
use DB;

class SearchController extends Controller
{
    public function getResults(Request $request) {
    	$query = $request->input('query');

    	if(!$query) {
    		return redirect()->route('home');
    	}

    	$users = User::where(DB::raw('username', 'LIKE', "%{$query}%"))->get();

    	dd($users);

    	return view('search.results');
    }
}
