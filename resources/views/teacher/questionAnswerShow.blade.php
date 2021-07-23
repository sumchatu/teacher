@extends('app')

@section('content')
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading">Question: <h3> {{$question->question}}</h3></div>
    <div class="panel-body">Answers:
        @if($question->answers->count() > 0)
            <ol>
                @foreach($question->answers as $answer)
                    <li>{{$answer->answer_name}}</li>
                @endforeach
            </ol>
        @else
        <a href="{{ route('answer.create',Crypt::encrypt($question->id)) }}" title="Answers"><button type="button" class="btn btn-success btn-sm">Set Answers</button></a>
        @endif
    </div>
    </div>
</div>
@endsection