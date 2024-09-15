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
        <form method="post" action="{{ route('gaurd.update',$gaurds->id)}}">
            @csrf
            {{ method_field('PUT') }}
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">gaurd Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="gaurd name" value="{{ old('name',$gaurds->name )}}" >
                    <span class="text-danger">
                        @error('name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1"> Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ old('address',$gaurds->address )}}">
                    <span class="text-danger">
                        @error('address')
                        {{$message}}

                        @enderror
                    </span>
                     </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile Number</label>
                        <input type="number" class="form-control" id="mobile_no" name="mobile_no" placeholder="mobile_no" value="{{ old('mobile_no',$gaurds->mobile_no )}}"required>
                        <span class="text-danger">
                            @error('mobile_no')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="exampleInputPassword1">Start Shift Time</label>
                    <input type="time" class="form-control" id="start_shift" name="start_shift"
                        placeholder="start_shift" value="{{ old('start_shift',$gaurds->start_shift ) }}">
                        <span class="text-danger">
                            @error('start_shift')
                            {{$message}}
                            @enderror
                        </span>

                </div>

                <div class="col-sm-6">
                    <label for="exampleInputPassword1">End Shift Time</label>
                        <input type="time" class="form-control" id="end_shift" name="end_shift"
                            placeholder="end_shift" value="{{ old('end_shift',$gaurds->end_shift ) }}">
                            <span class="text-danger">
                                @error('end_shift')
                                {{$message}}
                                @enderror
                            </span>
                </div>
                </div>

            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Apartment Name</label>
                    <select class="form-control" name="apartment_id"value="{{old('gaurds', $gaurds->apartment_id )}}">
                        @foreach ($apartment as $apartments)
                            <option value="{{ $apartments->id }}" {{ $gaurds->apartment_id==$apartments->id? 'selected':''}} >
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
