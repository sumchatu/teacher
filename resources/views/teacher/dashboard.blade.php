@extends('app')

@section('content')
<div class="container">
<div class="panel">
        <div class="pull-left">
          <h3 class="panel-title">List of Questions</h3>
          <div class="pull-right">
          <a href="{{ route('question.create')}}" title="Create New Question"><button type="button" class="btn btn-primary btn-sm">Create New Question</button></a>
        </div>
        </div>
      <div class="panel-body">
        <table class="table table-new">
          <thead>
            <tr>
              <th>Sl.No.</th>
              <th>Question</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @if ($questions->count() > 0)
              <input type="hidden" value = "{{$i = ($questions->currentpage()-1)* $questions->perpage() + 1}}"></input>
                @foreach ($questions as $question)
                  <tr class="gradeX">
                    <td class="center">{{$i++}}</td>
                    <td>{{$question->question}}</td>
                    <td>
                      @if($question->status == 1) 
                        <span>Active</span>
                      @else
                        <span>Inactive</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('question.show',Crypt::encrypt($question->id)) }}" title="Answers"><button type="button" class="btn btn-success btn-sm">Answers</button></a>
                      <a href="{{ route('question.edit',$question->id) }}" title="Edit"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
                      <a href="#" title="Delete"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                    </td>
                  </tr>
                @endforeach 
              @else <tr><td colspan="4"><div class="alert alert-danger">No record found</div></td></tr>
            @endif 
          </tbody>
        </table>
        {{$questions->links()}}
      </div>
  </div>    
</div>
@endsection