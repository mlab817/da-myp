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
        <form action="{{ route('operating-units.update', $operating_unit) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $operating_unit->name }}">
                </div>

                <div class="form-group">
                    <label for="label" class="form-label">Acronym</label>
                    <input type="text" class="form-control" name="label" value="{{ $operating_unit->label }}">
                </div>

                <div class="form-group">
                    <label for="label" class="form-label">PREXC</label>
                    @foreach(\App\Models\Prexc::where('level', 0)->with('children.children')->get() as $prexc)
                        <div class="form-check">
                            <input value="{{ $prexc->id }}" id="prexc_{{$prexc->id}}" class="form-check-input" type="checkbox" name="prexcs[]"
                               @if(in_array($prexc->id,$operating_unit->prexcs()->pluck('id')->toArray())) checked @endif>
                            <label for="prexc_{{$prexc->id}}" class="form-check-label">
                                {{ $prexc->name }}
                            </label>
                        </div>

                        @foreach($prexc->children as $child)
                            <div class="form-check ml-4">
                                <input value="{{ $child->id }}" id="prexc_{{$child->id}}" class="form-check-input" type="checkbox" name="prexcs[]"
                                    @if(in_array($child->id,$operating_unit->prexcs()->pluck('id')->toArray())) checked @endif>
                                <label for="prexc_{{$child->id}}" class="form-check-label">
                                    {{ $child->name }}
                                </label>
                            </div>

                            <div class="ml-4">
                                @foreach($child->children as $child1)
                                    <div class="form-check ml-4">
                                        <input value="{{ $child1->id }}" id="prexc_{{$child1->id}}" class="form-check-input" type="checkbox" name="prexcs[]"
                                           @if(in_array($child1->id,$operating_unit->prexcs()->pluck('id')->toArray())) checked @endif>
                                        <label for="prexc_{{$child1->id}}" class="form-check-label">
                                            {{ $child1->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </form>
    </div>
@stop
