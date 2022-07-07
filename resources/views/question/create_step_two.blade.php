@extends('default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('question.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header"><h1 class="mx-auto my-auto">Add Options</h1></div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        
                            <input type="hidden" name="cat_id" value="{{$cat_id}}">
                            <input type="hidden" name="ques_id" value="{{$ques_id}}">                            
                            <input type="text" class="form-control form-control-solid mx-auto w-50 mb-5" name="option1" id="Option1" placeholder="Option 1" value="{{(empty($options[1])) ? "" : $options[1]}}" required>
                            <input type="text" class="form-control form-control-solid mx-auto w-50 mb-5" name="option2" id="Option2" placeholder="Option 2" value="{{(empty($options[2])) ? "" : $options[2]}}" required>
                            <input type="text" class="form-control form-control-solid mx-auto w-50 mb-5" name="option3" id="Option3" placeholder="Option 3" value="{{(empty($options[3])) ? "" : $options[3]}}" required>
                            <input type="text" class="form-control form-control-solid mx-auto w-50" name="option4" id="Option4" placeholder="Option 4" value="{{(empty($options[4])) ? "" : $options[4]}}" required>
                    </div>
                    <div class="card-footer text-right mx-auto p-0">
                        {{-- <a href="{{ route('question.create.step.one',['cat_id'=>$cat_id]) }}" class="btn btn-danger pull-right">Previous</a> --}}
                        <input class="btn btn-danger" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Previous"/>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection