@extends('layouts.app')
@section('content')
    <div id="section2">
          <section id="feature-area" class="about-section">
            <div class="container">
                <div class="row text-center inner">
                    @foreach($places as $place)
                    <div class="col-sm-4">
                        <div class="feature-content">
                            <img  src="/storage/app/public/places/{{ $place->image }}" />
                            <h2 class="feature-content-title green-text">{{ $place->name }}</h2>
                            <p class="feature-content-description">{{ $place->address }}
                            </p>
                            <a href="{{route('place_index',[$place->id])}}" class="feature-content-link green-btn">Детальніше</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

</div>
@endsection
