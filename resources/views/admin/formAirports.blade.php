@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            <h1 class="pageTitle">{{$pageTitle}}</h1>

            <form>
                <div class="form-group">
                    <label>Airport name</label>
                    <input class="form-control" placeholder="Enter airport name">
                </div>

                <div class="form-group">
                    <label>Airport name abbreviation</label>
                    <input class="form-control" placeholder="Enter 3 symbol abbreviation">
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Country</label>
                    <select class="form-control form-control-lg" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input class="form-control" placeholder="Enter city">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection