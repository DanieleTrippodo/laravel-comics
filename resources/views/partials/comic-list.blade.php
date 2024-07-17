<!-- resources/views/components/comic-list.blade.php -->


<div id="ComicFlex" class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="card-text">{{ $comic['description'] }}</p>
                        <p class="card-text"><small class="text-muted">{{ $comic['price'] }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $comic['series'] }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $comic['sale_date'] }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
