@extends('layouts2.master')

@section('content')
    <div class="container" style="margin: 5%">
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">product name</label>
                <input type="text" class="form-control" name="name" placeholder="laptop , mobile . . .">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">product price</label>
                <input type="text" class="form-control" name="price" placeholder="0.00">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">product details</label>
                <textarea class="form-control"  rows="3" name="desc"></textarea>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">category</label>
                <input type="text" class="form-control" name="category_id" placeholder="1">
            </div>



            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>

                <a class="btn btn-primary" href="{{ route('product.index') }}">cancel</a>
            </div>

            
        </form>

        <div class="contanier" style="margin-top: 10px">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>
@endsection
