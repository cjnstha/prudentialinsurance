<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index(){
        $investors = Investor::all();
        return view('frontend.investment.index',compact('investors'));
    }
}