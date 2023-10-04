@extends('layouts2.master')

@section('content')


<form action="{{route('order.store')}}" method="POST">
    @csrf
    @method("POST")
    <select name="p_ids[]" id="">
        @foreach ($products as $product)
            <option value="{{$product->id}}"> {{$product->name}} </option>
        @endforeach
    </select>
    <input type="number" name="quantity[]"> <br> <br>



    <select name="p_ids[]" id="">
        @foreach ($products as $product)
            <option value="{{$product->id}}"> {{$product->name}} </option>
        @endforeach
    </select>
    <input type="number" name="quantity[]"> <br> <br>



    <select name="p_ids[]" id="">
        @foreach ($products as $product)
            <option value="{{$product->id}}"> {{$product->name}} </option>
        @endforeach
    </select>
    <input type="number" name="quantity[]"> <br> <br>

    <input type="submit" value="Buy">
</form>
<br> <br>
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('user.index') }}">cancel</a>
</div>

@endsection