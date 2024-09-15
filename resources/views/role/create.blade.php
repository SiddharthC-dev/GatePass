@extends('layouts.adminpanel')

@section('content')

<div class="content">
    {{-- @if ($errors->any())
    <div class="text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New Role</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('role.store')}}">
            @csrf
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label >Role Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Role Name" >
                    <span class="text-danger">
                      @error('name')
                      {{$message}}

                      @enderror
                  </span>
                    </div>
                  </div>


          <div class="col-sm-6 ">
            <div class="form-group">
            <label >Gaurd Name</label>
            <input type="text" class="form-control" id="guard_name" name="guard_name" placeholder="Gaurd Name" required >
            <span class="text-danger">
              @error('guard_name')
              {{$message}}

              @enderror
          </span>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>
</div>

</div>

  @endsection
