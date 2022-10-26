@extends('layouts.master')
@section('content')


    @includeIf('home.banner')

    @includeIf('home.information')


    @includeIf('home.latest_news')


    @includeIf('home.events')

    @includeIf('home.Statistic')


    @includeIf('home.bottom_tags')

@endsection
