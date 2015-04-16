@extends('app')

@section('content')
<h1 class="page-heading">Confirm</h1>

{!! Form::open(['action'=>'NoticesController@store']) !!}
  <div class="form-group">
  {!! Form::label( 'template', 'Template:' ) !!}
  {!! Form::textarea('template', $template, ['class' => 'form-control'] ) !!}
  </div>
  {!! Form::submit('Deliver DMCA Notica Now', ['class' => 'btn btn-primary form-control']) !!}
{!! Form::close() !!}
@endsection

