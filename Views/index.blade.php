@extends('Frontend::layouts.full')
@section('title', config('vnsource/module-demo.title'))
@section('description', config('vnsource/module-demo.description'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{__('Module demo')}}</h1>
                <div class="html-content">{{ config('vnsource/module-demo.content') }}</div>
            </div>
        </div>
    </div>
@endsection
