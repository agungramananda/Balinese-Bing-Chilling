<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Catalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Ice Cream Catalog</h1>
    <form method="GET" action="{{ route('catalog.show') }}" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type">Type</label>
                <select id="type" name="type" class="form-control">
                    <option value="">All Types</option>
                    @foreach($tipe as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="flavor">Flavor</label>
                <select id="flavor" name="flavor" class="form-control">
                    <option value="">All Flavors</option>
                    @foreach($rasa as $flavor)
                        <option value="{{ $flavor->id }}">{{ $flavor->flavor }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>
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
