@extends('site.layouts.default')

@section('content')

    <div class="container mx-auto py-16">
    <div class="py-16 px-4 bg-gray-100 min-h-screen">
        <h1 class="text-3xl text-black font-light uppercase text-center">Payment</h1>
        <div class="w-1/2 mx-auto py-12 mt-8 px-12 bg-white shadow-lg rounded-lg">
                <div class="text-center">
                    <button id="payment-button"  class="payment-button bg-purple-600 text-white px-6 py-4">Pay using Khalti</button>
                </div>

        </div>

    </div>
    </div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
      <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_21e335e3441d42e586dad6693a8476b2",
            "productIdentity": " {{ $cart->id }} ",
            "productName": " {{ $cart->items->count() }} Products from Tasveer",
            "productUrl": "http://localhost",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    console.log(payload);
                    // hit merchant api for initiating verfication
                    $.post('/payment-gateway/khalti/pay', {
                        '_token': "{{ csrf_token() }}",
                        token: payload.token,
                        amount: payload.amount,
                        email: "{{ session()->get('checkout_email') }}",
                        products: {{ $cart->items->pluck('id')->toJSON() }}
                    }, function(data, status) {
                        console.log(data,status);
                        alert("An email has been sent to email address  {{ session()->get('checkout_email') }} with the image you just purchased. Thank you for choosing Tasveer.");
                        window.location = "/";
                    });
                },
                onError (error) {
                    console.log(error, "err");
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: {{ $cart->total() }} });
        }
    </script>

@endpush