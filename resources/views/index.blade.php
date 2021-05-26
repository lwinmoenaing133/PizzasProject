@extends("layout.layout")
@section("content")
    <div class="container">
        <h1 class="grey-text mt-4 d-inline">Welcom To My Pizza Project</h1>
        <img src="{{asset('images/pizza.jpg')}}" width="200px" height="200px" class="img-responsive mt-2">
        <!--Validation-->
        @if(Session("success"))
        <div class="alert alert-success">
          {{Session("success")}}
        </div>
        @endif

    </div>
    <div class="container">
        <form action="{{route('insert')}}" method="post">
        @csrf
            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="username" />
                <label class="form-label" for="form3Example3">User Name</label>
                @error("username")
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            <!-- Pizza Name input -->
            <div class="form-outline mb-2">
              <input type="text" id="form3Example3" class="form-control" name="pizza_name" />
              <label class="form-label" for="form3Example3">Pizza Name</label>
              @error("pizza_name")
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="types" />
                <label class="form-label" for="form3Example3">Types</label>
                @error("types")
                  <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="sauce"/>
                <label class="form-label" for="form3Example3">Sauce</label>
                @error("sauce")
                  <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" name="price" />
                <label class="form-label" for="form3Example3">Price</label>
                @error("price")
                  <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
          
            
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-indigo btn-block mb-2">Order</button>
          
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