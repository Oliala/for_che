
<html>
<body>
@foreach($places as $place)
    <tr>
        <td>{{ $place->id }}</td>
        <td>{{ $place->name }}</td>
        <td>{{ $place->description }}</td>
    </tr>
@endforeach
<section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>What do you want to say?</h3></header>
        <form action="{{ route('post.create') }}" method="post">
            <div class="form-group">
                <textarea class="form-group" name="title" id="title" rows="1" placeholder="Your title"></textarea>
                <textarea class="form-group" name="body" id="body" rows="5" placeholder="Your post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
</section>
</body>