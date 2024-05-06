@extends("template.main")

@section("title", "Home")

@section("body")
  <!-- Jumbotron -->
  <div class="bg-primary text-white py-5">
    <div class="container py-5">
      <h1>
        Best products & <br />
        brands in our store
      </h1>
      <p>
        Trendy Products, Factory Prices, Excellent Service
      </p>
      <button type="button" class="btn btn-outline-light">
        Learn more
      </button>
      <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
        <span class="pt-1">Purchase now</span>
      </button>
    </div>
  </div>
  <!-- Jumbotron -->

    <!-- Products -->
    <section>
    <div class="container my-5">
        <header class="mb-4">
        <h3>New products</h3>
        </header>

        <div class="row">
        {{-- @dd($dataProduct) --}}
        @foreach ($dataProduct as $product)
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
            <a href="{{ url("/product/{$product->id}-{$product->name}") }}">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="{{ $product->image }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">${{ $product->price }}</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </a>
        </div>
        @endforeach
        </div>
    </div>
    </section>
    <!-- Products -->

    <!-- Feature -->
    <section class="mt-5" style="background-color: #f5f5f5;">
    <div class="container text-dark pt-3">
        <header class="pt-4 pb-3">
        <h3>Why choose us</h3>
        </header>

        <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Reasonable prices</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Best quality</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Worldwide shipping</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Customer satisfaction</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Happy customers</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Thousand items</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        </div>
    </div>
    <!-- container end.// -->
    </section>
    <!-- Feature -->
@endsection
