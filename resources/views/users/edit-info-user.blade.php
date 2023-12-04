@extends('components.layout')

@section('content')
    <div class="container">
        <div class="col-12 mt-5">
            <form action="/user/profile-information" method="post">
                @csrf
                @method('PUT')

                <div class="form-group-user-info"">
                    <div class="mb-5">
                        <h4 class="text-center my-4">Edit Information</h4>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" id="surname" name="surname" class="form-control" value="{{ auth()->user()->surname }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ auth()->user()->phone_number }}">
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