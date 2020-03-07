@extends('layouts.app')

@section('content')
{{--<example-component/>--}}
{{ Auth::user()->name }}
@endsection
