<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <style>
      {!! Vite::content('resources/css/style.css') !!}
    </style>
    <script>
      {!! Vite::content('resources/js/bc_js/catalog.js') !!}
    </script>
    <link rel="icon" href="/images/fav.ico?9" sizes="any"/>
  </head>
  <body class ="category-body" data-barba="wrapper">
    <div class="bg-container">
      <header>
        <nav>
          <ul>
            <li>
              <a href="{{ 'home' }}" class="link">
                <span>Home</span>
              </a>
            </li>
            <li>
              <a href="{{ 'about' }}" class="link">
                <span>About</span>
              </a>
            </li>
            <li>
              <a href="{{ 'catalog' }}" class="link active">
                <span>Catalogue</span>
              </a>
            </li>
          </ul>
        </nav>
      </header>
      <section>
        <form method="GET" action="{{ route('catalog.show') }}">
          <div class="filter-form">
            <div class="tipe">
          <label for="type">Type</label>
          <select name="type" id="type">
            <option value="">All Types</option>
            @foreach ($tipe as $type)
              <option value="{{ $type->id }}" @if(request('type') == $type->id) selected @endif>{{ $type->type }}</option>
            @endforeach
          </select>
            </div>
            <div class="rasa">
              <label for="flavor">Flavor</label>
              <select name="flavor" id="flavor">
          <option value="">All Flavors</option>
          @foreach ($rasa as $flavor)
            <option value="{{ $flavor->id }}" @if(request('flavor') == $flavor->id) selected @endif>{{ $flavor->flavor }}</option>
          @endforeach
              </select>
            </div>
          </div>
          <button type="submit">Filter</button>
        </form>
        
        @if ($kosong)
          <p class="peringatan">Not Available.</p>
        @else
          <div class="icecream">
          @foreach ( $eskrim as $iceCream)
            <div class="card">
              @if ($iceCream->images!=null)
                <img src="{{ $iceCream->images }}" alt="" class="card-image" />
              @else
                <img src="/images/not-found.png" alt="Nanda Gay">
              @endif
              <div class="card-content">
                <h2>{{ $iceCream->name }}</h3>
                <h3>Type : {{ $iceCream->type->type }}</h3>
                <div class='flavor'>
                  <h3>Flavor :</h3>
                  @foreach($iceCream->flavor as $flavor)
                    <h4>{{ $flavor->flavor }}</h4>
                  @endforeach
                </div>
                <h3>Size : {{ $iceCream->size->size }}</h3>
                @if ($iceCream->topping!=null)
                  <h3>Topping : {{ $iceCream->topping->topping }}</h3>
                @endif
                <p>{{ $iceCream->description }}</p>
                <span class="price">${{ $iceCream->price }}</span>
              </div>
            </div>
          @endforeach
          </div>
        @endif
      </section>
    </div>
    <script src="./js/bc_js/catalog.js"></script>
  </body>
</html>
