@extends('layouts.admin')

@section('content')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Manage Users</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All User
                </div>

                @include('layouts.errors')
                @include('layouts.success')

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Users Follower</th>
                                <th>Users Followed</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr class="odd gradeX">
                                <td>{{ $user->id }}</td>
                                <td><a href="{{ URL('admin/users/' . $user->id) }} ">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>                      
                                <td>Number</td>
                                <td>Number</td>
                                <th>
                                    @if ($user->role == 1) User
                                    @else Admin
                                    @endif
                                </th>
                                <td>{{ $user->created_at }}</td>
                                <th>
                                    {!! link_to_route('users.edit', trans('admin/users.edit'), [$user->id], ['class' => 'btn btn-primary']) !!}                           
                                </th>
                                <th>                                    
                                    {!! Form::open(['method' => 'delete', 'route' => ['users.destroy', $user->id] ]) !!}
                                        {{ Form::button(trans('admin/users.delete'), ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Really delete this user ?')"]) }}                     
                                    {{ Form::close() }}                                    
                                </th>
                            </tr>
                            @endforeach()
                        </tbody>

                    </table>
                    <div class="text-center">
                        {!! $users->render() !!}
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection
