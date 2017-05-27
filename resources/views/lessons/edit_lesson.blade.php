@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="/lessons/{{$lesson->id}}" enctype="multipart/form-data">
           {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">

                    <div class="panel panel-default custom-panel">
                        <div class="panel-body">
                            <div class="col-md-8 input-group center-block text-center">
                                <input type="text" class="form-control text-center custom-form text-uppercase" name="lesson_title" value="{{$lesson->title}}" />
                            </div>
                        </div>
                    </div>

                    @foreach($pages as $page)
                    <div class="panel panel-default custom-sub-panel">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="pageTitle[]" value="{{$page->title}}" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button class="btn btn-default" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                            <p id="uploadPanel">
                                <label class="fileContainer btn btn-default" onclick="submit" >
                                    <!-- <form data-page="{{$page->id}}" action="#" enctype="multipart/form-data" method="post"> -->
                                        <span class="glyphicon glyphicon-upload"></span>&nbsp;Change Image
                                        <input type="file" name="upload[]" class="imgUpload1" class="btn btn-success"/>
                                            <!-- <input type="text" name="upload[]" value="" hidden /> -->
                                        <!-- <input type="text" name="upload[]" value="something" hidden /> -->
                                        <!-- <input type="text" name="imgUpload[]" value="" hidden /> -->
                                        <!-- <button class="file btn btn-primary" type="submit">Change</button> -->
                                    <!-- </form> -->
                                    <!-- <input type="hidden" name="isFile[]" value="1"/> -->
                                </label>
                                <img class="img-responsive" src="/uploads/{{$page->image}}" />
                                <strong>Change Image for this page (Optional)</strong>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="pageContent[]" class="form-control" placeholder="What is this page about?">
                              {{$page->content}}
                              </textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label id="pageNum">{{$page->page_number}}</label>
                        </div>
                    </div>
                    @endforeach
                <input type="submit" name="submit" class="btn btn-success"/>
                </div>  
            </div>

            <!-- <button class="btn btn-primary pull-right" title="Add another Page" name="addPage" id="addPgBtn"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add a Page</button> -->

        </form>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/create_lesson.css"/>
@endpush