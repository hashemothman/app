@extends('layouts2.master')
@section('content')
<div class="container" style="margin: 5%">

        {{-- <div>
            <form  action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4"><a style="margin: 5px" class="btn btn-success" href="{{route('Product.create')}}">Insert Product</a></div>
                    <div class="col-md-3 offset-md-3"><button type="submit" class="btn btn-danger">Logout</button></div>
                </div>
            </form>
        </div> --}}


    <table class="table table-striped">
        @csrf
        <thead>
        <tr class="table-dark">
            <th scope="col">Action</th>
            <th scope="col">category</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Name</th>
            <th scope="col">No</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @if( isset($var) )
        @foreach($var as $itme)
            <tr >
                <td>
                    <form action="{{route('product.destroy',$itme->id)}}" method="POST">
                        @csrf
                        <a  href="{{ route('product.show',$itme) }}">Show</a>
                        <a  href="{{ route('product.edit',$itme->id) }}">Edit</a>
                        @method('DELETE')
                        <button type="submit" >Delete</button>
                    </form>
                </td>
                <td>{{ $itme->category_id }}</td>
                <td>{{ $itme->desc }}</td>
                <td>{{ $itme->price }}</td>
                <td>{{ $itme->name }}</td>
                <th scope="row">{{++ $i}}</th>

            </tr>
        @endforeach
        @endif
    </table>
</div>
@endsection


