@extends('components.layout')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
            @if (auth()->user()->id === $article->user_id)
            <div class="col-4">
                <div class="card my-5" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $article->file_name) }}" class="card-img-top" alt="{{ $article->title }}">
                    <hr>
                    <div class="card-body">
                      <h5 class="card-title">{{ $article->title }}</h5>
                      <p class="card-text">{{ $article->content }}</p>
                      <h5 class="card-text">{{ $article->price }} $</h5></p>
                      @if (auth()->check())
                        @if (auth()->user()->id === $article->user_id)
                            <a href="/profile/my-article/edit/{{ $article->id }}" class="btn btn-primary my-3">Edit</a>
                            <form action="{{ route('article.delete', $article->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                      @endif
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection