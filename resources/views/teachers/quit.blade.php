@extends('teachers.app')

@section('title', 'LHU 離職老師')

@section('teachers_contents')
        <table class="flex-center position-ref">
            <tr>
                <th>姓名</th>
                <th>電子郵件信箱</th>
                <th>專長</th>
                <th>狀態</th>
            </tr>
        @forelse($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name  }}</td>
                <td><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a></td>
                <td>{{ $teacher->professional  }}</td>
                <td>
                    <a href="{{ route('teachers.restore', ['id' => $teacher->id])  }}">復職</a></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">目前沒有老師</td>
            </tr>
        @endforelse
        </table>
@stop
