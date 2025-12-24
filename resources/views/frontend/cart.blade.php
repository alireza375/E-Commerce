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


        <!-- Cart Page Start -->
        <div class="py-5 container-fluid">
            <div class="container py-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>

                        @foreach ($carts as $cart)
                            <tbody>
                                <tr>
                                    <th scope="row">

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($cart->product->image) }}" class="" style="width: 80px; height: 80px;" alt="">
                                        </div>
                                    </th>
                                    <td>
                                        <p class="mt-4 mb-0">{{ $cart->product->name }}</p>
                                    </td>
                                    <td class="mt-4 mb-0 unit-price" data-price="{{ $cart->product->selling_price }}">
                                        {{ $cart->product->selling_price }} BDT
                                    </td>
                                    <td>
                                        <div class="mt-4 input-group quantity" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="border btn btn-sm btn-minus rounded-circle bg-light">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            {{-- Qunantity Update by CartUpdate function --}}

                                            <form action="{{ route('cart.update', $cart->id) }}" method="POST">
                                                @csrf
                                                <input type="text" class="text-center border-0 qty-input form-control form-control-sm" name="quantity" value="{{ $cart->quantity }}" miin="1" >
                                            </form>

                                            {{-- <input type="text"
                                                class="text-center border-0 qty-input form-control form-control-sm"
                                                value="{{ $cart->quantity }}"
                                                readonly> --}}

                                            <div class="input-group-btn">
                                                <button class="border btn btn-sm btn-plus rounded-circle bg-light">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mt-4 mb-0 total-price">
                                            {{ $cart->product->selling_price * $cart->quantity }} BDT
                                        </p>
                                    </td>
                                    <td>
                                        <button class="mt-4 border btn btn-md rounded-circle bg-light" >
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        @endforeach

                    </table>
                </div>
                <div class="row g-4 justify-content-end">
                    <div class="col-8"></div>
                    <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="rounded bg-light">
                    <div class="p-4">
                        <h1 class="mb-4 display-6">Cart <span class="fw-normal">Total</span></h1>

                        <div class="mb-4 d-flex justify-content-between">
                            <h5 class="mb-0 me-4">Subtotal:</h5>
                            <p class="mb-0" id="cart-subtotal">৳ 0</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 me-4">Delivery Charge:</h5>
                            <p class="mb-0" id="delivery-charge" data-charge="300">৳ 300</p>
                        </div>
                    </div>

                    <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                        <h5 class="mb-0 ps-4 me-4">Total</h5>
                        <p class="mb-0 pe-4" id="grand-total">৳ 0</p>
                    </div>


                    <a href="{{ route('cart.checkout') }}"><button class="px-4 py-3 mb-4 btn border-secondary rounded-pill text-primary text-uppercase ms-4" type="button">
                        Proceed Checkout
                    </button></a>
                </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->

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

    {{-- <script>
        document.addEventListener('click', function (e) {

            if (e.target.closest('.btn-plus') || e.target.closest('.btn-minus')) {

                const row = e.target.closest('tr');
                const qtyInput = row.querySelector('.qty-input');
                const price = parseFloat(row.querySelector('.unit-price').dataset.price);
                const totalPriceEl = row.querySelector('.total-price');

                let qty = parseInt(qtyInput.value);

                if (e.target.closest('.btn-plus')) {
                    qty++;
                }

                if (e.target.closest('.btn-minus') && qty > 1) {
                    qty--;
                }

                qtyInput.value = qty;

                totalPriceEl.innerText = (price * qty) + ' BDT';
            }
        });
    </script> --}}

    <script>
        function updateCartSummary() {
            let subtotal = 0;

            document.querySelectorAll('.total-price').forEach(item => {
                subtotal += parseFloat(
                    item.innerText.replace('BDT', '').replace('৳', '').trim()
                );
            });

            const deliveryCharge = parseFloat(
                document.getElementById('delivery-charge').dataset.charge
            );

            document.getElementById('cart-subtotal').innerText = '৳ ' + subtotal;
            document.getElementById('grand-total').innerText = '৳ ' + (subtotal + deliveryCharge);
        }

        document.addEventListener('click', function (e) {

            if (!e.target.closest('.btn-plus') && !e.target.closest('.btn-minus')) return;

            const row = e.target.closest('tr');
            const qtyInput = row.querySelector('.qty-input');
            const price = parseFloat(row.querySelector('.unit-price').dataset.price);
            const totalPriceEl = row.querySelector('.total-price');

            let qty = parseInt(qtyInput.value);
            // console.log(qty);

            if (e.target.closest('.btn-plus')) {
                qty++;
            }

            if (e.target.closest('.btn-minus') && qty > 1) {
                qty--;
            }

            qtyInput.value = qty;
            totalPriceEl.innerText = (price * qty) + ' BDT';

            updateCartSummary(); // ✅ update subtotal & total
        });

        // initial load
        document.addEventListener('DOMContentLoaded', updateCartSummary);
    </script>


    </body>

</html>
