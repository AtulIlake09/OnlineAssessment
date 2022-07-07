@extends('default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('question.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header"><h1 class="mx-auto my-auto">Select Correct Answer</h1></div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
                    <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="cat_id" value="{{$cat_id}}">
                                <input type="hidden" name="ques_id" value="{{$ques_id}}">   
                                <div class="col-md-12 " id="quediv">
                                    <p name="question" id="question" class="text-white-custom-colour h3">
                                        {{'Question:  '.$question }}</p>
                                </div>
                                <div class="form-floating col-md-12" id="ansdiv">
                                    {{-- <label class="text-white-custom-colour" for="floatingTextarea2">options:-</label> --}}
                                    <div style="text-align: left; font-size: 18px; padding-left: 1vmax;"> 
                                        <ul>
                                        @foreach($options as $option) 
                                            <input type='radio' name='answer' value='{{$option['option_id']}}'/> {{$option['option']}}<br>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer text-right mx-auto p-0">
                        <input class="btn btn-danger" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Previous"/>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection