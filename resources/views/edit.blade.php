@extends("layout.layout")
@section("content")
    <div class="container">
        <!--Validation-->
        @if(Session("success"))
        <div class="alert alert-success">
          {{Session("success")}}
        </div>
        @endif
    </div>
    <div class="container mt-4">
            <h1>Update Order</h1>
        <form action="{{route("update",$pizza->id)}}" method="post">
        @csrf
            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="username" value="{{$pizza->username}}" />
                <label class="form-label" for="form3Example3">User Name</label>
                @error("username")
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            <!-- Pizza Name input -->
            <div class="form-outline mb-2">
              <input type="text" id="form3Example3" class="form-control" name="pizza_name" value="{{$pizza->pizza_name}}" />
              <label class="form-label" for="form3Example3">Pizza Name</label>
              @error("pizza_name")
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="types" value="{{$pizza->types}}" />
                <label class="form-label" for="form3Example3">Types</label>
                @error("types")
                  <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="sauce" value="{{$pizza->sauce}}"/>
                <label class="form-label" for="form3Example3">Sauce</label>
                @error("sauce")
                  <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="price" value="{{$pizza->price}}" />
                <label class="form-label" for="form3Example3">Price</label>
                @error("price")
                  <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-indigo btn-block mb-2">Update</button>
          
            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-indigo btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
          
              <button type="button" class="btn btn-indigo btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>
          
              <button type="button" class="btn btn-indigo btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
          
              <button type="button" class="btn btn-indigo btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
    </div>
@endsection