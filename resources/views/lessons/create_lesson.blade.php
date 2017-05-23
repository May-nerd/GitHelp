@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="" method="">
            <div class="col-md-8 col-md-offset-2">
                <!-- <h1>Create a Lesson for [Math]</h1> -->

                <div class="form-group">

                    <div class="panel panel-default custom-panel">
                        <div class="panel-body">
                            <div class="col-md-8 input-group center-block text-center">
                                <input type="text" class="form-control text-center custom-form text-uppercase" name="title" placeholder="LESSON TITLE" />
                            </div>
                        </div>
                    </div>
                                    
                    <div class="panel panel-default custom-sub-panel">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="pageTitle" placeholder="Provide a Page Title" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button class="btn btn-default" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                            <p id="uploadPanel">
                                <label class="fileContainer btn btn-default">
                                    <span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image
                                    <input type="file" name="imgUpload" class="btn btn-success"/>
                                </label>
                                <strong>Upload an Image for this page (Optional)</strong>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="pageContent" class="form-control" id="textArea" placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label id="pageNum">1</label>
                        </div>
                    </div>

                    <div class="panel panel-default custom-sub-panel">
                        <div class="panel-heading custom-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control custom-sub-form" name="pageTitle" placeholder="Provide a Page Title" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button class="btn btn-default" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body custom-body">
                            <p id="uploadPanel">
                                <label class="fileContainer btn btn-default">
                                    <span class="glyphicon glyphicon-upload"></span>&nbsp;Upload an Image
                                    <input type="file" name="imgUpload" class="btn btn-success"/>
                                </label>
                                <strong>Upload an Image for this page (Optional)</strong>
                            </p>
                            <div class="input-group center-block">
                              <textarea name="pageContent" class="form-control" id="textArea" placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right custom-footer">
                            <label id="pageNum">2</label>
                        </div>
                    </div>

                <input type="submit" name="submit" class="btn btn-success"/>
                </div>  
            </div>

            <button class="btn btn-primary pull-right" title="Add another Page" name="addPage" id="addPgBtn"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add a Page</button>

        </form>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/create_lesson.css"/>
@endpush