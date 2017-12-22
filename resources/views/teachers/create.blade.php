@extends('teachers.app')

@section('title', 'Create a new teacher')

@section('teachers_contents')
    <form method="post" action="store">
        {{ csrf_field() }}
        教師姓名：<input type="text" name="name"/><br/>
        教師email：<input type="text" name="email"/><br/>
        教師專業：<input type="text" name="professional"/><br/>
        教師url：<input type="text" name="url" value="{{ 'http://www.cin.lhu.edu.tw/' }}}"/><br/>
        <input type="submit" value="送出"/>
    </form>
@stop
