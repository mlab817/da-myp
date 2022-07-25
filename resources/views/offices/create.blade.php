@extends('adminlte::page')

@section('title', 'Offices')

@section('content_header')
    <h1>Create Office</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Office</h3>
        </div>
        <form action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="acronym">Acronym</label>
                    <input type="text" class="form-control" id="acronym" placeholder="Enter acronym">
                </div>

                <div class="form-group">
                    <label for="operating_unit_id">Operating Unit</label>
                    <select id="operating_unit_id" name="operating_unit_id" class="form-control">
                        <option value="" selected>Select OU</option>
                        @foreach($operating_units as $ou)
                        <option value="{{ $ou->id }}">{{ $ou->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>
@stop
