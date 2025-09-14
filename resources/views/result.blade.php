@extends('layouts.admin')

@section('content')


<div class="card card-primary col-md-11 mt-2 m-md-3">



    <div class="accordion accordion-group" id="our-values-accordion">





        <table class="table table-bordered" style="font-size: 12px">
            <thead>
              <tr>
                <th scope="col">SL</th>

                <th scope="col">Name</th>
                <th scope="col">Model test</th>
                <th scope="col">Mark</th>
                <th scope="col">Total</th>


              </tr>
            </thead>

            <tbody>
                @foreach ($results as $key=>$result)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{Str::limit($result->name,10)}} </td>
                <td>{{$result->quiz}}</td>
                <td>{{$result->mark}}</td>

                <th>{{$result->total}}</th>





              </tr>
              @endforeach
            </tbody>
          </table>


<div class="pagination">
    <ul class="pagination justify-content-center">
        @if ($results->currentPage() > 1)
            <li class="page-item">
                <a class="page-link" href="{{ $results->url(1) }}" aria-label="First">
                    First
                </a>
            </li>
        @endif

        @if ($results->currentPage() > 3)
            <li class="page-item disabled">
                <span class="page-link">...</span>
            </li>
        @endif

        @for ($i = max(1, $results->currentPage() - 2); $i <= min($results->lastPage(), $results->currentPage() + 2); $i++)
            <li class="page-item {{ ($results->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $results->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        @if ($results->currentPage() < $results->lastPage() - 2)
            <li class="page-item disabled">
                <span class="page-link">...</span>
            </li>
        @endif

        @if ($results->currentPage() < $results->lastPage() - 1)
            <li class="page-item {{ ($results->currentPage() == $results->lastPage()) ? 'active' : '' }}">
                <a class="page-link" href="{{ $results->url($results->lastPage()) }}">{{ $results->lastPage() }}</a>
            </li>
        @endif
    </ul>
</div>





    <!--/$quiz->links() Accordion end -->
<br>
  </div>

            </div>




            @endsection
