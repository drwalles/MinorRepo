<?php

namespace App\Http\Controllers\Admin;

use App\Problem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = DB::table('problems')->orderBy('created_at', 'desc')->paginate(20);
//        $problems = DB::table('problems')->orderBy('created_at', 'desc')->paginate(2);
        return view('admin.problem.index', compact('problems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.problem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $problem = Problem::create([
                'problem_name' => $request->input('problem_name'),
                'problem_description' => $request->input('problem_description'),
                'problem_setter' => $request->input('problem_setter'),
                'total_solved' => $request->input('total_solved'),
                'total_submission' => $request->input('total_submission'),
                'time_limit' => $request->input('time_limit'),
                'memory_limit' => $request->input('memory_limit'),
                'sample_input' => $request->input('sample_input'),
                'sample_output' => $request->input('sample_output'),
                'tc_input' => $request->input('tc_input'),
                'tc_output' => $request->input('tc_output')
            ]);

            if ($problem){
                return redirect()->back()
                    ->with('success', 'Problem created successfully');
            }
        }
        return back()->withInput()->with('errors','Failed to Create new problem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        $problem = Problem::where('id',$problem->id)->first();
        return view('admin.problem.show', ['problem' => $problem]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Problem $problem)
    {
        $problem = Problem::find($problem->id);
        return view('admin.problem.edit', ['problem'=>$problem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problem $problem)
    {
        $problemUpdate = Problem::where('id', $problem->id)
                                ->update([
                                   'problem_name' => $request->input('problem_name'),
                                   'problem_description' => $request->input('problem_description'),
                                   'problem_setter' => $request->input('problem_setter'),
                                   'time_limit' => $request->input('time_limit'),
                                   'memory_limit' => $request->input('memory_limit'),
                                   'sample_input' => $request->input('sample_input'),
                                   'sample_output' => $request->input('sample_output'),
                                   'tc_input' => $request->input('tc_input'),
                                   'tc_output' => $request->input('tc_output'),
                                    ]);
        if ($problemUpdate)
        {
            return redirect()->route('problem.show',['problem'=>$problem->id])
                            ->with('success', 'Problem updated Successfully');
        }
        return back()->withInput()->with('errors', 'The Problem could not be updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findProblem = Problem::find($id);
        $findProblem->delete();
        return redirect()->back()->with('success', 'The Problem Deleted Successfully');
    }
}
