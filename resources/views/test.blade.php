@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-3">
            Точка: test{{ $index }} <br>
            IP: {{ \Request::ip() }}
        </div>
    </div>

@endsection
