@extends('layouts2.master')

@section('content')
    <div class="container" style="margin: 5%">


        <table class="table table-striped">
            @csrf
            <thead>
            <tr class="table-dark">
                <th scope="col">category</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Name</th>
                <th scope="col">No</th>
            </tr>

            @php $i = 0; @endphp
            {{-- {{route('order.index')}} --}}
            @if( isset($var) )
                @foreach($var as $itme)
                    <tr >
                        <td>{{ $itme->category->name }}</td>
                        <td>{{ $itme->name }}</td>
                        <td>{{ $itme->price }}</td>
                        <td>{{ $itme->desc }}</td>
                        <th scope="row">{{++ $i}}</th>
                    </tr>
            @endforeach
            @endif
        </table>
    </div>
@endsection


