@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('user.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                               placeholder="Enter email">
                        @error('email')
                        <div class="error">{{ $message }}</div>
                        @enderror
{{--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        @error('name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        @error('password')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Role select</label>
                        <select class="form-control" name="role_id">
                            <option value="1">Admin</option>
                            <option value="2">user</option>
                        </select>
                        @error('role_id')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
