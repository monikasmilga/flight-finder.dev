@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
        <h1 class="pageTitle">{{$pageTitle}}</h1>

        <form>
            <div class="form-group">

                <label>Airline name</label>
                <input class="form-control" placeholder="Enter airline name">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>

    </div>
@endsection