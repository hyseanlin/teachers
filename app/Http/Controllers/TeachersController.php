<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
use \App\Teacher;

class TeachersController extends Controller
{
    //

    public function index()
    {
        return view('teachers.index')->with('teachers', Teacher::all());
    }

    public function show($id)
    {
        $t = Teacher::find($id);

        return view('teachers.show')->with('teacher', $t);
    }

    public function create()
    {
        return view('teachers.create');
    }

    /*
    public function store() {
    // 使用 Input 來取得使用者從表單輸入之資料
    $name = Input::get('teacher_name');
    $id = Input::get('teacher_id');
    return '教師名稱：' . $name . '，教師編號：' . $id;
    }
    */

    public function store(Request $request)
    {
        $teacher_new = new Teacher;

        $teacher_new->name = $request->input('name');
        $teacher_new->email = $request->input('email');
        $teacher_new->professional = $request->input('professional');
        $teacher_new->url = $request->input('url');

        $teacher_new->save();

        return redirect('teachers');
        //return view('teachers.index')->with('teachers', Teacher::all());
    }
}
