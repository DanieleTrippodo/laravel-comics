<!-- resources/views/components/comic-list.blade.php -->


<div>

    <ul>
      @foreach ($comics as $comic)
        <li>
          <h2>{{ $comic['title'] }}</h2>
          <p>{{ $comic['description'] }}</p>
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"/>
          <p>{{ $comic['price'] }}</p>
          <p>{{ $comic['series'] }}</p>
          <p>{{ $comic['sale_date'] }}</p>
        </li>
      @endforeach
    </ul>


</div>
