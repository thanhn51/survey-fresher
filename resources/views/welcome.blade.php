@extends('index')
@section('content')
    <style>
        p {
            background-color: #fff;
            color: #636b6f;
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            font-size:100px;
            height: 50vh;
            margin: 0;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        label{
            background-color: #fff;
            color: #636b6f;
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            font-size:25px;
        }
    </style>
    <p>Welcome to survey</p>
    <form method="post" action="{{route('getEmail')}}">
        @csrf
        <div class="form-group" style="text-align: center">
            <label> Insert your email to begin
                @error('email')
                <div class="alert alert-danger" style="margin-top: 10px;font-size: 15px">{{ $message }}</div>
                @enderror
                <input  value="{{ old('email') }}"  class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" >
            </label>

            <button  type="submit" class="btn btn-primary">Begin</button>

        </div>

    </form>
@endsection
