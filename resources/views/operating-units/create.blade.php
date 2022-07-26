@extends('adminlte::page')

@section('title', 'Operating Units')

@section('content_header')
    <h1>Operating Units</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Operating Unit</h3>
        </div>
        <form action="{{ route('operating-units.store') }}" method="post">
            @csrf
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
