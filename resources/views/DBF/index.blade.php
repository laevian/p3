@extends("layouts.master")

@section('header')
<h1>Developer's Best Friend</h1>
@stop

@section('content')
<p>Welcome to the Developer's Best Friend tool! Click one of the buttons below to get started:</p><br />
<a href="/lorem"><div class="button">
  <span class="buttontext">Lorem Ipsum Text Generator</span>
</div></a>
<a href="/usergen"><div class="button">
  <span class="buttontext">Random User Generator</span>
</div></a>
@stop
