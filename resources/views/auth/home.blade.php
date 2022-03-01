@extends('layouts.app')

@section('content')
    <div style="padding: 10px">
        <p>
            {{ $name }} Git Hub Repo
        </p>

        <p>
            App Name is: {{ env('NO_VALUE', 'Defaulted to me') }}
        </p>
    </div>
@endsection