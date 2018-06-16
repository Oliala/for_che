@extends('layouts.app')

@section('content')
    @include('message-block');
    <section id="testimornial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tm-box">
                        <img  src="/storage/app/public/places/{{ $place->image }}" height="500" width="400"/>
                        <div class="tm-box-description">
                            <h2>{{ $place->name }}</h2>
                            <p class="tm-box-p">{{ $place->description }}</p>
                            <p class="tm-box-p">{{ $place->address }}</p>
                            <p class="tm-box-p">{{ $place->phone_number }}</p>
                            <p class="tm-box-p">{{ $place->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimornial-area">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>Залиште свій відгук про місце</h3></header>
                <form action="{{ route('post.create')}}" method="post">
                    {{--<form action="{{ route('post.create',['place_id'=>$place->id]) }}" method="post">--}}
                    <div class="form-group">
                        <textarea class="form-group" name="title" id="title" rows="1" placeholder="Заголовок"></textarea>
                        <br>
                        <textarea class="form-group" name="body" id="body" rows="5" placeholder="Відгук"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Зберегти відгук</button>
                    <input type="hidden" value="{{$place->id}}" name="place_id">
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </form>
            </div>
        </div>
    </section>
    <section class="row posts">
        <div class="container">
            <header><h3>Що інші кажуть про це місце</h3></header>
            @foreach($posts as $post)
                <article class="post">
                    <p >{{ $post->title }}
                    </p>
                    <p>{{$post->body}}</p>
                    <div class="info">
                        posted by {{$post->user->name }}on {{$post->created_at}}
                    </div>
                    <div class="interaction">
                        @if (! empty(Auth::user()) && ! empty($post->likes->where('user_id', Auth::user()->id)->where('like', 1)->first()))
                            <span>You liked this post</span>
                        @else
                            <a href="#" class="like" data-id="{{ $post->id }}">Like</a>
                        @endif
                        @if (! empty(Auth::user()) && ! empty($post->likes->where('user_id', Auth::user()->id)->where('like', 0)->first()))
                            <span>You disliked this post</span>
                        @else
                            <a href="#" class="dislike" data-id="{{ $post->id }}">Dislike</a>
                        @endif
                        @if(Auth::user()==$post->user)
                            <a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>
                        @endif

                    </div>
                </article>
            @endforeach

        </div>
    </section>
    <script>

        $(document).on('click', '.interaction .like', function(){
            var postId = $(this).attr('data-id');
            $.ajax({
                url: '{{route('ajax.save-like')}}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'post': postId
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response.post_id);
                    if (response.post_id) {
                        var html = '<span style="margin-right: 4px;">You liked this post</span>';
                        html += '<a style="margin-right: 4px;" href="#" class="dislike" data-id="{{ $post->id }}">Dislike</a>';
                        html += '<a style="margin-right: 4px;" href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>'
                        $('.interaction .like').each(function () {
                            if ($(this).attr('data-id') === response.post_id) {
                                $(this).parent().html(html);
                            }
                        });
                    }
                }
            });
        });


        $(document).on('click', '.interaction .dislike', function(){
            var postId = $(this).attr('data-id');
            $.ajax({
                url: '{{route('ajax.save-dislike')}}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'post': postId
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response.post_id);
                    if (response.post_id) {
                        var html = '<a style="margin-right: 4px;" href="#" class="like" data-id="{{ $post->id }}">Like</a>';
                        html += '<span style="margin-right: 4px;">You disliked this post</span>';
                        html += '<a style="margin-right: 4px;" href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>'
                        $('.interaction .dislike').each(function () {
                            if ($(this).attr('data-id') === response.post_id) {
                                $(this).parent().html(html);
                            }
                        });
                    }
                }
            });
        });

    </script>
@endsection