@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Таблицы</div>
                <div class="card-body">
                    <a class="btn btn-dark" href="{{ route('towns') }}">Поселки</a>
                    <a class="btn btn-dark" href="{{ route('houses') }}">Дома</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
