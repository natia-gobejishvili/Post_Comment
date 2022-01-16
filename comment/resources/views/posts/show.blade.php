@extends('posts.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div><br>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $post->body }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{ $post->author }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <hr/><h3>Comments</h3><hr/>
            <h5>Add a public comment...</h5>
            <div class="pull-right">
               <!-- <a class="btn btn-primary" href="{{ route('posts.index') }}"> Delete</a>  -->
                @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            @csrf
                <div class="form-group">
                    <strong>Author:</strong>
                    <input type="text" name="author" value="{{ $post->author }}" class="form-control" placeholder="Enter the name...">
                </div>
                <div class="form-group">
                <strong>Comment:</strong>
                    <textarea class="form-control" style="height:50px" name="body" placeholder="Enter the comment..."></textarea>
                    <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add Comment" />
                </div>
                
        </div>
    </div>
@endsection