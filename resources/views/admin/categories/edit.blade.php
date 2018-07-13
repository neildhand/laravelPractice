@extends('layouts.admin')

@section('content')
@extends('layouts.admin')


@section('content')


    <h1>Categories</h1>

    <div class="col-sm-6">
            {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

    </div>

    <div class="col-sm-6">
            @if($categories)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created date</th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                <tbody>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
    </div>


@stop



@endsection