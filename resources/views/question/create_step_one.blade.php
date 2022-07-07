@extends('default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('question.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header"><h1 class="mx-auto my-auto">New Question For {{ $category ?? 'Type' }}</h1></div>
  
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

                                {{-- <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">New Question For {{ $category ?? "Type" }}</h1>
                                    <!--end::Title-->
                                </div> --}}
                                <!--end::Heading-->
                                <div class="row g-9 mb-8">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                            for="inputType">Type</label>
                                        <!--begin::Select2-->
                                        <select name="type" id="inputType"
                                            class="form-control form-select form-select-solid" required>
                                            <option value="">none</option>
                                            <option value="1">Descriptive</option>
                                            <option value="2">Objective</option>
                                            <option value="3">Code</option>
                                        </select>
                                        <!--end::Select2-->
                                        <input type="hidden" name="cat_id" value="{{ $cat_id }}">
                                    </div>
                                </div>
                                <div class="row g-9">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-bold mb-2" style="margin-left: 5px"
                                            for="question">Add
                                            Question</label>
                                        <textarea type="text" class="form-control form-control-solid w-100 h-100px" name="question" placeholder="Test Question"
                                            id="question" required></textarea>
                                    </div>
                                    {{-- <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div> --}}
                                </div>
                            </form>
  
                            {{-- <div class="form-group">
                                <label for="title">Product Name:</label>
                                <input type="text" value="{{ $product->name ?? '' }}" class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Product Amount:</label>
                                <input type="text"  value="{{{ $product->amount ?? '' }}}" class="form-control" id="productAmount" name="amount"/>
                            </div>
   
                            <div class="form-group">
                                <label for="description">Product Description:</label>
                                <textarea type="text"  class="form-control" id="taskDescription" name="description">{{{ $product->description ?? '' }}}</textarea>
                            </div> --}}
                          
                    </div>
  
                    <div class="card-footer text-right mx-auto p-0">
                        <button type="submit" class="btn btn-primary">Next</button>
                        <a class="btn btn-secondary" href="{{ url()->previous() }}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection