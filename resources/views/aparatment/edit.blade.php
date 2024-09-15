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
        <form method="post" action="{{ route('aparatment.update',$apartment->id)}}">
            @csrf
            {{ method_field('PUT') }}
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Apartment Name</label>
                    <input type="text" class="form-control" id="apartment_name" name="apartment_name" placeholder="apartment name" value="{{ old('apartment_name',$apartment->apartment_name )}}" >
                    <span class="text-danger">
                        @error('apartment_name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Apartment Address</label>
                    <input type="text" class="form-control" id="apartment_address" name="apartment_address" placeholder="Password" value="{{ old('apartment_address',$apartment->apartment_address )}}">
                    <span class="text-danger">
                        @error('apartment_address')
                        {{$message}}

                        @enderror
                    </span>
                     </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Apartment State</label>
                        <input type="text" class="form-control" id="apartment_state" name="apartment_state" placeholder="apartment_state" value="{{ old('apartment_state',$apartment->apartment_state )}}"required>
                        <span class="text-danger">
                            @error('apartment_state')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Apartment City</label>
                        <input type="text" class="form-control" id="apartment_city" name="apartment_city" placeholder="apartment_city" value="{{ old('apartment_city',$apartment->apartment_city )}}"required>
                        <span class="text-danger">
                            @error('apartment_city')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Apartment District</label>
                    <input type="text" class="form-control" id="apartment_district" name="apartment_district" placeholder="apartment_district" value="{{ old('apartment_district',$apartment->apartment_district )}}"required>
                    <span class="text-danger">
                        @error('apartment_district')
                        {{$message}}

                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Apartment PinCode</label>
                    <input type="text" class="form-control" id="apartment_pin_code" name="apartment_pin_code" placeholder="apartment_pin_code" value="{{ old('apartment_pin_code',$apartment->apartment_pin_code )}}"required>
                    <span class="text-danger">
                        @error('apartment_pin_code')
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
