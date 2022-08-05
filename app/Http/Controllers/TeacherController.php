<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher(){

        $data = Teacher::paginate(4);


        return view('pages.guru', ['title'=>'Teachers'], ['data'=>$data]);
    }

 
}
