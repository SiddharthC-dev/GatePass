@extends('layouts.adminpanel')

@section('content')

<div class="content">


    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">CREATE usersinformation</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('userinformation.store')}}">
            @csrf

          <div class="card-body">
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <label for="exampleInputEmail1">user_id</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{old('user', $user->id )}}">
                            {{ $user->id }} </option>
                    @endforeach
                </select>
                  <span class="text-danger">
                    @error('user_name')
                    {{$message}}

                    @enderror
                </span>
                </div>
              </div>

                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">user_name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name">
                    <span class="text-danger">
                        @error('user_name')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">flat_No</label>
                    <input type="text" class="form-control" id="flat_No" name="flat_No" placeholder="flat_No" value="{{old('flat_No')}}" >
                    <span class="text-danger">
                        @error('flat_No')
                        {{$message}}

                        @enderror
                    </span>
                    </div>
                  </div>


                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">wing</label>
                        <input type="text" class="form-control" id="wing" name="wing" placeholder="wing" value="{{old('wing')}}" >
                        <span class="text-danger">
                            @error('wing')
                            {{$message}}

                            @enderror
                        </span>
                    </div>
                </div>
                  </div>
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">type</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="type" value="{{old('type')}}"  >
                        <span class="text-danger">
                            @error('type')
                            {{$message}}

                            @enderror
                        </span>
                    </div>

                </div>


            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">email</label>

                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}" >
                    <span class="text-danger">
                        @error('emailt')
                        {{$message}}

                        @enderror
                    </span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">mobile_No</label>
                    <input type="text" class="form-control" id="mobile_No" name="mobile_No" placeholder="mobile_No" value="{{old('mobile_No')}}" >
                    <span class="text-danger">
                        @error('mobile_No')
                        {{$message}}

                        @enderror
                    </span>
                </div>
          </div>

            <div class="col-sm-6">
               <div class="form-group">
                  <label for="exampleInputPassword1">occupation</label>
                  <input type="text" class="form-control" id="occupation" name="occupation" placeholder="occupation" value="{{old('occupation')}}" >
                  <span class="text-danger">
                     @error('occupation')
                      {{$message}}

                      @enderror
                    </span>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                   <label for="exampleInputPassword1">dob</label>
                   <input type="date" class="form-control" id="dob" name="dob" placeholder="dob" value="{{old('dob')}}" >
                   <span class="text-danger">
                      @error('occupation')
                       {{$message}}

                       @enderror
                     </span>
                 </div>
             </div>
             <div class="col-sm-6">
                <div class="form-group">
                   <label for="exampleInputPassword1">apartment_id</label>
                   <select class="form-control" name="apartment_id">
                    @foreach ($apartment as $apartments)
                        <option value="{{old('apartments', $apartments->id )}}">
                            {{ $apartments->apartment_name }} </option>
                    @endforeach
                </select>
                <span class="text-danger">
                      @error('occupation')
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

@endsection

@section('pagescripts')
    <script>

            $('#user_id').on('change', function(e) {
                e.preventDefault();
                console.log('==============')
                var id = this.value;
                $("#user_name").html('');
                $("#email").html('');
                    $.ajax({

                        url:URL+'http://127.0.0.1:8000/findinfo',
                        url:URL + '/findinfo',
                        type:'post',
                        data:{
                            'id':id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType:'json',
                        success: function(result){
                            $('#user_name').html('<input type="">');
                            $.each(result.name, function(key,value) {
                            console.log(result.name);
                            $("#user_name").append('<input value="'+value.user_name+'">' + value.name+ '</input>' );
                        });

                            $('#email').html('<input type="email">');
                            $.each(result.email, function(value) {
                            console.log(result.email);
                            $("#email").append('<input value= ' +value.email +'>' + value.email );

                        });
                        },

                    });
            });




</script>
@endsection
