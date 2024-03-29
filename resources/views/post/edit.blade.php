@extends('layout.app')



@section('content')

<h1>Edit Post</h1>


    {!! Form::model($post, ['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
@csrf

{{ csrf_field() }}


{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class'=>'form-control']) !!}


{!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}

{!! Form::close() !!}

{!! Form::open(['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
    @csrf
{{-- <input type="hidden" name="_method" value="DELETE">
<input type="submit" value="DELETE"> --}}

{!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}
@endsection