@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>

            <a href="http://flight-finder.dev/admin/countries">
                <button type="button" class="btn btn-secondary">
                    View and edit database
                </button>
            </a>

        </div>
    </div>
</div>
@endsection
