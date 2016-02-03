@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Categories</h3>
    </div>

    <table class="table-bordered table-responsive col-md-12">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                  Category
                </th>
                <th>
                    Active
                </th>
                <th>
                    Parent ID
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th>
                        {{ $category->id }}
                    </th>
                    <th>
                        {{ $category->name }}
                    </th>
                    <th>
                        {{ $category->active }}
                    </th>
                    <th>
                        {{ $category->slug }}
                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection