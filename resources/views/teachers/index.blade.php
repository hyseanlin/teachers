@extends('teachers.app')

@section('title', 'Teacher List')

@section('teachers_contents')
        列示所有老師：<br/>
        <table border="1" align="center">
            <tr>
                <th>老師編號</th>
                <th>老師姓名</th>
                <th>老師 Email </th>
                <th>老師專長</th>
                <th>老師網頁</th>
            </tr>
        @forelse($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id  }}</td>
                <td>{{ $teacher->name  }}</td>
                <td><a href="{{ $teacher->email  }}">{{ $teacher->email  }}</a></td>
                <td>{{ $teacher->professional  }}</td>
                <td><a href="{{ $teacher->url  }}">{{ $teacher->url  }}</a></td>
            </tr>
        @empty
            目前沒有老師
        @endforelse
        </table>
@stop
