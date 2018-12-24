@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Точка: test{{ $index }} 
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">IP</th>
                            <th scope="col">От</th>
                            <th scope="col">До</th>
                            <th scope="col">Количество</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($ip as $address)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $address->ip }}</td>
                                    <td>{{ date('Y-m-d H:i:00', strtotime($address->date)) }}</td>
                                    <td>{{ date('Y-m-d H:i:59', strtotime($address->date)) }}</td>
                                    <td>{{ $address->count }}</td>
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