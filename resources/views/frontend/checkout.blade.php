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

        <!-- header section strats -->
        @include('frontend.body.header')
        <!-- end header section -->


        <!-- Cart Checkout Page Start -->

        <!-- Checkout Page Start -->
        <div class="py-5 container-fluid">
            <div class="container py-5">
                <h1 class="mb-4">Billing details</h1>
                <form action="#">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="form-item">
                                <label class="my-3 form-label">Address <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="House Number Street Name">
                            </div>
                            <div class="form-item">
                                <label class="my-3 form-label">Town/City<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="my-3 form-label">Postcode/Zip<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Products</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                        <tbody>
                                             @php
                                            $grandTotal = 0;
                                        @endphp
                                        @foreach ($carts as $cart)
                                        @php
                                            $total = $cart->product->selling_price * $cart->quantity;
                                            $grandTotal += $total;
                                        @endphp
                                            <tr>
                                                <th scope="row">
                                                    <div class="mt-2 d-flex align-items-center">
                                                        <img src="{{ asset($cart->product->image) }}" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                                                    </div>
                                                </th>
                                                <td class="py-5">{{ $cart->product->name }}</td>
                                                <td class="py-5">{{ $cart->product->selling_price }} BDT</td>
                                                <td class="py-5">{{ $cart->quantity }}</td>
                                                <td class="py-5">{{ $cart->product->selling_price * $cart->quantity }} BDT</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                      <tr>
                                        <th scope="row">
                                        </th>
                                        <td class="py-5">
                                            <p class="py-3 mb-0 text-dark text-uppercase">TOTAL</p>
                                        </td>
                                        <td class="py-5"></td>
                                        <td class="py-5"></td>
                                        <td class="py-5">
                                            <div class="py-3 border-bottom border-top">
                                                <p class="mb-0 text-dark">{{ $grandTotal }} BDT</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="py-3 text-center row g-4 align-items-center justify-content-center border-bottom">
                                <div class="col-12">
                                    <div class="my-3 form-check text-start">
                                        <input type="checkbox" class="border-0 form-check-input bg-primary" id="Paypal-1" name="Paypal" value="Paypal">
                                        <label class="form-check-label" for="Paypal-1">Stripe</label>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4 text-center row g-4 align-items-center justify-content-center">
                                <button type="button" class="px-4 py-3 btn border-secondary text-uppercase w-100 text-primary">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
        <!-- Cart Checkout Page End -->

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


    </body>

</html>
