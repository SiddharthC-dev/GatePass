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
        <form method="POST" action="{{ route('userinformation.update',$userinformation->id) }}">
            @csrf
            {{ method_field('PUT') }}
          <div class="card-body">
                <div class="col-sm-6">
                    <div class="form-group">
                    {{-- <label for="exampleInputEmail1">user_id</label> --}}
                    <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="user_id" value="{{ old('user_id',$userinformation->user_id)}}">
                    <span class="text-danger">
                        @error('user_name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>

            <div class="row">
               <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">user_name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="user_name" value="{{ old('user_name',$userinformation->user_name)}}" >
                    <span class="text-danger">
                        @error('user_name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>


                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">flat_No</label>
                    <input type="text" class="form-control" id="flat_No" name="flat_No" placeholder="Password" value="{{ old('flat_No',$userinformation->flat_No )}}">
                    <span class="text-danger">
                        @error('flat_No')
                        {{$message}}

                        @enderror
                    </span>
                     </div>
                  </div>
                </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">wing</label>
                        <input type="text" class="form-control" id="wing" name="wing" placeholder="wing" value="{{ old('wing',$userinformation->wing )}}"required>
                        <span class="text-danger">
                            @error('wing')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>



                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">type</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="type" value="{{ old('type',$userinformation->type )}}"required>
                        <span class="text-danger">
                            @error('type')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email',Auth::user()->email )}}">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}

                        @enderror
                    </span>
                </div>

            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">mobile_No</label>
                    <input type="text" class="form-control" id="mobile_No" name="mobile_No" placeholder="mobile_No" value="{{ old('mobile_No',$userinformation->mobile_No)}}"required>
                    <span class="text-danger">
                        @error('mobile_No')
                        {{$message}}

                        @enderror
                    </span>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
              <div class="form-group">
                 <label for="exampleInputPassword1">occupation</label>
                 <input type="text" class="form-control" id="occupation" name="occupation" placeholder="occupation" value="{{ old('occupation',$userinformation->occupation)}}"required>
                   <span class="text-danger">
                     @error('occupation')
                     {{$message}}

                     @enderror
                   </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">dob</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="dob" value="{{ old('dob',$userinformation->dob)}}"required>
                    <span class="text-danger">
                        @error('dob')
                        {{$message}}

                        @enderror
                    </span>
                </div>
          </div>
        </div>
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
                  <label for="exampleInputPassword1">apartment_id</label>
                  <select class="form-control" name="apartment_id"value="{{old('userinformation', $userinformation->apartment_id )}}">
                    @foreach ($apartment as $apartments)
                        <option value="{{ $apartments->id }}" {{ $userinformation->apartment_id==$apartments->id? 'selected':''}} >
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
