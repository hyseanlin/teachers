<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;

class TeachersController extends Controller
{
    //

    public function index()
    {
        $teachers_all = array('Sean', 'Mary', 'John', 'David', 'George');

        return view('teachers.list')->with('teachers', $teachers_all);
    }

    public function show($id)
    {
        return view('teachers.show')->with('tid', $id);
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
        $name = $request->input('teacher_name');
        $id = $request->input('teacher_id');
        return '教師名稱：' . $name . '，教師編號：' . $id;
    }
}
