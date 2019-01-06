@extends('layouts.app')
@section('meta-tags')
  <meta name="route-clicker" content="{{ route('route-clicker') }}">
  <meta name="point" content="{{ $index }}">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-3">
        Точка: test{{ $index }} <br>
        IP: {{ \Request::ip() }}
    </div>
</div>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/clicker.js') }}"></script>
@endpush
