@extends('layouts.adminpanel')

@section('content')

    <div class="content">
        <div class="col-sm-4">
        @include('flash::message')
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Manage Permission Table</b></h3>
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('managepermissions.update',$role->id) }} ">
                    @csrf
                    {{method_field('PUT')}}
                    <input type="hidden" class="form-control" placeholder="Full name" name="role" value="{{ $role->name }}" required autocomplete="name">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Role {{ $role->name }}</label>
                                <?php $permissionsofrole= $role->permissions->pluck('name')?>
                                @if(count($permissionsofrole)==0)
                                <p> This role Dont have any permission.</p>
                                @else
                                <p>
                                        @foreach ($permissionsofrole as $item)
                                        <i class="badge badge-dark"> {{ $item }}</i>
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Permission</label>
                                <!-- checkbox -->
                                <div class="form-group col-sm-3">
                                    <div class="form-check">
                                        <table>
                                            <?php $cnt=0;?>
                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="permission"
                                                            name="permission[]"
                                                            value="{{ $permission->name }}" {{in_array($permission->name,$permissionsofrole->toArray())?'checked':''}} >
                                                        <label class="form-check-label">{{ $permission->name }}</label>
                                                    </td>
                                                </tr>
                                               <?php $cnt++;?>
                                            @endforeach
                                        </table>

                                    </div>
                                </div>

                            </div>

                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {{ session('msg') }}
            </div>
        </div>
    </div>
    </form>


@endsection
