@extends('layouts.master')

@section('header')
<h1>Lorem Ipsum Text Generator</h1>
@stop

@section('content')
<p>To use the Lorem Ipsum generator, select the number of paragraphs (1-10) you would
  like to generate and then hit the generate button.</p><br/>

  @if(count($errors) > 0)
  <ul class="error">
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
  @endif

  <form method="GET" action="/lorem/create">
  Number of Paragraphs: <input name="numPars">
  <input type="submit">
  </form><br><br>

@if(isset($paragraphs))
<div class="lorem">{{$paragraphs}}</div>
@else

@endif

@stop
