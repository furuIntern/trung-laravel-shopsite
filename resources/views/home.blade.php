@extends('layouts.app')
@section('goods')
<div class="row mt-3">
    @foreach ($goods as $good)
    <div class='col-4 mb-3'>
        <div class="card p-3">
            <div class="card w-100" style='height: 150px'></div>
            <h4>{{$good->name}}</h4>
            <div>{{$good->cost}}vnd</div>
            <hr class='mb-0'/>
            <div class = 'text-center my-3'>
            <a class="btn btn-success" href='AddtoCart/{{$good->id}}'">Add to cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class='d-flex justify-content-center'>{{$goods->links()}}</div>
@endsection
@section('cart')
@unless($items == 'empty')
    @foreach($items as $key => $item)
    <div class="d-flex justify-content-between  align-items-center">
    <div><h4>{{$item['name']}}</h4></div>
    <a href="RemoveItem/{{$key}}" class='badge badge-danger'>&times;</a>
    </div>
    <div class="d-flex justify-content-between">
        <div class='text-danger'>
            Cost: {{$item['cost']}}
        </div>
        <div>
            x{{$item['count']}}
        </div>
    </div>
    <div class='dropdown-divider'></div>
    @endforeach
@endunless
@endsection