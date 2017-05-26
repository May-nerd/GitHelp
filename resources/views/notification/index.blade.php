@extends('layouts.app')

@section('content')
 <div class="row">

     <div class="col-md-6 col-md-offset-3">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <span>From: THIS GUY</span>
             </div>
             
             <div class="panel-body">
                 <div>
                    Sample Text Here
                 </div>
             </div>
             
             <div class="panel-footer clearfix" style="background-color: #fff;">
              <a href="#" class="btn btn-info btn-sm pull-right"> 
                    link to delete said notif
                 </a>    
             
            </div>
        </div>
         <p class="text-center">No Notifications Found</p>
    </div>
</div>

@endsection