@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--<div class="card">--}}
                <div class="card-header">Поселки</div>
                {{--<div class="card-body">--}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Название</td>
                                <td>Адрес</td>
                                <td>Площадь(гектар)</td>
                                <td>Горячая линия</td>
                                <td>YouTube</td>
                                <td>Фото</td>
                                <td>Презентация</td>
                                @if($data['su'])
                                <td colspan="2">Действия</td>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data['towns'] as $town)
                            <tr>
                                <td>{{ $town->id }}</td>
                                <td>{{ $town->title }}</td>
                                <td>{{ $town->address }}</td>
                                <td>{{ $town->size }}</td>
                                <td>{{ $town->phoneNumber }}</td>
                                <td><a href="{{ $town->youTubeLink }}">Ссылка</a></td>
                                <td>{{ $town->picture }}</td>
                                <td>{{ $town->presentation }}</td>
                                @if($data['su'])
                                <td><a class="btn btn-dark" href="{{ route('town_edit', $town->id) }}">Изменить</a></td>
                                <td><a class="btn btn-dark" href="{{ route('town_destroy', $town->id) }}">Удалить</a></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                {{--</div>--}}
            </div>
        {{--</div>--}}
    </div>
</div>
@endsection
