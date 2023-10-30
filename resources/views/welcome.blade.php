@extends('layouts.base')
@section('meta_title'){{$title}}@endsection
@section('meta_description'){{$description}}@endsection
@section('meta_keywords'){{$keywords}}@endsection
@section('content')
@include('templates.'.$template)
@endsection