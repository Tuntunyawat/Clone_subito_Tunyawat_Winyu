@extends('components.layout')

@section('content')
    <div class="container">
        <div class="col-12 mt-5">
            <div class="form-group-user-info">
                <div class="mb-5">
                    <h4 class="text-center my-4">Information</h4>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control-plaintext" id="name" name="name" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" id="surname" name="surname" class="form-control-plaintext" value="{{ auth()->user()->surname }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control-plaintext" value="{{ auth()->user()->email }}">
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control-plaintext" value="{{ auth()->user()->phone_number }}">
                </div>
                <div class="mb-3">
                    <div class="btn">
                        <a href="{{ route('info-edit') }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="form-group-password">
                <div class="mb-5">
                    <h4 class="text-center my-4">Password</h4>
                </div>
                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control-plaintext" id="password" name="password" value="{{ auth()->user()->password }}">
                </div>
                <div class="mb-3">
                    <div class="btn">
                        <a href="{{ route('password-edit') }}" class="btn btn-primary">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection