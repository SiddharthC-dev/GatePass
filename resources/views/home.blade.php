@extends('layouts.adminpanel')

@section('content')
@role('admin')
@include('home.adminhome')
@endrole

 @role('secretory')
@include('home.secretoryhome')
@endrole

 @role('user')
@include('home.userhome')
@endrole
@endsection
