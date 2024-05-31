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
            <option value="{{ $type->id }}" {{ old('type') == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="flavor">Flavor</label>
        <select id="flavor" name="flavor" class="form-control">
          <option value="">All Flavors</option>
          @foreach($rasa as $flavor)
            <option value="{{ $flavor->id }}" {{ old('flavor') == $flavor->id ? 'selected' : '' }}>{{ $flavor->flavor }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
  </form>

  @if ($kosong)
    <div class="alert alert-warning" role="alert">
      No ice cream found.
    </div>
  @else

    <div class="row">
      @foreach($eskrim as $iceCream)
        <div class="col-md-4 mb-3">
          <div class="card">
            @if ($iceCream->image!==null)
              <img src="{{--  --}}" class="card-img-top" alt="Ice Cream Image">
            @else
              <img src="/images/not-found.png" class="card-img-top" alt="Ice Cream Image">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $iceCream->name }}</h5>
              <p class="card-text">
                Type: {{ $iceCream->type->type }}<br>
                Size: {{ $iceCream->size->size }}<br>
                Topping: {{ $iceCream->topping->topping ?? 'None' }}<br>
                Price: {{ $iceCream->price }}
              </p>
              <p class="card-text">Description: {{ $iceCream->description }}</p>
              <p class="card-text">Flavors: 
                @foreach($iceCream->flavor as $flavor)
                  {{ $flavor->flavor }}@if (!$loop->last), @endif
                @endforeach
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
</div>

</body>
</html>
