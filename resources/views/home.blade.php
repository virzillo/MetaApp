@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @role('superadmin')
                    <p>This is visible to users with the admin role. Gets translated to
                    \Laratrust::hasRole('superadmin')</p>
                    @endrole

                    {{Auth::user()->name}}
                    @foreach( $user->roles as $role)
                    {{ $role->name }}
                    @endforeach
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
