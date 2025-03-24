@foreach ($solarSystems as $system)
    @foreach ($system->planets as $planet) 
    <h2>{{ $planet->name; }}</h2>
    @endforeach
@endforeach