@extends('layouts.adminpanel')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-header">

        <form method="POST" action="{{route('managepermissions.store')}}">
            @csrf

            <div class="row">
                <div class="col-sm-6">
                 <!-- select -->
                    <div class="form-group">
                    <label>Roles</label>

                        <select class="form-control" name="role" id="role">
                         @foreach ($roles as $role)

                        <option>{{ $role->name }}</option>
                    @endforeach
            </select>

          </div>
        </div>


        <div class="col-sm-6">
            <div class="form-group">
                <label>Permission</label>
            <!-- checkbox -->
            <div class="form-group col-sm-3">
              <div class="form-check">


            <table>

                        @foreach ($permissions as $permission)
                        <tr>
                            <td>
                             <input class="form-check-input" type="checkbox" id="permission" name="permission[]" value= "{{ ($permission->name== 'yes' ? 'checked' : '') }}"  >
                            <label class="form-check-label">{{ $permission->name }}</label>
                        </td>
                        </tr>
                         @endforeach
                        </table>

                </div>
            </div>

        </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </div>
        {{session('msg')}}
    </div>

          </div>
      </div>
      </form>


  @endsection
