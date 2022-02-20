@extends('layout', [ 'title' => 'Главная страница' ])

@section('content')

    <h2>Главная страница</h2><br>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>counter</th>
        </tr>

        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td><a href="/update/{{$task->id}}">{{$task->name}}</a></td>
                <td>{{$task->counter}}</td>
            </tr>
        @endforeach

    </table>

@endsection