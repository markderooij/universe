@foreach ($planets as $planet) 
    <h2>{{ $planet->name; }}</h2>
    <p>{{ $planet->description; }}</p>
    <p>{{ $planet->size_km; }}</p>
@endforeach
