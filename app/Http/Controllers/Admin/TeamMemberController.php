<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamMemberController extends Controller
{
   public function index(){
       return view('admin.team-members.index');
   }

   public function create(){
       return view('admin.team-members.create');
   }

   public function store(Request $request){
       if($request->isMethod('post')){
           $data = $request->all();
           $team = new TeamMember;
           $team->team_image = request()->file('team_image')->store('team', 'public');
           $team->team_name = $data['team_name'];
           $team->team_position = $data['team_position'];
           $team->team_email = $data['team_email'];
           $team->team_phone = $data['team_phone'];
           $team->team_description = $data['team_description'];
           $team->team_description_nep = $data['team_description_nep'];
           $team->team_name_nep = $data['team_name_nep'];
           $team->team_position_nep = $data['team_position_nep'];
           $team->status = $data['status'];
           $team->save();
           return redirect()->route('team.index');
       }
   }
}
