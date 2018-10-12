@extends('layouts.app')

<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js" />
@section('content')
    <h1>Update News</h1>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    {!! Form::model($news,['method' => 'PATCH', 'route' => ['news.update', $news->id], 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('highlights', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('News Editor', 'News Editor:') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control ckeditor']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Author', 'Author:') !!}
        {!! Form::text('author', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publish Date', 'Publish Date:') !!}
        {!! Form::date('publish_date', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection