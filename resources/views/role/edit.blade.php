@extends('layouts.adminpanel')

@section('content')
    <div class="content">
        <div class="content">
            @if ($errors->any())
                <div class="text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('role.update', $role->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                        value="{{ old('name', $role->name) }}" required>
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}

                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gaurd Name</label>
                                    <input type="text" class="form-control" id="guard_name" name="guard_name"
                                        placeholder="Gaurd Name" value="{{ old('guard_name', $role->guard_name) }}"
                                        required>
                                    <span class="text-danger">
                                        @error('guard_name')
                                            {{ $message }}

                                        @enderror
                                    </span>
                                </div>
                            </div>
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
    </div>
@endsection
