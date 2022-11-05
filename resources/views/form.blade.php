@extends('layouts.app')

@section('content')
    <div class="container-fluid justify-content-center d-flex mt-5">
        <div class="card w-50 mt-5">
            <h1 class="h3 ml-3 mt-3 text-gray-800">{{ $title }}</h1>
            <form class="user p-3" action="@if (! empty($model))/{{ $resource }}/{{$model->id}} @else /{{ $resource }} @endif" method="POST">
                @csrf
                @if (! empty($model))
                    @method('put')
                @endif
                @foreach ($columns as $column)
                    <div class="form-group">
                        <label for="{{ $column }}" class="col-md-4 col-form-label text-md-end">{{ ucfirst($column) }}</label>
                        <input type="{{ $column }}" class="form-control form-control-user"
                            id="{{ $column }}" placeholder="{{ ucfirst($column) }}" name="{{ $column }}"@if (! empty($model)) value="{{$model->$column}}" @endif>
                    </div>
                @endforeach
                <input type="submit" class="btn btn-success btn-user btn-block" value="@if (! empty($model)) Modificar @else Ingresar @endif">  
            </form>
        </div>
    </div>
@endsection