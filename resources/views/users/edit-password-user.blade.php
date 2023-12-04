@extends('components.layout')

@section('content')
    <div class="container">
        <div class="col-12 mt-5">
            <form action="/user/password" method="post">
                
                @csrf
                @method('PUT')
                <div class="form-group-password">
                    <div class="mb-5">
                        <h4 class="text-center my-4">Edit Password</h4>
                    </div>
                    <div class="mb-5">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                    <div class="mb-5">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="btn">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('myData') }}" class="btn btn-primary mx-5">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection