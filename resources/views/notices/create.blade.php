@extends('app')

@section('content')
<h1 class="page-heading">Prepare a DMCA notice</h1>
    {!! Form::open(['method'=>'GET', 'action'=>'NoticesController@confirm']) !!}
      <div class="form-group">
      {!! Form::label( 'provider_id', 'Provider Id:' ) !!}
      {!! Form::select('provider_id', $providers, null, ['class' => 'form-control'] ) !!}
      </div>

      <div class="form-group">
      {!! Form::label( 'infringing_title', 'Infringing title:' ) !!}
      {!! Form::text('infringing_title', 'null', ['class' => 'form-control'] ) !!}
      </div>

      <div class="form-group">
      {!! Form::label( 'infringing_link', 'Infringing link:' ) !!}
      {!! Form::text('infringing_link', 'null', ['class' => 'form-control'] ) !!}
      </div>

      <div class="form-group">
      {!! Form::label( 'original_link', 'Original link:' ) !!}
      {!! Form::text('original_link', 'null', ['class' => 'form-control'] ) !!}
      </div>

      <div class="form-group">
      {!! Form::label( 'original_description', 'Original description:' ) !!}
      {!! Form::textarea('original_description', 'null', ['class' => 'form-control'] ) !!}
      </div>
      <div class="form-group">
      	{!! Form::submit('Preview Notice', ['class' => 'btn btn-primary form-control'] ) !!}
      </div>
    {!! Form::close() !!}

    @include('errors.list')
@stop