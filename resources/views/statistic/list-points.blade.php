@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Список Точек:                   
                </div>

                <div class="card-body">               
                    <ul>                            
                        @forelse ($points as $point)
                            <li> <a href="{{ route('info.point', $point->index) }}">test{{ $point->index }} </a></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection