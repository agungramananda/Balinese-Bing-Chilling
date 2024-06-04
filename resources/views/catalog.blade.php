<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
    @vite('resources/css/style.css')
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>
            <a href="{{ 'home' }}" class="link">
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="{{ 'about' }}" class="link active">
              <span>About</span>
            </a>
          </li>
          <li>
            <a href="{{ 'catalog' }}" class="link">
              <span>Catalogue</span>
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <form method="GET" action="{{ route('catalog.show') }}">
      <div>
        <div>
          <label for="type">Type</label>
          <select name="type" id="type">
            <option value="">All Types</option>
            @foreach ($tipe as $type)
              <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div>
        <label for="flavor">Flavor</label>
        <select name="flavor" id="flavor">
          <option value="">All Flavors</option>
          @foreach ($rasa as $flavor)
            <option value="{{ $flavor->id }}">{{ $flavor->flavor }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit">Filter</button>
    </form>
    
    @if ($kosong)
      <p>Nanda Gay</p>
    @else
      <div class="icecream">
      @foreach ( $eskrim as $iceCream)
        <div class="card">
          @if ($iceCream->image)
            <img src="{{ $iceCream->image }}" alt="" class="card-image" />
          @else
            <img src="/images/not-found.png" alt="Nanda Gay">
          @endif
          <div class="card-content">
            <h3>{{ $iceCream->name }}</h3>
            <h3>{{ $iceCream->type->type }}</h3>
            <h3>{{ $iceCream->size->size }}</h3>
            <h3>{{ $iceCream->topping->topping ?? "None" }}</h3>
            <p>{{ $iceCream->description }}</p>
            <p class="price">{{ $iceCream->price }}</p>
          </div>
        </div>
      @endforeach
      </div>
    @endif
  </body>
</html>
