@extends('partials.footerScripts')
@extends('partials.headerScripts')

@section('apartmentCrud')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div>
                <button ><a href="a_create"class="btn btn-primary">Add Apartment</a></button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Apartment Id</th>
                  <th>Apartment Name</th>
                  <th>Apartment Address</th>
                  <th>Apartment City</th>
                  <th>Apartment District</th>

                  <th>Apartment State</th>
                  <th>Apartment PinCode</th>
                  <th>Record time</th>
                <th  rowspan="2">Action</th>
                  <th></th>


                </tr>
                </thead>
                <tbody>
                @foreach ($apartmentArr as $apartment)
                <tr>
                    <td>{{ $apartment->id }}</td>
                    <td>{{ $apartment->apartment_name }}</td>
                    <td>{{ $apartment->apartment_address }}</td>
                    <td>{{ $apartment->apartment_city }}</td>
                    <td>{{ $apartment->apartment_district }}</td>
                    <td>{{ $apartment->apartment_state }}</td>
                    <td>{{ $apartment->apartment_pin_code }}</td>
                    <td>{{ $apartment->created_at }}</td>
                    <td><a href="a_delete/{{ $apartment->id }}">delete</td>
                    <td><a href="a_edit/{{ $apartment->id }}">edit</td>
                  </tr>

                @endforeach


                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
