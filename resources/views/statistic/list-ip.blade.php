
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Список IP:                    
                </div>

                <div class="card-body">
                    <ul>                            
                        @forelse ($ip as $address)
                            <li><a href="{{ route('info.ip', $address->ip) }}">{{ $address->ip }}</a></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
