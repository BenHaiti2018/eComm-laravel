@extends('master')
@section("content")
<div class="container">
    <div class="col-sm-10">
            <div class="trending-wrapper">
              <h5>Your Cart</h5>
              @foreach ($products as $item)
              <div class="row searched-items cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" >
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                          <h4>{{$item->name}}</h4>
                          <h5>{{$item->description}}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                   <button class="btn btn-warning">Remove from cart</button>
                </div>
              </div>
              @endforeach
            </div>
    </div>
</div>
@endsection
