@extends('layout.default')

@section('main')
<div class="container-fluid comics-background">
    <div class="container comics-container">
        <span class="series-info">CURRENT SERIES</span>
    </div>
</div>
<div class="container-fluid shop-nav flex-container">
    <div class="container">
        <div class="flex-container align-items-center">
            <div class="col shops-container my-auto align-items-center">
                <div class="flex-container">
                    <div class="shop-img-container pe-2">
                        <img class="img-fluid" src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                    <span>DIGITAL COMICS</span>
                </div>
            </div>
            <div class="col shops-container my-auto">
                <div class="flex-container">
                    <div class="shop-img-container pe-2">
                        <img class="img-fluid" src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    </div>
                    <span>DC MERCHANDISE</span>
                </div>
            </div>
            <div class="col shops-container my-auto">
                <div class="flex-container">
                    <div class="shop-img-container pe-2">
                        <img class="img-fluid" src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    </div>
                    <span>SUBSCRIPTION</span>
                </div>
            </div>
            <div class="col shops-container my-auto">
                <div class="flex-container">
                    <div class="shop-img-container pe-2">
                        <img class="img-fluid" src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    </div>
                    <span>COMIC SHOP LOCATION</span>
                </div>
            </div>
            <div class="col shops-container my-auto">
                <div class="flex-container">
                    <div class="shop-img-container pe-2">
                        <img class="img-fluid" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    </div>
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection