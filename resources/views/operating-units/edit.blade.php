@extends('adminlte::page')

@section('title', 'Operating Units')

@section('content_header')
    <h1>Operating Units</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Operating Unit</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{ route('operating-units.update', $operating_unit) }}">
            <div class="card-body">

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </form>
    </div>
@stop
