@extends('index')
@section('content')
    <div style="text-align: center; margin-top: 2em">
        <h1 class="btn btn-success">Choose your favourite pet</h1>
    </div>
    <div class="row" style="margin-top: 2em">
        @foreach($pets as $pet)
            <div class="col-md-4">
                <div class="card @if(session()->get('pet_id') == $pet->id){{ "selected" }}@endif" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('image/'.$pet->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$pet->name}}</h5>
                        <p class="card-text">{{$pet->description}}</p>
                    </div>
                    <div style="text-align: center" class="card-footer">
                        <a href="{{route('selectPet',$pet->id)}}" class="btn btn-primary">Select</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center;margin-top: 30px">
        <a class="btn btn-warning" href="{{route('food')}}" role="button">Back</a>
    </div>

@endsection
