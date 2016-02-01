<?php

namespace Gurustudent\Http\Controllers\Search;

use Gurustudent\Http\Controllers\Controller;
use Gurustudent\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function getResults(Request $request) {
    	$query = $request->input('query');

    	if(!$query) {
    		return redirect()->route('home')->with('danger', 'No input found');
    	}

    	$users = User::where('username','LIKE','%'.$query.'%')->get();
    	return view('search.results')->with('users', $users);
    }
}
