@extends('layouts.adminpanel')

@section('content')

<div class="content">
    <div class="col-sm-4">
    @include('flash::message')
    </div>





    {{-- {{ $userinformation }} --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><b> UserInformation Table</b></h3>
      <a class="btn btn-sm btn-primary float-right" href="{{ route('userinformation.create')}}">Create New</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>

            <th>user_id</th>
            <th>user_name</th>
            <th>flat_No</th>
            <th>wing</th>
            <th>mobile_No</th>
            <th>apartment_id</th>
            <th>dob</th>
            <th width="15%">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userinformations as $userinformation)
            <tr>
                <td>{{ $userinformation->id }}</td>
                <td>{{ $userinformation->user_id }}</td>
                <td>{{ $userinformation->user_name }}</td>
                <td>
                    {{ $userinformation->flat_No }}
                </td>
                <td>{{ $userinformation->wing }}</td>
                <td>{{ $userinformation->mobile_No }}</td>
                <td>{{ $userinformation->apartment_id }}</td>
                <td>{{ $userinformation->dob}}</td>
                <td><div class="btn-group">
                    <a type="button" class="btn btn-sm btn-default" href="{{ route('userinformation.edit',$userinformation->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('userinformation.destroy',$userinformation->id)}}" onclick="return confirm('Are you sure?')">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a type="button" class="btn btn-sm btn-default" href="{{url('userinformation/'.$userinformation->id) }}" >
                      <i class="fas fa-eye"></i>
                    </a>
                  </div></td>
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">

            {{-- {{ $userinformation->links() }}////// --}}

      </ul>
    </div>
  </div>
</div>
  @endsection
