@extends(backpack_view('blank'))


@php
  $breadcrumbs = [
      trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
      "Read Me" => false,
  ];
@endphp

@section('content')
    <h1>{{ $title }}</h1>
    <p> {{ $content }} </p>
@endsection