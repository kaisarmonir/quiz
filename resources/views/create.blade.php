@extends('layouts.admin')

@section('content')


<div class="card card-primary col-11 m-3">

    @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
    </p>
@endif
              <div class="card-header">
                <h3 class="card-title">Create a quiz</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('quiz')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label>Choose catagory</label>
                        <select class="form-control select2" name="catagory" style="width: 100%;">

                          <option value="gen">General</option>
                          <option value="govt">Govt</option>
                          <option value="eng">English</option>
                          <option value="ban">Bangla</option>
                          <option value="math">Math</option>
                          <option value="gk">General knowledge</option>

                        </select>
                      </div>
                  <div class="form-group">
                    @error('title')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    @error('number')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="number">Number of questions</label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="Number of questions">
                  </div>


                  <div class="form-group">
                    @error('time')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="time">Time (In minutes)</label>
                    <input type="number" class="form-control" name="time" id="time" placeholder="Quiz duration">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Quiz</button>
                </div>
              </form>
            </div>


            @endsection
