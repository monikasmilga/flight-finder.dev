@extends('admin.main')

@section('content')

    <div class="page-content">
        @if(isset($list[0]) || isset($list['data'][0]))

            <h1 class="pageTitle">{{$pageTitle}}</h1>

            @if($pageTitle == 'Countries')
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if(($list["current_page"]) === 1)
                            <li class="disabled-link"><a id="disabled-link">Previous</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                                     href="{{route('app.countries.index')}}?page={{$list["current_page"]-1}}">Previous</a>
                            </li>
                        @endif

                        @for($i=1; $i<=$list['last_page']; $i++)
                            <li class="page-item"><a class="page-link"
                                                     href="{{route('app.countries.index')}}?page={{$i}}">{{$i}}</a></li>
                        @endfor

                        @if(($list["current_page"]) === $list['last_page'])
                            <li class="disabled-link"><a id="disabled-link">Next</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                                     href="{{route('app.countries.index')}}?page={{$list["current_page"]+1}}">Next</a>
                            </li>
                        @endif
                    </ul>
                </nav>


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        @foreach($list['data'][0] as $key => $value)
                            <th>{{$key}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($list['data'] as $listItem)
                            @foreach($listItem as $value)
                                <td>{{$value}}</td>
                            @endforeach
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            @else
                {{--<div class="create-button">--}}
                {{--<a href="{{$route}}}">--}}
                {{--<button type="button" class="btn btn-secondary">Create new {{strtolower(substr($pageTitle, 0, -1))}} record--}}
                {{--</button>--}}
                {{--</a>--}}
                {{--</div>--}}

                <div class="create-button">
                    <a href="{{ $route }}">
                        <button type="button" class="btn btn-secondary">
                            Create new {{strtolower(substr($pageTitle, 0, -1))}} record
                        </button>
                    </a>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        @foreach($list[0] as $key => $value)
                            <th>{{$key}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($list as $listItem)
                            @foreach($listItem as $value)
                                <td>{{$value}}</td>
                            @endforeach
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            @endif


        @else
            @if(isset($pageTitle))
                <h1 class="pageTitle">{{$pageTitle}}</h1>

                <div class="create-button">
                    <a href="{{ $route }}">
                        <button type="button" class="btn btn-secondary">Create
                            new {{strtolower(substr($pageTitle, 0, -1))}} record
                        </button>
                    </a>
                </div>
            @endif
            <h1 class="pageTitle">No data available</h1>


        @endif
    </div>



@endsection