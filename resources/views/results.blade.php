@extends('index')
@section('content')
    <div style="text-align: center; margin-top: 2em">
        <h1 class="btn btn-success">Compare your result</h1>
    </div>
    <div class="card" style="margin-top: 2em">
        <table class="table">
            @foreach($arr as $i => $values)
                <tr>
                    @foreach($values as $j => $value)
                        <td @if($j.$i == $selectedId)style="background-color: red" @endif>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
    <div style="text-align: center;margin-top: 30px">
        <a class="btn btn-warning" href="{{route('pet')}}" role="button">Back</a>
    </div>
@endsection
