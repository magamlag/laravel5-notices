@extends('...app')

@section('content')
<?php print_r(SQLite3::version()); ?>
@stop