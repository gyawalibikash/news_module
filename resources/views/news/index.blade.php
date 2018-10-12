@extends('layouts.app')

@section('content')
 <h1>News Portal</h1>
 <a href="{{ url('/news/create') }}" class="btn btn-success">Create News</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Title</th>
         <th>Content</th>
         <th>Author</th>
         <th>Publish Date</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($news as $n)
         <tr>
             <td>{{ $n->title }}</td>
             <td>{{ $n->content }}</td>
             <td>{{ $n->author }}</td>
             <td>{{ $n->publish_date }}</td>
             <td><a href="{{ url('news',$n->id) }}" class="btn btn-primary">View</a></td>
             <td><a href="{{ route('news.edit',$n->id) }}" class="btn btn-info">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['news.destroy', $n->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection