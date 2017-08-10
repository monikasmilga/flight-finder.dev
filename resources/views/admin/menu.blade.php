<div id="menu">
    <nav class="nav flex-column">
        <h3>MENU</h3>
        <a class="nav-link" href="{{asset ('home') }}">Home</a>
        <hr>
        <a class="nav-link active" href="{{route('app.countries.index')}}">Countries</a>
        <a class="nav-link" href="{{route('app.airports.index')}}">Airports</a>
        <a class="nav-link" href="{{route('app.airlines.index')}}">Airlines</a>
        <a class="nav-link" href="{{route('app.flights.index')}}">Flights</a>
        <hr>
        <a class="nav-link" href="{{route('app.faker.index')}}">Data faker</a>
    </nav>
</div>