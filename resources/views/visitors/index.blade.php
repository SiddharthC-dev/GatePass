@extends('layouts.adminpanel')

@section('content')

<div class="content">
    <div class="col-sm-4">
    @include('flash::message')
    </div>





    {{-- {{ $apartments }} --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><b> visitors Table</b></h3>
      <a class="btn btn-sm btn-primary float-right" href="{{route('visitor.create') }}">Create New</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
            <th>mobile_no</th>
            <th>dob</th>
            <th>photo</th>
            <th>Address</th>
            <th>tag</th>

            <th width="15%">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $visitor)
            <tr>
                <td>{{ $visitor->id }}</td>
                <td>{{ $visitor->name }}</td>
                <td>
                    {{ $visitor->mobile_no }}
                </td>
                <td>{{ $visitor->dob }}</td>
                <td>{{ $visitor->photo }}</td>
                <td>{{ $visitor->Address }}</td>
                <td>{{ $visitor->tag }}</td>


                <td><div class="btn-group">
                    <a type="button" class="btn btn-sm btn-default" href="{{ route('visitor.edit',$visitor->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('visitor.destroy',$visitor->id)}}" onclick="return confirm('Are you sure?')">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a type="button" class="btn btn-sm btn-default" href="{{url('visitor/'.$visitor->id) }}" >
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

            {{ $visitors->links() }}

      </ul>
    </div>
  </div>
</div>
  @endsection
