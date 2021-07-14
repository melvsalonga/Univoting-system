<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateForm;

class CandidatesFormController extends Controller
{
    
    public function  createCandidate(Request $request){

        $candidate = new CandidateForm;
        $candidate->name = $request->input('candidateName');
        $candidate->information = $request->input('candidateInfo');
        if($request->hasfile('candidateImg'))
        {

            $file = $request->file('candidateImg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/candidateImg/', $filename);
            $candidate->c_img = $filename;

        }   
        $candidate->save();
        return redirect('/createCandidateForm');
       
      
    }
}
