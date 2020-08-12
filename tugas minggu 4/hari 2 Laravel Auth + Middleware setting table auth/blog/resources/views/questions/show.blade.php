@extends('adminlte.master')
@section('content')
    <h3>Title : {{$question->judul}}</h3>
    <p>Content : {{$question->isi}}</p>
@endsection('content')