@extends('adminlte::page')

@section('title', 'PREXC')

@section('content_header')
    <h1>PREXC</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="label" class="form-label">PREXC</label>
                @foreach(\App\Models\Prexc::where('level', 0)->with('children.children')->get() as $prexc)
                    <div class="form-check">
                        <input value="{{ $prexc->id }}" id="prexc_{{$prexc->id}}" class="form-check-input" type="checkbox" name="prexcs[]">
                        <label for="prexc_{{$prexc->id}}" class="form-check-label">
                            {{ $prexc->name }}
                        </label>
                    </div>

                    @foreach($prexc->children as $child)
                        <div class="form-check ml-4">
                            <input value="{{ $child->id }}" id="prexc_{{$child->id}}" class="form-check-input" type="checkbox" name="prexcs[]">
                            <label for="prexc_{{$child->id}}" class="form-check-label">
                                {{ $child->name }}
                            </label>
                        </div>

                        <div class="ml-4">
                            @foreach($child->children as $child1)
                                <div class="form-check ml-4">
                                    <input value="{{ $child1->id }}" id="prexc_{{$child1->id}}" class="form-check-input" type="checkbox" name="prexcs[]">
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
    </div>
@stop
