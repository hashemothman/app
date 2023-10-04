@extends('layouts2.master')

@section('content')
    <div class="container" style="margin: 5%">




        <table class="table table-striped">
            @csrf
            <thead>
            <tr class="table-dark">
                <th scope="col">status</th>
                <th scope="col">total Price</th>
                <th scope="col">User ID</th>
                <th scope="col">No</th>
            </tr>

            @php $i = 0; @endphp
            {{-- {{route('order.index')}} --}}
            @if( isset($orders) )
                @foreach($orders as $order)
                    <tr >
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->user_id }}</td>
                        <th scope="row">{{++ $i}}</th>
                    </tr>
            @endforeach
            @endif
        </table>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('user.index') }}">Back</a>
        </div>
        
    </div>
@endsection


