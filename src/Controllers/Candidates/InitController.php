<?php

namespace Alisson\ResumeBank\Controllers\Candidates;

use Alisson\ResumeBank\Models\Candidate;
use Alisson\ResumeBank\Models\CandidatePersonalInfos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InitController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('resume-bank::candidates.index');
    }

    public function verify(Request $request)
    {
        try {

            $candidate = Candidate::where('cpf', $request->input('cpf'))->get();

            if(count($candidate) == 0) {
                return view('resume-bank::candidates.register')->with('cpf', $request->input('cpf'));
            }

            return "already exists!";


        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {

            $new = Candidate::create([
                'cpf' => $request->input('cpf'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password'))
            ]);

            return redirect('candidate/resume')->with('_id','teste');

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function resume()
    {
        return view('resume-bank::candidates.resume');
    }

    public function resumeStore(Request $request) {
        try {

            $candidate = Candidate::find($request->input('_id'));
            CandidatePersonalInfos::create([

                'candidates_id' => $candidate->id,
                'rg' => $request->input('rg'),
                'rg_org_exp' => $request->input('rg_org_exp'),
                'rg_date_exp' => Carbon::parse($request->input('rg_date_exp'))->format('Y-m-d'),
                'father' => $request->input('father'),
                'mother' => $request->input('mother'),
                'birth' => Carbon::parse($request->input('birth'))->format('Y-m-d'),
                'genre' => $request->input('genre'),
                'marital_status' => $request->input('marital_status'),

            ]);

            return view('resume-bank::candidates.education', compact('candidate'));

        } catch (\Exception $ex) {
            return $ex;
        }
    }

}