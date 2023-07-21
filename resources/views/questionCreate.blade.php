@extends('layouts.admin')

@section('content')


<div class="card card-primary col-11 m-3">

    @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
    </p>
@endif
              <div class="card-header">
                <h3 class="card-title">Create question for - {{$quiz->title}} - ({{$quiz->current_number+1}}/{{$quiz->number}})</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('question/add/').'/'.$quiz->id}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">


                    <div class="form-group">
                        @error('question')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                        <label for="question">Question</label>
                        <input type="text" class="form-control" id="question" name="question" placeholder="Write question">
                      </div>

                  <div class="form-group">
                    @error('a')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="a">Option A</label>
                    <input type="text" class="form-control" id="a" name="a" placeholder="Write Option">
                  </div>
                  <div class="form-group">
                    @error('b')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="b">Option B</label>
                    <input type="text" class="form-control" name="b" id="b" placeholder="Write Option">
                  </div>


                  <div class="form-group">
                    @error('c')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="c">Option C</label>
                    <input type="text" class="form-control" name="c" id="c" placeholder="Write Option">
                  </div>

                  <div class="form-group">
                    @error('d')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="d">Option D</label>
                    <input type="text" class="form-control" name="d" id="d" placeholder="Write Option">
                  </div>

                  <div class="form-group">
                    <label>Select right answer</label>
                    <select class="form-control select2" name="right" style="width: 100%;">

                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>


                    </select>
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Question</button>
                </div>
              </form>
            </div>


            @endsection
