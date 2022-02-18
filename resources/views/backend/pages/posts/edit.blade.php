@extends('backend.layouts.master')

@section('title')
	Post-Admin
@endsection

@section('content')
<form class="form-horizontal" action="{{ route('posts.update', $post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Update Information
             </div>
             <div class="col-md-3 text-right">
                 <a href="{{ route('posts.index')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
            </div>
            <div class="clearfix"></div>
        </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="title" class="col-sm-3 control-label">Title</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="title" value="{{ $post->title }}">
            </div>
          </div>
          <div class="form-group">
            <label for="body" class="col-sm-3 control-label">Body</label>
            <div class="col-sm-8">
              <textarea name="body" class="form-control" id="" cols="82" rows="4">{{ $post->body }}</textarea>
            </div>
        </div>
      </div>
      <div class="panel-footer text-center">
        <button class="btn btn-sm btn-primary">UPDATE</button>
      </div>
    </div>
</form>
@endsection