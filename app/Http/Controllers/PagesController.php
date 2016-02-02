<?php

namespace Gurustudent\Http\Controllers;

use Gurustudent\User;
use Validator;
use Gurustudent\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class PagesController extends Controller {
    public function showIndex() {
    	return view('pages.home');
    }

    public function showContact() {
    	return view('pages.contact');
    }

    public function showAsk() {
    	return view('pages.ask');
    }

    public function showQuestions() {
    	return view('pages.questions');
    }

    public function showDashboard() {
        return view('pages.dashboard');
    }
}
