@extends('layout', [ 'title' => 'Очередь заказов' ])

@section('content')

    <h2>{{$title}}</h2>
    <table>
        <tr>
            <th>Номер заказа</th>
            {{--        <th>Наименование</th>--}}
            <th>Дата создания</th>
        </tr>
        @foreach($queue as $log)
            <tr>
                <td>{{$log->id}}</td>
                {{--            <td>{{$log->name}}</td>--}}
                <td>{{$log->created_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection