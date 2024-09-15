@extends('layouts.adminpanel')

@section('content')
<div class="content">
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
          <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('visitor.update',$visitors->id)}}">
            @csrf
            {{ method_field('PUT') }}
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">visitor Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name " value="{{ old('name',$visitors->name )}}" >
                    <span class="text-danger">
                        @error('name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">visitor mobile_no</label>
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="mobile_no" value="{{ old('mobile_no',$visitors->mobile_no )}}">
                    <span class="text-danger">
                        @error('mobile_no')
                        {{$message}}

                        @enderror
                    </span>
                     </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">visitor dob</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="dob" value="{{ old('dob',$visitors->dob )}}"required>
                        <span class="text-danger">
                            @error('dob')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">visitor photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" placeholder="photo" value="{{ old('photo',$visitors->photo )}}"required>
                        <span class="text-danger">
                            @error('photo')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">visitor Address</label>
                    <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" value="{{ old('Address',$visitors->Address )}}"required>
                    <span class="text-danger">
                        @error('Address')
                        {{$message}}

                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">visitor tag</label>
                    <input type="text" class="form-control" id="tag" name="tag" placeholder="tag" value="{{ old('tag',$visitors->tag )}}"required>
                    <span class="text-danger">
                        @error('tag')
                        {{$message}}

                        @enderror
                    </span>
                </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">visitor apartment_id</label>
                <select class="form-control" name="apartment_id"value="{{old('visitors', $visitors->apartment_id )}}">
                    @foreach ($apartment as $apartments)
                        <option value="{{ $apartments->id }}" {{ $visitors->apartment_id==$apartments->id? 'selected':''}} >
                            {{ $apartments->apartment_name }} </option>
                    @endforeach
                </select>
                                <span class="text-danger">
                        @error('apartment_id')
                        {{$message}}

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


  @endsection
