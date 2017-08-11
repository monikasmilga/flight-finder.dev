@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            {{--<h1 class="pageTitle">{{$pageTitle}}</h1>--}}
            <h1 class="pageTitle">Search</h1>


            {{--@if(!(isset($flights)) )--}}
            <form action="{{ route('app.front-end.index')  }}" method="get">

                <div class="form-group">
                    <label>From</label>

                    {{ Form::select('origin_id', $origin_id) }}

                    {{--<select class="form-control form-control-lg" name="origin_id">--}}
                    {{--<option value="" disabled selected>Select airport</option>--}}
                    {{--@foreach($origin_id as $key => $origin)--}}
                    {{--<option value="{{ $key }}">{{ $origin }}</option>--}}
                    {{--@endforeach--}}
                    {{--</select>--}}
                </div>

                <div class="form-group">
                    <label>To</label>

                    {{ Form::select('destination_id', $destination_id) }}
                    {{--<select class="form-control form-control-lg" name="destination_id">--}}
                    {{--<option value="" disabled selected>Select airport</option>--}}
                    {{--@foreach($destination_id as $key => $destination)--}}
                    {{--<option value="{{ $key }}">{{ $destination }}</option>--}}
                    {{--@endforeach--}}
                    {{--</select>--}}


                </div>

                <div class="form-group">
                    <label>Date</label>
                    {{ Form::date('departure', $date) }}

                    {{--<label for="example-datetime-local-input">Date</label>--}}
                    {{--<input class="form-control" type="date" value="{{  $date }}" name="departure">--}}
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @if(isset($flights))

                <div style="margin-top: 30px">
                    <table class="table table-bordered" style="background-color: lemonchiffon;">
                        <thead>
                        <tr>
                            @foreach($flights[0] as $key => $value)
                                <th>{{$key}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($flights as $flight)

                                @foreach ($flight as $key => $value)

                                    @if($key == 'airport_name')
                                        @foreach($value as $key => $detail)
                                            @if ($key == 'name')

                                                <td>{{ $detail }}</td>
                                                {{--{{ dd($detail) }}--}}

                                            @endif

                                        @endforeach
                                       @else

                                        <td>{{ $value }}</td>
                                    @endif
                                @endforeach



                                {{--@foreach($flight as $key => $value)--}}



                                {{--@endforeach--}}
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>




            @endif

        </div>

    </div>
@endsection