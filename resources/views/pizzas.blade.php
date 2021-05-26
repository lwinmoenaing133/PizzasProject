@extends("layout.layout")
@section("content")
<div class="container">
@if(Session("delete"))
    <div class="alert alert-danger mt-3 mb-3">
      {{Session("delete")}}
    </div>
  @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">User</th>
                <th scope="col">Pizza Name</th>
                <th scope="col">Types</th>
                <th scope="col">Sauce</th>
                <th scope="col">Prize</th>
                <th scope="col">Edit Order</th>
                <th scope="col">Order Complete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pizzas as $pizza )
            <tr>
                <th scope="row">{{$pizza['id']}}</th>
                <td>{{$pizza['username']}}</td>
                <td>{{$pizza['pizza_name']}}</td>
                <td>{{$pizza['types']}}</td>
                <td>{{$pizza['sauce']}}</td>
                <td>{{$pizza['price']}}$</td>
                <td><a class="btn btn-sm btn-warning" href="{{route("edit",$pizza->id)}}">Edit Order</a></td>
                <td><a class="btn btn-sm btn-success" href="{{route("delete",$pizza->id)}}">Order Complete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!--model form-->
{{-- <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold">Order Update</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body mx-3">
        <div class="form-outline mb-2">
            <input type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">User Name</label>
          </div>
        <!-- Pizza Name input -->
        <div class="form-outline mb-2">
          <input type="text" id="form3Example3" class="form-control" />
          <label class="form-label" for="form3Example3">Pizza Name</label>
        </div>

        <div class="form-outline mb-2">
            <input type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Toppings</label>
        </div>

        <div class="form-outline mb-2">
            <input type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Sauce</label>
        </div>

        <div class="form-outline mb-2">
            <input type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Size</label>
        </div>

    </div>
    <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-indigo">Update<i class="fas fa-paper-plane-o ml-1"></i></button>
    </div>
  </div>
</div>
</div> --}}
@endsection
