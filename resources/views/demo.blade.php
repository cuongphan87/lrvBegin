
<!-- Stored in resources/views/demo.blade.php -->
@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection