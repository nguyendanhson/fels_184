@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">User Profile</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">                    
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://pickaface.net/gallery/avatar/unr_hehe_160911_2042_qfuo9sh.png" class="img-circle img-responsive"> </div>
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                	<tr>
                                        <td>ID:</td>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Users Follower:</td>
                                        <td>Number</td>
                                    </tr>                                      
                                    <tr>
                                        <td>Users Followed:</td>
                                        <td>Number</td>
                                    </tr>
                                    <tr>
                                        <td>Users Activities:</td>
                                        <td>Number</td>
                                    </tr>
                                    <tr>
                                        <td>Learned Lessons:</td>
                                        <td>Number</td>
                                    </tr>
                                    <tr>
                                        <td>Learned Words:</td>
                                        <td>Number</td>
                                    </tr>
                                    <tr>
                                        <td>Results:</td>
                                        <td>Number</td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>
		                                    @if ($user->role == 1) User
		                                    @else Admin
		                                    @endif
                                    	</td>
                                    </tr>
                                    <tr>
                                        <td>Created At</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>                                    
                                </tbody>
                            </table>                    
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                	<table>
                		<tr>
                			<td>
                				{!! link_to_route('users.edit', trans('admin/users.edit'), [$user->id], ['class' => 'btn btn-primary']) !!}
                			</td>                			
	                		<td>
	                			{!! Form::open(['method' => 'delete', 'route' => ['users.destroy', $user->id] ]) !!}
			                        {{ Form::button(trans('admin/users.delete'), ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Really delete this user ?')"]) }}                     
			                    {{ Form::close() }}
	                		</td>
                		</tr>
                	</table>
                </div>

            </div>            
        </div>
    </div>
</div>

@endsection