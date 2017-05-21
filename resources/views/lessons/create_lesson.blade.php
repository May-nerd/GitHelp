@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="" method="">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create a Lesson for [Math]</h1>

                <div class="form-group">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="input-group center-block text-center">
                                <input type="text" class="form-control text-center" name="title" placeholder="Title of your lesson" />
                            </div>
                        </div>
                    </div>
                                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control text-center" name="pageTitle" placeholder="Title of your Page" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button class="btn btn-default" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>Upload an Image for this page (Optional)</strong>
                                <input type="file" name="imgUpload" class="text-center" />
                            </p>
                            <hr/>
                            <div class="input-group center-block">
                              <textarea name="pageContent" class="form-control " placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            Page 1
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="col-md-6 pull-left center-block">
                                <input type="text" class="form-control text-center" name="pageTitle" placeholder="Title of your Page" />
                            </div>
                            <div class="input-group col-md-6 text-right">
                                <button class="btn btn-default" title="Delete this Page" name="addPage"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>Upload an Image for this page (Optional)</strong>
                                <input type="file" name="imgUpload" class="text-center" />
                            </p>
                            <hr/>
                            <div class="input-group center-block">
                              <textarea name="pageContent" class="form-control " placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            Page 2
                        </div>
                    </div>

                </div>  

            </div>

            <div class="pull-right">
                <button class="btn btn-primary" title="Add another Page" name="addPage"><span class="glyphicon glyphicon-plus"></span> &nbsp;Add a Page</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/create_lesson.css"/>
@endpush