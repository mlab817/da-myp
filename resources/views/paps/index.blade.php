@extends('adminlte::page')

@section('title', 'Programs, Activities & Projects')

@section('content_header')
    <h1>Programs, Activities & Projects</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add PAP</h3>
            <div class="card-tools">
                <a href="{{ route('paps.create') }}" class="btn btn-tool">Add</a>
            </div>
        </div>
        <form action="">
            <div class="card-body">


            </div>
            <div class="card-footer">

            </div>
        </form>
    </div>
@stop
