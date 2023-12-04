@extends('components.layout')

@section('content')
    <div class="container">
        <div class="col-12 main-content-profile mt-5">
            <div class="header-profile">
                <div class="UserName">
                    <label for="username">Name:</label>
                    <input type="text" readonly class="form-control-plaintext" value="{{ auth()->user()->name }}">
                </div>
                <div class="UserEmail">
                    <label for="userEmail">Email:</label>
                    <input type="text" readonly class="form-control-plaintext" value="{{ auth()->user()->email }}">
                </div>
            </div>
        </div>
        <div class="col-12 selector-profile">
            <a href="{{ route('myData') }}" class="my-selector mx-4 mt-5">
                <p class="text-center">I miei dati</p>
                <i class="mx-5 fa-solid fa-user fa-xl"></i>
            </a>
            <a href="#" class="my-selector mx-4 mt-5">
                <p class="text-center">I miei preferiti</p>
                <i class="mx-5 fa-solid fa-heart fa-xl"></i>
            </a>
            <a href="#" class="my-selector mx-4 mt-5">
                <p class="text-center">I miei ordini</p>
                <i class="mx-5 fa-solid fa-bag-shopping fa-xl"></i>
            </a>
            <a href="{{ route('myArticle') }}" class="my-selector mx-4 mt-5">
                <p class="text-center">I miei articoli</p>
                <i class="mx-5 fa-solid fa-shop fa-xl"></i>
            </a>

        </div>
    </div>
@endsection