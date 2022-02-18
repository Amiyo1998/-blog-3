@extends('backend.layouts.master')

@section('title')
	Post-Admin
@endsection

@section('content')
<form class="form-horizontal" action="{{ route('posts.store')}}" method="POST">
    @csrf
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Add User Information
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
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label for="body" class="col-sm-3 control-label">Body</label>
            <div class="col-sm-8">
              {{-- /*<input type="text" class="form-control" name="body">*/ --}}
              <textarea name="body" class="form-control" id="" cols="82" rows="4"></textarea>
            </div>
          </div>
      </div>
      <div class="panel-footer text-center">
        <button class="btn btn-sm btn-primary">Save</button>
      </div>
    </div>
</form>
@endsection