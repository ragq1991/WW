@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование поселка {{ $town->title }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('town_update', $town->id) }}">
                        @csrf
                        @method('PATCH')
                        <input name="title"         type="text" placeholder="Название"              value="{{ $town->title }}" />
                        <input name="address"       type="text" placeholder="Адрес"                 value="{{ $town->address }}" />
                        <input name="size"          type="text" placeholder="Площадь(гектар)"       value="{{ $town->size }}" />
                        <input name="phoneNumber"   type="text" placeholder="Номер горячей линии"   value="{{ $town->phoneNumber }}" />
                        <input name="youTubeLink"   type="text" placeholder="Ссылка на YouTube"     value="{{ $town->youTubeLink }}" />
                        <input name="picture"       type="text" placeholder="Изображение"           value="{{ $town->picture }}" />
                        <input name="presentation"  type="text" placeholder="Презентация"           value="{{ $town->presentation }}" />
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
