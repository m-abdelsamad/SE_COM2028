<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudySession;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function index(){
        //$studySession = StudySession::orderBy('time', 'DESC')-
        $studySessions = StudySession::orderBy('time', 'DESC')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->take(10)->get();
        $users = User::get();
        
        $myWeekSession = StudySession::where('user_id', auth()->user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $studySession = StudySession::where('user_id', auth()->user()->id)->where('created_at', '>=', Carbon::today())->first();

        return view('HomeController.dashboard', [
            'studySessions' => $studySessions,
            'users' => $users,
            'studySession' => $studySession,
            'myWeekSession'=> $myWeekSession,
        ]);
    }


    public function updateDetails(Request $request){
        $user = User::findorFail(auth()->user()->id);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "university_name" => $request->uni_name,
            "hrs_per_day" => $request->day_hr,
            "hrs_per_week" => $request->week_hr,
        ]);

        // return response()->JSON(['status' => 200,]);
        return view('HomeController.dashboard');
    }


    // public function createStudySessionArray($studySessions){
    //     $array = array();

    //     foreach(studySessions as $studySession){
    //         if(in_array())
    //     }
    // }
}
