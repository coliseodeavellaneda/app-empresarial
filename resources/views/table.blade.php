@extends('layouts.admin')

@section('admin-content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
        <p class="mb-4"><a target="_blank"></p>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/{{$resource}}/create" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">NUEVO</span>
                </a> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                @foreach ($columns as $column)
                                    <th>{{ ucfirst($column) }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $model)
                            <tr>
                                @foreach ($columns as $column)
                                    <td>{{ $model->$column }}</td>
                                @endforeach
                                <td>
                                    <div class="row">
                                        <a href="/{{ $resource }}/{{ $model->id }}/edit" class="btn btn-success btn-icon-split ml-3 mr-3">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Editar</span>
                                        </a>
                                        <form action="/{{ $resource }}/{{$model->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Eliminar</span>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
