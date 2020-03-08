@extends('layouts.app')

@section('content')
    {{ Auth::user()->email }}
    <example-component/>
@endsection
