@extends('layouts.main')
@section('title','Главная страница')
@section('home-banner')
@include('home.home_banner')
@endsection
@section('article')
@include('home.article')
@endsection
@section('main')
@include('home.main')
@endsection