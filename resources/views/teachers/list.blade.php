@extends('teachers.app')

@section('title', 'Teacher List')

@section('teachers_contents')
        列示所有老師(使用 for)：<br/>
        @for ($i = 0; $i < count($teachers); $i++)
            {{ $teachers[$i] }} <br/>
        @endfor
        <hr>
        列示所有老師(使用 foreach)：<br/>
        @foreach($teachers as $teacher)
            {{ $teacher }} <br/>
        @endforeach
        <hr>

        列示所有老師(使用 forelse)：<br/>
        @forelse($teachers as $teacher)
            {{ $teacher }} <br/>
        @empty
            目前沒有老師
        @endforelse

@stop
