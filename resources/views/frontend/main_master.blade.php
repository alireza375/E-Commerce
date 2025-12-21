<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
         <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset ('frontend/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{asset ('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset ('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        {{-- <link href="css/style.css" rel="stylesheet"> --}}
        <link href="{{asset ('frontend/assets/css/style.css') }}" rel="stylesheet" />
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="bg-white show w-100 vh-100 position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- header section strats -->
        @include('frontend.body.header')
        <!-- end header section -->

        <div class = "content-page">
               <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="mx-auto input-group w-75 d-flex">
                        <input type="search" class="p-3 form-control" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    {{-- <div class="py-5 mb-5 container-fluid hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">100% Organic Foods</h4>
                    <h1 class="mb-5 display-3 text-primary">Organic Veggies & Fruits Foods</h1>
                    <div class="mx-auto position-relative">
                        <input class="px-4 py-3 border-2 form-control border-secondary w-75 rounded-pill" type="number" placeholder="Search">
                        <button type="submit" class="px-4 py-3 text-white border-2 btn btn-primary border-secondary position-absolute rounded-pill h-100" style="top: 0; right: 25%;">Submit Now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="rounded carousel-item active">
                                <img src="img/hero-img-1.png" class="rounded img-fluid w-100 h-100 bg-secondary" alt="First slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">Fruites</a>
                            </div>
                            <div class="rounded carousel-item">
                                <img src="img/hero-img-2.jpg" class="rounded img-fluid w-100 h-100" alt="Second slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">Vesitables</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    {{-- <div class="py-5 container-fluid featurs">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-car-side fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Free Shipping</h5>
                            <p class="mb-0">Free on order over $300</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-user-shield fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Security Payment</h5>
                            <p class="mb-0">100% security payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-exchange-alt fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>30 Day Return</h5>
                            <p class="mb-0">30 day money guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fa fa-phone-alt fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>24/7 Support</h5>
                            <p class="mb-0">Support every time fast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    <div class="py-5 container-fluid fruite">
        <div class="container py-5">
            <div class="text-center tab-class">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Our Organic Products</h1>
                    </div>
                    <div class="col-lg-8 text-end">

                        <ul class="mb-5 text-center nav nav-pills d-inline-flex">
                            <li class="nav-item">
                                <a class="py-2 m-2 d-flex bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Categories</span>
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="py-2 m-2 d-flex bg-light rounded-pill {{ $loop->first ? 'active' : '' }}"
                                    data-bs-toggle="pill"
                                    href="#tab-{{ $loop->iteration }}">
                                        <span class="text-dark" style="width: 130px;">{{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="p-0 tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($products as $product)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{ asset($product->image) }}" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="px-3 py-1 text-white rounded bg-secondary position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $product->name }}</h4>
                                                <p>{{ $product->description }}</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="mb-0 text-dark fs-5 fw-bold">৳{{ $product->selling_price }} / <small class="text-muted">{{ $product->unit }}</small></p>

                                                   <form action="{{ route('cart.store', $product->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" class="px-2 border btn border-secondary rounded-pill text-primary">
                                                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="px-3 py-1 text-white rounded bg-secondary position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Grapes</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="mb-0 text-dark fs-5 fw-bold">$4.99 / kg</p>
                                                    <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="px-3 py-1 text-white rounded bg-secondary position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Raspberries</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="mb-0 text-dark fs-5 fw-bold">$4.99 / kg</p>
                                                    <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->

    <!-- Banner Section Start-->
    <div class="my-5 container-fluid banner bg-secondary">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="text-white display-3">Fresh Exotic Fruits</h1>
                        <p class="mb-4 fw-normal display-3 text-dark">in Our Store</p>
                        <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                        <a href="#" class="px-5 py-3 border-2 border-white banner-btn btn rounded-pill text-dark">BUY</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/baner-1.png" class="rounded img-fluid w-100" alt="">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 100px;">1</h1>
                            <div class="d-flex flex-column">
                                <span class="mb-0 h2">250৳</span>
                                <span class="mb-0 h4 text-muted">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Fact Start -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="p-5 rounded bg-light">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>satisfied customers</h4>
                            <h1>1963</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality of service</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality certificates</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Available Products</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

        <!-- Fact Start -->


         @include('frontend.body.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>
function addToCart(productId) {
    fetch(`/store/cart/${productId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ quantity: 1 })
    })
    .then(response => response.json())
    .then(data => {
        alert('Product added to cart successfully!');
    })
    .catch(error => console.error('Error:', error));
}
</script>
    </body>

</html>
