@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Name
                    </th>
                    <th style="width: 30%">
                        Email
                    </th>
                    <th>
                        Project Progress
                    </th>
                    <th style="width: 8%" class="text-center">
                        Active
                    </th>
                    <th style="width: 20%" class="text-center">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            {{ $user->name }}
                        </a>
                        <br>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        @if($user->active)
                        <span class="badge badge-success">active</span>
                        @else
                        <span class="badge badge-danger">inactive</span>
                        @endif
                    </td>
                    <td class="text-nowrap text-center">
                        <a class="btn btn-primary btn-sm" href="{{ route('users.show', $user) }}">
                            <i class="fas fa-eye">
                            </i>
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('users.edit', $user) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" onclick="deleteUser({{ $user }})">
                            <i class="fas fa-trash">
                            </i>
                        </a>

                        <form action="" id="delete-user-{{ $user->id }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if($users->hasPages())
        <div class="card-footer">
            {{ $users->links() }}
        </div>
        @endif
    </div>
@stop

@section('js')
    <script>
        function deleteUser(user) {
            console.log(user)
            const formId = `delete-user-${user.id}`
            console.log(formId)

            if (confirm(`Are you sure you want to delete user: ${user.name}?`)) {
                // TODO: Update to delete user
                return
            }

            alert('cancelled')
        }
    </script>
@endsection
