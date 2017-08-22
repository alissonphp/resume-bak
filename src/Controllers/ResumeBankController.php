<?php

namespace Alisson\ResumeBank\Controllers;


use App\Http\Controllers\Controller;

class ResumeBankController extends Controller
{
    public function index()
    {
        return view('resume-bank::candidates.index');
    }
}