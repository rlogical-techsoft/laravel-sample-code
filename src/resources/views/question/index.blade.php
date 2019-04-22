<!-- Question form HTML content -->
@extends('layouts.app')

@section('content')
<div class="row mt-3">
    <div class="col-sm-12">       
        {{ csrf_field() }}
        <h4 class="mb-3">Ask Question</h4>
        @include('layouts.partials.flash-messages')
        
            {{ Form::open(array('route' => ['question.sendquestion'],'class' => 'form-horizontal', 'id' => 'question_form' )) }}
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter email')) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        {{ Form::textarea('question', null, array('class' => 'form-control', 'placeholder' => 'Enter question')) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        {{ Form::submit('Submit', array('class' => 'btn btn-primary frm_submit')) }}
                    </div>
                </div>
            </div>
            {{ Form::close() }}
    </div>
</div>
@endsection
