
<html>
<body>
    @foreach($places as $place)

        <tr>
            <td>{{ $place->id }}</td>
            <td>{{ $place->name }}</td>
            <td>{{ $place->description }}</td>
        </tr>
    @endforeach

