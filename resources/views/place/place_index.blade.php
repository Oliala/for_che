@extends('layouts.app')
@section('content')
    @foreach($places as $place)

        <section id="testimornial-area">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tm-box">
                                <img  src="/storage/app/public/places/{{ $place->image }}" class="img-responsive"/>
                                <div class="tm-box-description">
                                    <h2>{{ $place->name }}</h2>
                                    <p class="tm-box-p">{{ $place->description }}</p>
                                    <p class="tm-box-p">{{ $place->popularity }}</p>
                                    {{--<a href="#" class="content-link">Read More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </section>
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>Залиште свій відгук про місце</h3></header>
                <form action="{{ route('post.create')}}" method="post">
                    {{--<form action="{{ route('post.create',['place_id'=>$place->id]) }}" method="post">--}}
                    <div class="form-group">
                        <textarea class="form-group" name="title" id="title" rows="1" placeholder="Заголовок"></textarea>
                        <textarea class="form-group" name="body" id="body" rows="5" placeholder="Відгук"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </form>
            </div>
        </section>
    @endforeach
        <section class="row posts">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>Що інші кажуть про це місце</h3></header>
                @foreach($posts as $post)
                    <article class="post">
                        <p>{{$post->body}}</p>
                        <div class="info">
                    posted by {{$post->user->name }}on {{$post->created_at}}
                        </div>
                        <div class="interaction">
                            <a href="#" class="like">Like</a>
                            <a href="#" class="like">Dislike</a>
                            @if(Auth::user()==$post->user)
                                <a href="#" class="edit">Edit</a>
                                <a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>
                            @endif

                        </div>
                    </article>
                @endforeach
            </div>
        </section>
@endsection