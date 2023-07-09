{{-- <h1>Home page</h1>
<a href={{url("/")}}>Home</a> <br>
<a href={{url("about")}}>About</a> <br>
<a href={{url("contact")}}>Contact</a> <br> --}}

{{-- add subview by @include method --}}
{{-- @include('subview.Menu');
<br>
<br>
<br>
<br>
<h1>This is home page</h1>
<br>
<br>
<br>
<br>
@include('subview.Footer', ['footertext'=>'All rights reserved by Moshiur Asif']); --}}

{{-- @includeif method jodi subview thake tahole dekhabe r na thakle dekhabe na. atar subidha hocche sub view na thakle error show korbe na--}}

{{-- @includeIf('subview.Mene'); --}}

{{-- @includefirst method ki kore? jodi multiple subview thake tahole first ta k dekhabe --}}

{{-- @includefirst(['subview.Menu', 'subview.Footer']) --}}

{{-- @includewhen and @includeunless akta arektar biporit. includewhen a boolean value true hole view show korbe r flase hole view show korbe na. R includeunless a boolean value false hole view show korbe r true hole show korbena. --}}

{{-- @includewhen(true, 'subview.Menu') --}}
{{-- @includewhen(false, 'subview.Menu') --}}
{{-- @includeunless(false, 'subview.Footer', ['footertext' => 'All Rights Reserved']) --}}


@extends('layout.MastarLayout')
@section('title','Home Page')
{{-- @section('buttonName' , 'submit now') --}}

@section('content')
   <h1>Hello section</h1> 
   <button class="btn btn-info">Submit</button>
@endsection


