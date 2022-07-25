@extends('adminlte::page')

@section('title', 'Operating Units')

@section('content_header')
    <h1>Operating Units</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Operating Units</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Name
                    </th>
                    <th style="width: 30%">
                        PREXC Programs
                    </th>
                    <th style="width: 20%" class="text-center">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($operating_units as $operating_unit)
                    <tr>
                        <td>
                            {{ $operating_unit->id }}
                        </td>
                        <td>
                            <a>
                                {{ $operating_unit->name }}
                            </a>
                            <br>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td class="project_progress">
                            @foreach($operating_unit->prexcs as $prexc)
                                <small class="badge badge-success">{{$prexc->name}}</small>
                            @endforeach
                        </td>
                        <td class="text-nowrap text-center">
                            <a class="btn btn-primary btn-sm" href="{{ route('operating-units.show', $operating_unit) }}">
                                <i class="fas fa-eye">
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('operating-units.edit', $operating_unit) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="deleteOu({{ $operating_unit }})">
                                <i class="fas fa-trash">
                                </i>
                            </a>

                            <form action="" id="delete-operating-unit-{{ $operating_unit->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if($operating_units->hasPages())
            <div class="card-footer">
                {{ $operating_units->links() }}
            </div>
        @endif
    </div>
@stop
