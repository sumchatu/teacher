@extends('app')
@section('content')
<div class="container">
    <div class="panel">
    	<div class="panel-heading">
    		<h3 class="panel-title">Set the Answers of Question: {{$question->question}}</h3>
    	</div>
    	<div class="panel-body">
            <form action="{{route('answer.store')}}" method="POST" enctype="multipart/form-data" id="form">
                {{ csrf_field() }}
            	<div class="form-group">
        			 <label class="control-label col-md-2"> Answer1 :</label>
                     <div class="col-md-4 gap">
                       <input class="form-control" type="text" name="answer[]" placeholder="Answer1" required>
                       <label>
                            <input type="checkbox" class="radio" value="1" name="is_answer[]" />Right Answer?
                        </label>
                     </div>

                     <label class="control-label col-md-2"> Answer2 :</label>
                     <div class="col-md-4 gap">
                       <input class="form-control" type="text" name="answer[]" placeholder="Answer2" required>
                       <label>
                            <input type="checkbox" class="radio" value="1" name="is_answer[]" />Right Answer?
                        </label>
                     </div>

                     <label class="control-label col-md-2"> Answer3 :</label>
                     <div class="col-md-4 gap">
                       <input class="form-control" type="text" name="answer[]" placeholder="Answer3" required>
                       <label>
                            <input type="checkbox" class="radio" value="1" name="is_answer[]" />Right Answer?
                        </label>
                     </div>

                     <label class="control-label col-md-2"> Answer4 :</label>
                     <div class="col-md-4 gap">
                       <input class="form-control" type="text" name="answer[]" placeholder="Answer4" required>
                       <label>
                            <input type="checkbox" class="radio" value="1" name="is_answer[]" />Right Answer?
                        </label>
                     </div>
                </div>
                
                <div class="col-md-12">
        		<div class="text-center">
                 <button type="submit" class="btn btn-primary icon-btn" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                 <a href="">
                  <button type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cancel</button>
                </a>
                 </div>
                </div>
    		</form>
    	</div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">

        $("#form").submit(function () {

            var this_master = $(this);

            this_master.find('input[type="checkbox"]').each( function () {
                var checkbox_this = $(this);

                if( checkbox_this.is(":checked") == false ) {
                    checkbox_this.prop('checked',true);
                    checkbox_this.attr('value','0');
                }
            })
        })
    </script>

@endsection
