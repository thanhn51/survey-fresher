@extends('index')
@section('content')
    <div style="text-align: center; margin-top: 2em">
        <h1 class="btn btn-success">Choose your favourite food</h1>
    </div>
    <div class="row" style="margin-top: 2em">
        @foreach($foods as $food)
            <div class="col-md-4">
                <div class="card @if(session()->get('food_id') == $food->id){{ "selected" }}@endif" style="width: 18rem;" >
                    <img class="card-img-top" src="{{asset('image/'.$food->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$food->name}}</h5>
                        <p class="card-text">{{$food->description}}</p>
                    </div>
                    <div style="text-align: center" class="card-footer">
                        <a href="{{route('selectFood',$food->id)}}" class="btn btn-primary">Select</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center;margin-top: 30px">
    <a class="btn btn-warning" href="{{route('createEmail')}}" role="button">Back</a>
    </div>
@endsection
