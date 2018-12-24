@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                IP: {{ $ip }}     
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Точка</th>
                            <th scope="col">От</th>
                            <th scope="col">До</th>
                            <th scope="col">Количество</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($points as $point)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>test{{ $point->index }}</td>
                                    <td>{{ date('Y-m-d H:i:00', strtotime($point->date)) }}</td>
                                    <td>{{ date('Y-m-d H:i:59', strtotime($point->date)) }}</td>
                                    <td>{{ $point->count }}</td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>                      
                        
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection