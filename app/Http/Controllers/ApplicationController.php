<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;
use App\Models\LearningCentre;
use App\Models\Programme;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        if($user->hasRole('student')){
            $applications = $user->applications()->paginate(5);
        } else {
            $applications = Application::with(['status', 'programme','learning_centre'])->latest()->paginate(5);
        }

        return view('applications.index', compact('applications'))
            ->with('i', (request()->input('page', 1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmes = Programme::all();
        $learning_centres = LearningCentre::all();
        return view('applications.create', compact('programmes','learning_centres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Status $status)
    {
        $request->validate([
            'mode_study' => 'required',
            'programme' => 'required',
            'learning_centre' => 'required',
        ]);
        
        $waiting = $status->waiting();

        Application::create([
            'user_id' => Auth::user()->id,
            'status_id' =>  $waiting,
            'mode_study' => $request->mode_study,
            'programme_id' => $request->programme,
            'learning_centre_id' => $request->learning_centre,
        ]);

        return redirect()->route('applications.index')
            ->with('success', 'Application updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('applications.show',compact('application'));
    }

    public function approve(Status $status, $application_id)
    {
        $admit = $status->admit();
        $application = Application::where('id',$application_id)->first();
               
        $application->update([
        'status_id' => $admit,
        ]);
        
        return redirect()->route('applications.index')
            ->with('success', 'Application updated successfully');
    }

    public function reject(Status $status, $application_id){
        $deny = $status->deny();
        $application = Application::where('id',$application_id)->first();
               
        $application->update([
            'status_id' => $deny,
        ]);
        
        return redirect()->route('applications.index')
            ->with('success', 'Application updated successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
