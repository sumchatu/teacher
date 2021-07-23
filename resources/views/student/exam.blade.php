@extends('app')

@section('content')
    <div>
        <form action="{{route('exam.submit')}}" method="post" id="form">
            {{ csrf_field() }}
            @foreach($questions as $q)
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header"><input type="hidden" name="question[]" value="{{$q->id}}">{{$q->question}}</div>
                <div class="card-body">
                <select class="form-control" id="status" name="answer[]">
                    <option value = "0" selected="selected">Select Answer</option>
                    @foreach($q->answers as $a)
                          <option value = "{{$a->id}}">{{$a->answer_name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary icon-btn" id="submitForm"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">

    </script>
@endsection