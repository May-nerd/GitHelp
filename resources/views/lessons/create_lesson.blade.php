@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create a Lesson</h1>

            <form action="" method="">

                <div class="form-group">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="input-group center-block text-center">
                                <input type="text" class="form-control text-center" name="title" placeholder="Title of your lesson" />
                            </div>
                            <div class="input-group pull-right">
                                 <button class="btn btn-primary " name="addPage"><span class="glyphicon glyphicon-plus"></span> &nbsp;Add a Page</button>
                            </div>

                        </div>
                    </div>
                   
                    <!-- <div class="col-md-4">
                        
                    </div> -->
                   

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control text-center" name="pageTitle" placeholder="Title of your Page" />
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="input-group">
                                <label>Upload an Image for this page (Optional)</label>
                                <input type="file" name="imgUpload" class="text-center" />
                            </div>
                            <div class="input-group center-block">
                              <textarea name="pageContent" class="form-control " placeholder="What is this page about?"></textarea>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            Page 1
                        </div>
                    </div>

                </div>
            </form>


        </div>
    </div>
</div>

@endsection