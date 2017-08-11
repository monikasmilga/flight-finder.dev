@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            {{--<h1 class="pageTitle">{{$pageTitle}}</h1>--}}
            <h1 class="pageTitle">Search</h1>

            <form action="" method="post">
                {{Form::token()}}

                <div class="form-group">
                    <label>From</label>
                    <select class="form-control form-control-lg" name="country_id">
                        <option value="" disabled selected>Select airport</option>
                        @foreach($origin_id as $key => $origin)
                            <option value="{{ $key }}">{{ $origin }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>To</label>
                    <select class="form-control form-control-lg" name="country_id">
                        <option value="" disabled selected>Select airport</option>
                        @foreach($destination_id as $key => $destination)
                            <option value="{{ $key }}">{{ $destination }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="example-datetime-local-input">Date</label>
                    <input class="form-control" type="date" value="{{  $date }}" name="date">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection