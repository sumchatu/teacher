@extends('app')
@section('content')
    <div class="panel">
    	<div class="panel-heading">
    		<h3 class="panel-title">New Question Creation</h3>
    	</div>
    	<div class="panel-body">
            <form action="{{route('question.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            	<div class="form-group">
        			 <label class="control-label col-md-2"> Question :</label>
                     <div class="col-md-4 gap">
                       <input class="form-control" type="text" name="question" placeholder="Type Question" required>
                     </div>
                </div>
                
                <div class="col-md-12">
        		<div class="text-center">
                 <button type="submit" class="btn btn-primary icon-btn" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                 <a href="{{route('question.index')}}">
                  <button type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cancel</button>
                </a>
                 </div>
                </div>
    		</form>
    	</div>
    </div>
@endsection