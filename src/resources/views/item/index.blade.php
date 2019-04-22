<!-- Items listing HTML page -->
@extends('layouts.app')

@section('content')
<div class="row mt-3">
    <div class="col-sm-12">       
        {{ csrf_field() }}
        <h4>Items List</h4>
        @include('layouts.partials.flash-messages')
        <!-- Search form -->
        {{ Form::open(array('class' => 'form-horizontal search_form', 'id' => 'search_form' )) }}
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::text('name', null, array('class' => 'form-control filter_input', 'placeholder' => 'Search Item')) }}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::select('type_id', ['' => 'Select type'] + $types, null, array('class' => 'form-control filter_input') ) }}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::text('price', null, array('class' => 'form-control filter_input', 'placeholder' => 'Enter maximum price')) }}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::submit('Submit', array('class' => 'btn btn-primary frm_submit')) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
        
        <!-- Listing table -->
        <table id="item_dt" class="table table-bordered dt-responsive">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Item Type</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <a class="btn btn-primary mb-3" href="{{ route('question.index') }}">Ask your question</a>
    </div>
</div>
@endsection
