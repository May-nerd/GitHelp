@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ url('lessons') }}" enctype="multipart/form-data" method="POST">

            {{ csrf_field() }}

            <div class="col-md-8 col-md-offset-2">
                <!-- <h1>Create a Lesson for [Math]</h1> -->

                <div class="form-group">

                    <div class="panel panel-default custom-panel">
                        <div class="panel-body">
                            <div class="col-md-8 input-group center-block text-center">
                                <input type="text" class="form-control text-center custom-form" name="lesson_title" placeholder="LESSON TITLE" />

                            </div>
                        </div>
                    </div>
                    <!-- This is hidden because of this is template for new pages -->

                    <!-- this shouldn't be deleted since this is the template, so pweds kwaon nlng ang trash nga glyphicon? - リン -->
                    <div id="page0" hidden class="page panel panel-default custom-sub-panel" style="display: none;">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="page_title[]" placeholder="Provide a Page Title" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button type="button" class="btn btn-default" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                            <p class="uploadPanel">
                                {{--
                                <!-- it looks nice, but there's no indication that a file has been uploaded
                                    using unstyled upload button for usability purposes -->
                                <label class="fileContainer btn btn-default">
                                    <span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image
                                    <input type="file" name="image[]" class="btn btn-success"/>
                                </label>
                                --}}
                                <label>
                                    <span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image (optional)
                                    <input type="file" name="image[]" />
                                </label>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="page_content[]" class="form-control textArea" placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label name="pageNumber" class="pageNum">1</label>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="text-center input-gorup">
                            <input type="text" class="form-control custom-tag-form" name="tags" placeholder="Tags" />
                        </div>
                    </div>

                    <div class="panel panel-default custom-sub-panel">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="page_title[]" placeholder="Provide a Page Title" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button type="button" class="deletePage btn btn-default" title="Delete this Page" name="deletePage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                            <p class="uploadPanel">
                                {{--
                              
                                --}}
                                <label class="fileContainer btn btn-default">
                                    <span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image (optional)
                                    <input type="file" name="image[]" />
                                </label>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="page_content[]" class="form-control textArea" placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label class="pageNum">1</label>
                        </div>
                    </div>

                    <div class="panel panel-default custom-sub-panel">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="page_title[]" placeholder="Provide a Page Title" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button type="button" class="deletePage btn btn-default" title="Delete this Page" name="deletePage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                            <p class="uploadPanel">
                                {{--
                              
                                --}}
                                <label class="fileContainer btn btn-default">
                                    <span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image (optional)
                                    <input type="file" name="image[]" />
                                </label>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="page_content[]" class="form-control textArea" placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label name="pageNumber" class="pageNum">1</label>
                        </div>
                    </div>
                <input type="submit" name="submit" class="btn btn-success"/>
                </div>
            </div>
        </form>
        <button class="btn btn-primary pull-right addPgBtn" title="Add another Page" name="addPage"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add a Page</button>

    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/create_lesson.css"/>
@endpush
