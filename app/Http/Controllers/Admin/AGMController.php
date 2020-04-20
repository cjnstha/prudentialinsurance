<?php

namespace App\Http\Controllers\Admin;

use App\Models\AGMForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AGMController extends Controller
{
    public function index(){
        $agms = AGMForm::all();
        return view('admin.agm-minute.index',compact('agms'));
    }

    public function create(){
        return view('admin.agm-minute.create');
    }

    public function store(Request $request){
//        return 'adadasdad';
        if($request->isMethod('post')){
            $data = $request->all();
            $agms = new AGMForm;
            $agms->agm_name = $data['agm_name'];
            $agms->agm_files = $data['agm_files'];
            $agms->status = $data['status'];
            $agms->save();
            return redirect()->route('agm.index')->with('flash_message_success','AGM Minute Added Successfully');
        }
    }
}
