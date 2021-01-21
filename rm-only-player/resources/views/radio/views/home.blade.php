@extends('radio.layouts.app')

@section('radio-name')
  <div class="title m-b-md">
    Radio Mickyandonie
  </div>
@endsection

@section('notes')
  <div class="muzieknootjes">
    <div class="noot-1">
      &#9835; &#9833;
    </div>
    <div class="noot-2">
      &#9833;
    </div>
    <div class="noot-3">
      &#9839; &#9834;
    </div>
    <div class="noot-4">
      &#9834;
    </div>
    <div class="noot-5">
      &#9839; &#9835;
    </div>

    <div style="display: flex; width: 100%; flex-direction: column; align-items: center; justify-content: center; height: 100%;">

      <div style="display: flex; width: 100%; align-items: center; justify-content: center">
        <div class="logo">
          <img src="{{ asset('assets/logo.png') }}"/>
        </div>
      </div>

      <div style="display: flex; width: 100%; align-items: center; justify-content: center">
        <audio controls="" preload="metadata" style=" width:300px;">
          <source src="http://173.82.208.105:8017/index.html;" type="audio/mpeg">
        </audio>
      </div>

    </div>

  </div>
@endsection