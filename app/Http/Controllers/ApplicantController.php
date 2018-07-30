<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller
{
    public function store() {
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'studentNo' => 'required|max:10|regex:/\G(2015)[0-9]+/',
			'contactNo' => 'required|max:10|regex:/\G9[0-9]+/',
			'college' => 'required',
            'firstChoice' => 'required',
            'secondChoice' => 'required',
			'facebookLink' => 'required|regex:/\G\/[a-zA-Z0-9]+/'
		]);

        $firstChoice = request('firstChoice');
        $secondChoice = request('secondChoice');

        $portfolioEmail = array();

        if($firstChoice == 'Writing' || $secondChoice == 'Writing') {
            $portfolioEmail[] = 'For Writing, send it to angelikaortega@tomasinoweb.org';
        }
        if ($firstChoice == 'Creatives' || $secondChoice == 'Creatives') {
             $portfolioEmail[] = 'For Creatives, send it to jessicalopez@tomasinoweb.org';
        }
        if ($firstChoice == 'Photography' || $secondChoice == 'Photography') {
             $portfolioEmail[] = 'For Photography, send it to elizabethregudo@tomasinoweb.org';
        }

        Applicant::create(request(['name', 'email', 'studentNo', 'contactNo', 'college', 'firstChoice', 'secondChoice', 'facebookLink']))->save();

        return view('landing.join', compact('portfolioEmail'));
	}

    public function landing() {
    	return view('landing.index');
    }

    public function teams() {
    	return view('teams.index');
    }

    public function faqs() {
    	return view('faqs.index');
    }
}
