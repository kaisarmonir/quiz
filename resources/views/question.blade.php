@extends('layouts.admin')

@section('content')


<div class="card card-primary col-md-11 mt-2 m-md-3">

    @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
    </p>
@endif

    <div class="accordion accordion-group" id="our-values-accordion">





        <table class="table table-bordered" style="font-size: 12px">
            <thead>
              <tr>
                <th scope="col">SL</th>

                <th scope="col">Title</th>
                <th scope="col">Cata.</th>
                <th scope="col">Tot.</th>
                <th scope="col">Now</th>
                <th scope="col">Time</th>
                <th scope="col">Sta.</th>
                <th scope="col">Action</th>

              </tr>
            </thead>

            <tbody>
                @foreach ($quiz as $key=>$quz)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{Str::limit($quz->title,10)}} </td>
                <td>{{$quz->catagory}}</td>
                <td>{{$quz->number}}</td>
                <td>{{$quz->current_number}}</td>
                <th>{{$quz->time}}</th>
                <td>@if (!($quz->status=='Approved'))
                    <input class="btn btn-primary" style="font-size: 10px; padding:0px;" value="" type="submit" form="form-{{$quz->id}}">
                    @endif</td>


                <td>

                    <a href="{{url('edit').'/'.$quz->id}}" class="text-primary mr-md-2"><i class="fas fa-edit"></i></a>
                <span>   <form method="POST" action="{{url('question').'/'.$quz->id}}" id="form-{{$quz->id}}" style="display:none">
                        @csrf
@method('patch')

                      </form></span>
                      <button class="btn btn-warning" style="font-size: 10px; text:white; padding:0px;"> <a href="{{url('question/add').'/'.$quz->id}}" class=" m-1">Add</a> </button>


                   <form method="POST" action="{{url('quiz').'/'.$quz->id}}" id="delete-form-{{$quz->id}}" style="display:none">
                          @csrf
                          @method('DELETE')

                        </form>
                        <span>      <a href="#" class="delete-icon-link ml-md-2 text-danger" data-record-id="{{$quz->id}}">
                          <i class="fas fa-trash delete-icon"></i>
                        </a></span>
                    </td>

              </tr>
              @endforeach
            </tbody>
          </table>

 {{$quiz->links()}}


    <!--/ Accordion end -->
<br>
  </div>

            </div>


            <script>
                var deleteLinks = document.querySelectorAll('.delete-icon-link');

                deleteLinks.forEach(function(link) {
                  link.addEventListener('click', function(event) {
                    event.preventDefault();
                    var recordId = link.getAttribute('data-record-id');
                    var confirmDelete = confirm('Are you sure you want to delete this record?');

                    if (confirmDelete) {
                      var formId = 'delete-form-' + recordId;
                      var form = document.getElementById(formId);
                      form.submit();
                    }
                  });
                });
              </script>


            @endsection
