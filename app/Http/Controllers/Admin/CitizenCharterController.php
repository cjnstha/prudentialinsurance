<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CitizenCharter;
use Illuminate\Http\Request;

class CitizenCharterController extends Controller
{
    public function index(){
        $citizens = CitizenCharter::all();
        return view('admin.citizen-charter.index',compact('citizens'));
    }

    public function create(){
        return view('admin.citizen-charter.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $citizens = new CitizenCharter;

            $citizens->title = $data['title'];
            $citizens->title_nep = $data['title_nep'];
            $citizens->details = $data['details'];
            $citizens->details_nep = $data['details_nep'];
            $citizens->status = $data['status'];
            $citizens->save();
            return redirect()->route('citizens.index')->with('flash_message_success','Citien Charter added successfully');
        }
    }
}
