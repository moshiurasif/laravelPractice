@for($i = 0; $i <= 3; $i++)
<img style="width:300px; height:200px" src="https://plus.unsplash.com/premium_photo-1663047841659-340c9debc7b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80">
@endfor


    <select name="" id="">
        @foreach ($dataKey as $countryName)
        <option value="">{{$countryName}}</option>
        @endforeach
    </select>

@forelse ($dataKey as $country)
    {{$country}}
@empty
    <p>No data found</p>
@endforelse

@if ($loggedInKey == true)
    <p>You are Logged In</p>
@else
<p>You are Not Logged In</p>
@endif

@foreach ($dataKey as $countryName)
    {{-- @if($loop->last)
    {{$countryName}}
    @endif --}}
    {{-- {{$loop->index}} --}}
    {{-- {{$loop->iteration}} --}}
    {{-- {{$loop->remaining}} --}}
    {{-- {{$loop->count}}
    @break --}}
    {{-- {{$loop->depth}} --}}
    
    @if($loop->index == 2)
        {{$countryName}}
    @endif
@endforeach

<br>

@php
    $num1 = 20;
    $num2 = 40;
    $result = $num1 + $num2;
    echo $result;
@endphp

<br>

@php
   echo time();
@endphp
