@extends('layouts.app')
@section('content')
    <div id="section2">
        {{--@foreach($places as $place)--}}
            {{--<img  src="/storage/app/public/places/{{ $place->image }}" />--}}
            {{--<tr>--}}
                {{--<td>{{ $place->id }}</td>--}}
                {{--<td>{{ $place->name }}</td>--}}
                {{--<td>{{ $place->description }}</td>--}}
            {{--</tr>--}}

        <!-- Start Feature Area -->
            @foreach($places as $place)
        <section id="feature-area" class="about-section">
            <div class="container">
                <div class="row text-center inner">
                    <div class="col-sm-4">
                        <div class="feature-content">
                            <img  src="/storage/app/public/places/{{ $place->image }}" />
                            <h2 class="feature-content-title green-text">{{ $place->name }}</h2>
                            <p class="feature-content-description">{{ $place->description }}
                            </p>
                            <a href="{{route('place_index',[$place->id])}}" class="feature-content-link green-btn">button green</a>
                        </div>
                    </div>
                    {{--<div class="col-sm-4">--}}
                        {{--<div class="feature-content">--}}
                            {{--<img  src="/storage/app/public/places/{{ $place->image }}" />--}}
                            {{--<h2 class="feature-content-title blue-text">{{ $place->name }}</h2>--}}
                            {{--<p class="feature-content-description">{{ $place->description }}</p>--}}
                            {{--<a href="{{route('place_index',[$place->id])}}" class="feature-content-link blue-btn">See Details</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<div class="feature-content">--}}
                            {{--<img  src="/storage/app/public/places/{{ $place->image }}" />--}}
                            {{--<h2 class="feature-content-title red-text">{{ $place->name }}</h2>--}}
                            {{--<p class="feature-content-description">{{ $place->description }}</p>--}}
                            {{--<a href="{{route('place_index',[$place->id])}}" class="feature-content-link red-btn">Button Red</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </section>
        <!-- End Feature Area -->
        @endforeach
</div>
@endsection
