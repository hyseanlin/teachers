@extends('teachers.app')

@section('teachers_contents')
    <form method="post" action="store">
        {{ csrf_field() }}
        教師姓名：<input type="text" name="teacher_name"/><br/>
        教師編號：<input type="text" name="teacher_id" /><br/>
        <input type="submit" value="送出"/>
    </form>
@stop
