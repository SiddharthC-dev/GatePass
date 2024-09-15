@extends('layouts.adminpanel')

@section('content')
<div class="col-sm-10">
</div>

    <div class="content">

    {{-- {{ $apartment }} --}}
    <div class="col-sm-8">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Info</h3>

        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">

          <table class="table table-striped">
            <tbody>
              <tr>
                <td>user_id</td>
                <td>{{ $userinformation->user_id }}</td>
              </tr>
              <tr>
                <td>user_name</td>
                <td>{{ $userinformation->user_name }}</td>
              </tr>
              <tr>
                <td>flat_Noe</td>
                <td>{{ $userinformation->flat_No }}</td>
              </tr>
              <tr>
                <td>wing</td>
                <td>{{ $userinformation->wing}}</td>
              </tr>
              <tr>
                <td>type</td>
                <td>{{ $userinformation->type }}</td>
              </tr>
              <tr>
                <td>email</td>
                <td>{{ $userinformation->email }}</td>
              </tr>
              <tr>
                <td>mobile_No</td>
                <td>{{ $userinformation->mobile_No }}</td>
              </tr>
              <tr>
                <td>occupation</td>
                <td>{{$userinformation->occupation}}</td>
              </tr>
              <tr>
                <td>dob</td>
                <td>{{ $userinformation->dob }}</td>
              </tr>
              <tr>
                <td>apartment_id</td>
                <td>{{ $userinformation->apartment_id}}</td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection
