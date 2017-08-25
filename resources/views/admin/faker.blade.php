@extends('admin.main')

@section('content')
    <div class="page-content">

        <h1 class="pageTitle">Fake data generator</h1>


        <a href="{{  route('app.airports.faker') }}"><button type="submit" class="btn btn-primary">Create fake airport records</button></a>


        <a href="{{  route('app.flights.faker') }}"><button type="submit" class="btn btn-primary">Create fake flight records</button></a>



        {{--<div class="form-group">--}}
            {{--<form method="post" action="{{ route ( 'app.flights.faker' ) }}">--}}
                {{--{{Form::token()}}--}}
                {{--<h4>Pushing this button will create 100 fake airline records</h4>--}}
                {{--<button class="btn btn-info" type="submit">Fake flights</button>--}}
            {{--</form>--}}
        {{--</div>--}}


        {{--<div class="form-group">--}}
            {{--<form method="post" action="{{ route ( 'app.airports.faker' ) }}">--}}
                {{--{{Form::token()}}--}}
                {{--<h4>Pushing this button will create 100 fake airport records</h4>--}}
                {{--<button class="btn btn-info" type="submit">Fake airports</button>--}}
            {{--</form>--}}
        {{--</div>--}}


    </div>
@endsection