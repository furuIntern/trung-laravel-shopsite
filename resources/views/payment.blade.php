@extends('layouts.form')
@section('form')
    @isset($user)
        <div>Name: {{$user->usern}}</div>
        <div>Address: {{$user->address}}</div>
        <hr/>
    @else
        <div>ttttt</div>
    @endisset
    @foreach($items as $item)
        <div class="d-flex justify-content-between">
            <div>{{$item['name']}}</div>
            <div>
                <div>{{$item['count']}}</div>
                <div>{{$item['cost']}}</div>
            </div>
        </div>
    @endforeach
    <hr/>
        <div class="d-flex justify-content-end">
            <div class="text-danger">
                <h4>Total: {{$total}}</h4>
            </div>
        </div>
@endsection