@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form id="lesson_form" action="{{ url('lessons') }}" enctype="multipart/form-data" method="POST">

            {{ csrf_field() }}

            <div class="col-md-8 col-md-offset-2">
                <!-- <h1>Create a Lesson for [Math]</h1> -->

                <div class="form-group">

                    <div class="panel panel-default custom-panel">
                        <div class="panel-body">
                            <div class="col-md-8 input-group center-block text-center">
                                <input id="lesson_title" type="text" class="form-control text-center custom-form" name="lesson_title" placeholder="LESSON TITLE">
                                 <p id="warning_lesson_title" class="text-danger none"> *Lesson Title is required </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="input-group" id="main-tag">
                                <label>
                                    <p>Main Tag: </p>
                                    <select name="main_tag" class="form-control">
                                        <option>Math</option>
                                        <option>MAPEH</option>
                                        <option>Language</option>
                                        <option>Science</option>
                                        <option>Programming</option>
                                    </select>
                                </label>
                             </div>
                             <div class="input-group col-md-12">
                                <input type="text" class="form-control custom-tag-form" name="tags" placeholder="Tags" />
                             </div>
                        </div>
                    </div>

                    <div class="page panel panel-default custom-sub-panel">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="page_title[]" placeholder="Provide a Page Title" />
                            </div>
                            <div class="col-md-4">
                                <label class="warning_title text-danger none"> *Title Required </label>
                            </div> 
                            <div class="input-group col-md-6 text-right">
                                <button type="button" class="deletePage btn btn-default" title="Delete this Page" name="deletePage" id="hidden"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                             <p class="uploadPanel">
                                <strong><span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image (optional)</strong>
                                <input type="file" name="image-0" class="file_upload btn btn-default" />

                                <p class="warning_content text-danger none"> *Content Required </p>
                                <p class="warning_image text-danger none" > *Can only accept .jpeg, .jpg, or .png </p>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="page_content[]" class="form-control textArea" placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label name="pageNumber" class="pageNum">1</label>
                        </div>
                    </div>

                <button type="submit" name="submit" class="btn submitLesson btn-success"> Submit </button>
                </div>
            </div>
            <button type="button" class="addPage btn btn-primary pull-right addPgBtn" title="Add another Page" name="addPage"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add a Page</button>
        </form>

        <!-- page template -->
        <div id="page_template" class="page panel panel-default custom-sub-panel" style="display: none;">
            <div class="panel-heading custom-heading">
                <div class="col-md-4  center-block">
                    <input type="text" class="form-control custom-sub-form" name="page_title[]" placeholder="Provide a Page Title" />
                </div>
                <div class="col-md-4">
                    <label class="warning_title text-danger none"> *Title Required </label>
                </div>
                <div class="input-group col-md-4 text-right">
                    <button type="button" class="btn btn-default deletePage" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>
            <div class="panel-body custom-body">
                <p class="uploadPanel">
                    <strong><span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image (optional)</strong>
                    <input type="file" name="image-" class="file_upload btn btn-default" />

                    <p class="warning_content text-danger none"> *Content Required </p>
                    <p class="warning_image text-danger none" > *Can only accept .jpeg, .jpg, or .png </p>
                </p>
                <div class="input-group center-block">
                    <textarea name="page_content[]" class="form-control textArea" placeholder="What is this page about?"></textarea>
                </div>
            </div>
            <div class="panel-footer text-right custom-footer">
                <label name="pageNumber" class="pageNum"></label>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/create_lesson.css"/>
@endpush

@push('scripts')
     <!-- <script src="/js/custom-file-input.js"></script> -->
@endpush
