@extends('layouts.parent')

@section('killer')

    <div class="col-md-offset-3">
        <div class="col-md-6">
            {!! Form::open(['route'=>'add_task.store','class'=>'form']) !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('Name of Task') !!}

            {!! Form::text('name',null,['class'=>'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            {!! Form::label('Status') !!}

            {!! Form::select('status',['completed'=>'Completed','uncompleted'=>'Un-completed'],'uncompleted',['class'=>'form-control']) !!}
            <br>
            {!! Form::submit('Save',['class'=>'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

        </div>

    </div>



    @endsection