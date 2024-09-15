@extends('layouts.adminpanel')

@section('content')

    <div class="content">


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">gaurd Informtion</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('gaurd.store') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">gaurd Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="gaurd Name"
                                    value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">gaurd Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="gaurd Address" value="{{ old('address') }}">
                                <span class="text-danger">
                                    @error('address')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                    placeholder="Mobile Number" value="{{ old('mobile_no') }}">
                                <span class="text-danger">
                                    @error('mobile_no')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" value="{{ old('Password') }}">
                                <span class="text-danger">
                                    @error('Password')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="row">
                                <div class="col-sm-6">
                                <label for="exampleInputPassword1">Start Shift Time</label>
                                <input type="time" class="form-control" id="start_shift" name="start_shift"
                                    placeholder="start_shift" value="{{ old('start_shift') }}">
                                </div>

                                <div class="col-sm-6">
                                    <label for="exampleInputPassword1">End Shift Time</label>
                                    <input type="time" class="form-control" id="end_shift" name="end_shift"
                                        placeholder="end_shift" value="{{ old('end_shift') }}">
                                </div>
                                </div>
                                <span class="text-danger">
                                    @error('shift_time')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apartment Id</label>

                                {{-- <input type="number" class="form-control" id="apartment_id" name="apartment_id"
                                        placeholder="Apartment Id" value="{{ old('apartment_id') }}"> --}}
                                <select class="form-control" name="apartment_id">

                                    @foreach ($apartment as $apartments)
                                        <option value="{{old('apartments', $apartments->id )}}">
                                            {{ $apartments->apartment_name }} </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('apartment_id')
                                        {{ $message }}

                                        @enderror
                                    </span>
                                </div>

                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </Div>
</div>
    @include('partials.loginfooter')
@endsection
