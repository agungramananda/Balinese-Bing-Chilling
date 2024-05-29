<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Catalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Ice Cream Catalog</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Topping</th>
                <th>Price</th>
                <th>Description</th>
                <th>Flavors</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eskrim as $iceCream)
            <tr>
                <td>{{ $iceCream->name }}</td>
                <td>{{ $iceCream->type->type }}</td> <!-- Assuming you have a relationship defined -->
                <td>{{ $iceCream->size->size }}</td> <!-- Assuming you have a relationship defined -->
                <td>{{ $iceCream->topping->topping ?? 'None' }}</td> <!-- Assuming you have a relationship defined -->
                <td>{{ $iceCream->price }}</td>
                <td>{{ $iceCream->description }}</td>
                <td>
                    @foreach($iceCream->flavor as $flavor)
                        {{ $flavor->flavor }}@if (!$loop->last), @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
