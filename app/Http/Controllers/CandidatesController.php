<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CandidatesController extends Controller
{
    //


    public function  createCandidate(Request $request){
       
        if ($request->hasFile('Img')) {

            $candidateImg =time() . '_' .$request->Img->getClientOriginalName();
            
            $request->Img->storeAs('images', $candidateImg, 'public');
    }

        $candidateName = $request->input('candidateName');
        $candidateInfo = $request->input('candidateInfo');

        if($candidateInfo == null){
            $candidateInfo = "";
        }

        DB::table('candidates')->insert(
            ['name'=>$candidateName, 'votes'=>0, 'information'=>$candidateInfo, 'c_img'=>$candidateImg]
        );



        return redirect('/createCandidateForm');    
    }




    public function  createCandidateForm(){

        if(Auth::check()  && Auth::user()->is_admin){
                  return view("createCandidateForm");
        }else{
                return \redirect('/home')->with('flashMessageRed','You are not Authorized to enter this page.');
        }
        
    }

    public function  home(){
        $candidates = DB::table('candidates')->get(); // Eto all variable ng array ng candidates sa DB
        return view('home',['candidates'=> $candidates]); 
    }

    public function  votingPage(){

        // kapag di na ka log in redirect sya sa register page
        if(!Auth::check()){

            return \redirect('/register');


            // eto mag check kung naka vote na o hindi
        }else if(!Auth::user()->has_voted){

            $candidates = DB::table('candidates')->get(); // Eto variable ng array ng candidates sa DB
            return view('voting',['candidates'=> $candidates]); 

        }else{

            return \redirect('/home')->with('flashMessageRed','You have already voted.');
        }
    }    


// Etong function na to mag lalagay ng vote sa DB
    public function castYourVote(Request $request){

        $candidateId = $request->input('candidateId');

         DB::table('candidates')->where('id',$candidateId)
                ->update([
                    'votes'=>DB::raw("votes + 1")
                ]);


        //eto mag bago ng value ng has_voted sa db    
        DB::table("users")->where('id',Auth::user()->id)
                    ->update([
                        'has_voted'=>1
                    ]);

        //Store kung sino bumoto
        DB::table("users")->where('id',Auth::user()->id)
                    ->update([
                        'candidate_voted_for'=>$candidateId
                    ]);


        //return already voted msg
        return \redirect('/home')->with('flashMessage','You voted successfully.');
    }


}
