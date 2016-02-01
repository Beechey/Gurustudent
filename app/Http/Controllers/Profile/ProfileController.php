<?php

namespace Gurustudent\Http\Controllers\Profile;

use Gurustudent\Http\Controllers\Controller;
use Gurustudent\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($username) {
    	dd($username);
    }
}