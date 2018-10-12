@extends('layouts.app')

@section('content')
    <h1>News Content</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{$news->title}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Content</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="{{$news->content}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" placeholder="{{$news->author}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Publish Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder="{{$news->publish_date}}" readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('news') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@endsection