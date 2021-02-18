@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <a href="#"> Filter </a>
    </div>
    <div class="col-sm-6">
            <div class="trending-wrapper">
              <h5>results</h5>
              @foreach ($products as $item)
              <div class="searched-items">
                <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}" >
                <div class="">
                  <h2>{{$item['name']}}</h2>
                  <h5>{{$item['description']}}</h5>
                </div>
                </a>
              </div>
              @endforeach
            </div>
    </div>
    </div>
</div>
@endsection
