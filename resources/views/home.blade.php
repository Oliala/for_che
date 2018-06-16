@extends('layouts.app')

@section('content')
    @include('message-block');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ваша сторінка
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Вітаємо! Перегляньте всі ваши відгуки
                </div>
            </div>
                <div id="section2">
                    <section id="feature-area" class="about-section">
                        <div class="container">
                            <div class="row text-center inner">
                                @foreach($posts as $post)
                                    @if(Auth::user()==$post->user)
                                <div class="col-sm-6">
                                    <div class="feature-content">
                                        <img  src="/storage/app/public/places/{{ $post->place->image }}" />
                                        <h2 class="feature-content-title green-text">{{ $post->place->name }}</h2>
                                        <p class="feature-content-description">{{ $post->title }}
                                        </p>
                                        <p class="feature-content-description">{{ $post->body }}
                                        </p>
                                        <div class="info">
                                            posted by {{$post->user->name }} on {{$post->created_at}}
                                        </div>
                                        <div class="interaction">

                                        <a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>
                                        </div>

                                 </div>
                                </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
@endsection

