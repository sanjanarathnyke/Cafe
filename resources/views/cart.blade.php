@extends('layouts.context')
@section('content')

<section class="page-banner">
    <div class="page-bg-wrapper p-r z-1 bg_cover pt-100 pb-110"
        style="background-image: url(assets/images/bg/page-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Page Banner Content ===-->
                    <div class="page-banner-content text-center">
                        <h1 class="page-title">Cart</h1>
                        <ul class="breadcrumb-link">
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Page Section ======-->
<!--====== Start Cart Section ======-->
<section class="cart-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="cart-wrapper wow fadeInUp">
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <tbody>
                                {{-- Display the alert messages --}}
                                @if(session('message'))
                                <div class="alert alert-warning">
                                    {{ session('message') }}
                                </div>
                                @endif

                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                {{-- Check if the cart is not empty --}}
                                @if(session('cart') && count(session('cart')) > 0)
                                @foreach(session('cart') as $id => $item)
                                <tr>
                                    <td class="thumbnail-title">
                                        <img src="{{ asset($item['image']) }}" alt="Cart Image">
                                        <span class="title">
                                            <a href="menu-details.html">{{ $item['name'] }}</a>
                                        </span>
                                    </td>

                                    {{-- Display the price of the item --}}
                                    <td class="subtotal">${{ $item['price'] }}</td>

                                    <td class="quantity">
                                        <div class="quantity-input">
                                            <button class="quantity-down"><i class="far fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" name="quantity">
                                            <button class="quantity-up"><i class="far fa-plus"></i></button>
                                        </div>
                                    </td>

                                    {{-- Remove item from cart with the trash icon --}}
                                    <td class="remove">
                                        <a href="{{ route('remove.from.cart', $id) }}" class="remove-btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4">
                                        <p>No items in the cart.</p>
                                    </td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="cart-middle mt-40 wow fadeInUp">
                    <div class="row">

                        <div class="col-lg-5">
                            <div class="update-cart float-lg-right mb-30">
                                <button class="theme-btn style-one">Update Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="shopping-cart-total mb-30 wow fadeInUp">
                    <h4 class="title">Cart Totals</h4>
                    <table class="table mb-25">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td class="price" id="cart-subtotal">$0.00</td>
                            </tr>
                            <tr>
                                <td>Shipping Fee</td>
                                <td class="price">$50</td>
                            </tr>
                            <tr>
                                <td class="total"><span>Order Total</span></td>
                                <td class="total price"><span>$0.00</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="theme-btn style-one">Proceed to checkout</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Cart Section ======-->

@endsection