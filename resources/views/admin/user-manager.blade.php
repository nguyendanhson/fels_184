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
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Avatar</th>
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
                                <td><a href="{{ URL('users/' . $user->id) }} ">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->avatar)
                                        <img src="{{ URL('' . $user->avatar) }}" alt="">
                                    @endif
                                    <img src="http://www.yxineff.com/wp-content/uploads/2014/11/default-avatar.png" alt="" width="5%">
                                </td>
                                <th>
                                    @if ($user->role == 1) <p>User</p>
                                    @else <p>Admin</p>
                                    @endif
                                </th>
                                <td class="center">{{ $user->created_at }}</td>
                                <th>
                                    {!! link_to_route('users.edit', trans('admin/users.edit'), [$user->id], ['class' => 'btn btn-primary btn-block']) !!}                           
                                </th>
                                <th>
                                    {!! Form::open([
                                        'method' => 'delete',
                                        'route' => ['users.destroy', $user->id]
                                    ]) !!}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
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
