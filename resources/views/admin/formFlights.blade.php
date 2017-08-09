@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            <h1 class="pageTitle">{{$pageTitle}}</h1>

            <form>

                <div class="form-group">
                    <label for="exampleSelect1">Country of origin</label>
                    <select class="form-control form-control-lg" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Country of destination</label>
                    <select class="form-control form-control-lg" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Airline</label>
                    <select class="form-control form-control-lg" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="example-datetime-local-input">Arrival date and time</label>
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                           id="example-datetime-local-input">
                </div>

                <div class="form-group">
                    <label for="example-datetime-local-input">Departure date and time</label>
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                           id="example-datetime-local-input">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection