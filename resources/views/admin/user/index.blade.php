@extends('admin.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h3>
                <i class="fa fa-users"></i> Users
                <a href="{{ route('admin.user.create') }}" class="btn btn-success">
                    <i class="fa fa-plus-circle"></i> Add user
                </a>
            </h3>
        </div>

        <div class="container">

            <div class="table-responsive">
                <table class=" table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Edit</th>
                        <th>Remove</th>
                        <th>Name</th>
                        <th>Last name</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Active</th>
                        <th>Mobile phone</th>
                        <th>Home phone</th>
                        <th>Work phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Delete Record ?')" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->user }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->active == 1 ? "Yes" : "No" }}</td>
                            <td>{{ $user->mobilephone }}</td>
                            <td>{{ $user->workphone }}</td>
                            <td>{{ $user->homephone }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <?php echo $users->render();?>
        </div>
    </div>
@stop
