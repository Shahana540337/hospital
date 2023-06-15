<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use App\Models\Hms;

class HmsController extends Controller
{
    public function welcome(){
        $all_data = Hms::select('*')->orderBy('id', 'DESC')->get();                                                     
        return view('welcome',compact('all_data'));
    }
    public function about(){
        $all_data = Hms::select('*')->orderBy('id', 'DESC')->get();                                                     
        return view('all_blade.about',compact('all_data'));
    }
    public function blood_donate(){
        $all_data = Hms::select('*')->orderBy('id', 'DESC')->get();                                                     
        return view('all_blade.blood_donate',compact('all_data'));
    }
    public function child_care(){
        $all_data = Hms::select('*')->orderBy('id', 'DESC')->get();                                                     
        return view('all_blade.child_care',compact('all_data'));
    }
    public function daignostic(){
        $all_data = Hms::select('*')->orderBy('id', 'DESC')->get();                                                     
        return view('all_blade.daignostic',compact('all_data'));
    }
    public function doc_info(){
        $all_data = Hms::select('*')->orderBy('id', 'DESC')->get();                                                     
        return view('all_blade.doc_info',compact('all_data'));
    }
}
