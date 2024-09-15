@extends('layouts.adminpanel')

@section('content')

<div class="content">


    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">CREATE Visitor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('visitor.store')}}">
            @csrf
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Visitor Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{old('name')}}" >
                    <span class="text-danger">
                        @error('name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Visitor mobile_no</label>
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="mobile_no" value="{{old('mobile_no')}}" >
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
                        <label for="exampleInputPassword1">Visitor dob</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="dob" value="{{old('dob')}}" >
                        <span class="text-danger">
                            @error('dob')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Visitor photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" placeholder="photo" value="{{old('photo')}}"  >
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
                    <label for="exampleInputPassword1">Visitor Address</label>

                    <input type="text" class="form-control" id="Address" name="Address" placeholder="Address " value="{{old('Address')}}" >
                    <span class="text-danger">
                        @error('Address')
                        {{$message}}

                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Visitor tag</label>
                    <input type="text" class="form-control" id="tag" name="tag" placeholder="tag " value="{{old('tag')}}" >
                    <span class="text-danger">
                        @error('tag')
                        {{$message}}

                        @enderror
                    </span>
                </div>
          </div>
          <div class="col-sm-6">
              <div class="form-group">
                 <label for="exampleInputPassword1">Visitor apartment_id</label>
                 <select class="form-control" name="apartment_id">
                    @foreach ($apartment as $apartments)
                        <option value="{{old('apartments', $apartments->id )}}">
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
@include('partials.loginfooter')
  @endsection
