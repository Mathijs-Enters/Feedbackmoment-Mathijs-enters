<!DOCTYPE html>
<html>
<head>
    <title>Feedbackmoment</title>
</head>
<body>
    <p>Naam: Mathijs Enters</p>
    <h1>Alle Fruits</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Origin</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fruits as $fruit)
                <tr>
                    <td>{{ $fruit->id }}</td>
                    <td>{{ $fruit->name }}</td>
                    <td>{{ $fruit->origin }}</td>
                    <td>{{ $fruit->stock }}</td>
                    <td>{{ $fruit->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
