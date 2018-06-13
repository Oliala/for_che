@extends('layouts.app')
@section('content')
    <section class="row new-place">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Додайте нове місце</h3></header>
            <form action="{{ route('places_add_save')}}" method="post"enctype="multipart/form-data">
                {{--<form action="{{ route('post.create',['place_id'=>$place->id]) }}" method="post">--}}
                <div class="form-group">
                    <textarea class="form-group" name="name" id="name" rows="5" placeholder="Назва місця"></textarea>
                    <textarea class="form-group" name="description" id="body" rows="5" placeholder="Опис"></textarea>
                   <textarea class="form-group" name="address" id="address" rows="3" placeholder="Адреса"></textarea>
                    <textarea class="form-group" name="phone_number" id="phone_number" rows="3" placeholder="Телефонний номер"></textarea>
                    <textarea class="form-group" name="email" id="email" rows="3" placeholder="пошта"></textarea>
                    <textarea class="form-group" name="popularity" id="popularity" rows="3" placeholder="популярність"></textarea>
                    <select class="form-group" name="category" id="category">
                        <option value="hotel" selected>Готель</option>
                        <option value="food">Їжа</option>
                        <option value="fun">Розваги</option>
                        <option value="seeings">Відвідати</option>
                    </select>
                    <input type="file" class="form-control-file" name="image" id="image" aria-describedby="fileHelp" >
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>

                </div>
                <button type="submit" class="btn btn-primary">Створити місце</button>
                {{--<input type="hidden" value="{{$place->id}}" name="place_id">--}}
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
@endsection