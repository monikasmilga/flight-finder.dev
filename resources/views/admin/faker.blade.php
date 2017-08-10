@extends('admin.main')

@section('content')
    <div class="page-content">

        <h1 class="pageTitle">Fake data generator</h1>

        <div class="form-group">
            <form method="post" action="{{ route ( 'app.faker.fakeAirlines') }}">
                {{Form::token()}}
<h4>Pushing this button will create 100 fake airline records</h4>
                <button class="btn btn-info" type="submit">Fake airlines</button>
            </form>
        </div>


        {{--<div class="form-group">--}}
            {{--<a href="{{ route ( 'app.faker.fakeAirports')  }}">--}}
                {{--<button class="btn btn-info">Fake airports</button>--}}
            {{--</a>--}}
        {{--</div>--}}


        {{--<div class="form-group">--}}
            {{--<a href="{{  route (  'app.faker.fakeFlights')  }}">--}}
                {{--<button class="btn btn-info">Fake flights</button>--}}
            {{--</a>--}}
        {{--</div>--}}


    </div>
@endsection