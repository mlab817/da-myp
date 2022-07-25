@extends('adminlte::page')

@section('title', 'Offices')

@section('content_header')
    <h1>Offices</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Offices</h3>

            <div class="card-tools">
                <a href="{{ route('offices.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Acronym</th>
                        <th>Operating Unit</th>
                        <th>PREXC</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offices as $office)
                        <tr>
                            <td>{{ $office->name }}</td>
                            <td>{{ $office->acronym }}</td>
                            <td>{{ $office->operating_unit->name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('offices.show', $office) }}">
                                    <i class="fas fa-eye">
                                    </i>
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('offices.edit', $office) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="#" onclick="deleteOffice({{ $office }})">
                                    <i class="fas fa-trash">
                                    </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
