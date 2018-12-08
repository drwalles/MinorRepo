<?php

namespace App\Http\Controllers;
use App\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::latest()->paginate(15);
        $user = Auth::User();
        return view('submission.index')->with(['submissions'=>$submissions, 'user'=>$user]);
    }
    public function submit(Request $request)
    {
//        dd($request->all());
        $table = new Submission();

        $table->problem_id = $request->problem_id;
        $table->user_id = $request->user_id;
        $table->submission_time = date('Y-m-d H:i:s');
        $table->code = $request->code;

        $table->save();

        return redirect('/submission');
    }
}
