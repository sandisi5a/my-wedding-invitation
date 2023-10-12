<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use App\Models\Participant;
use App\Models\Undangan;
use CreateAttendanceTable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function participant()
    {
        $participant = \App\Models\Participant::all();
        return view ('admin.participant', ['participant'=> $participant]);
    }

    public function createParticipant(Request $request)
    {
        $name = $request->input('name');
        $location = $request->input('location');
       
        $new = new Participant();
        $new->name = $name;
        $new->location = $location;
        $new->url = Str::slug($name);
        $new->save();


        // \App\Models\Participant::create($request->all());
        return redirect('/participant')->with('sukses','Sukses di simpan');
    }
    public function editParticipant($url)
    {
        $data = Participant::where('url', $url)->first();

        return view('participant',[ 'data'=>$data ]);
    }

     public function getAttendance()
    {
        $attendance = \App\Models\Attendance::all();
        return view('admin.attendance', ['attendance'=> $attendance]);
    }

    public function createattendance(Request $request)
    {
        
        \App\Models\attendance::create($request->all());
        return redirect('/attendance')->with('sukses','Sukses di simpan');
    }
    public function invitation($name)    
    {
        
        $data = Undangan::all();
        return view('invitation.index', ['name' => $name, 'data' => $data] ) ;
        

    }
    public function createInvitation(Request $request)
    {
        
        \App\Models\Undangan::create($request->all());
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
