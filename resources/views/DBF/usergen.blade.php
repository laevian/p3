@extends('layouts.master')

@section('header')
<a href="/"><h1>Developer's Best Friend</h1></a>
@stop

@section('content')
<p>To use the Random User generator, select the number of users (1-10) you would
  like to generate and then hit the generate button.</p><br/>

  @if(count($errors) > 0)
  <ul class="error">
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
  @endif

  <form method="GET" action="/usergen/create">
  Number of Paragraphs: <input name="numUsers">
  <input type="submit" value="Submit">
</form><br><br>

  @if(isset($users))
  <div class="users">{!!$users!!}</div>
  @else

  @endif

@stop
