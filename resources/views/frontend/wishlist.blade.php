@push('css')

@endpush
<div>
    <x-slot name="title">
        Wish List
    </x-slot>
    <x-slot name="header">
        Wish List
    </x-slot>

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ URL::asset('venam/') }}/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Wishlist</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- wishlist-area -->
        <section class="wishlist-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive-xl">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">QUANTITY</th>
                                    <th class="product-subtotal">SUBTOTAL</th>
                                    <th class="product-stock-status">Stock Status</th>
                                    <th class="product-add-to-cart"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#" class="wishlist-remove"><i class="flaticon-cancel-1"></i></a><a href="shop-details.html"><img src="{{ URL::asset('venam/') }}/img/product/wishlist_thumb01.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <h4><a href="shop-details.html">Woman Lathers Jacket</a></h4>
                                        <p>Cramond Leopard & Pythong Anorak</p>
                                        <span>65% poly, 35% rayon</span>
                                    </td>
                                    <td class="product-price">$ 29.00</td>
                                    <td class="product-quantity">
                                        <div class="cart-plus">
                                            <form action="#">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="2">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span>$ 68.00</span></td>
                                    <td class="product-stock-status"><span>In Stock</span></td>
                                    <td class="product-add-to-cart"><span>Added on March 10. 2020</span><a href="cart.html" class="btn">Add to Cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#" class="wishlist-remove"><i class="flaticon-cancel-1"></i></a><a href="shop-details.html"><img src="{{ URL::asset('venam/') }}/img/product/wishlist_thumb02.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <h4><a href="shop-details.html">Woman Lathers Jacket</a></h4>
                                        <p>Cramond Leopard & Pythong Anorak</p>
                                        <span>65% poly, 35% rayon</span>
                                    </td>
                                    <td class="product-price">$ 29.00</td>
                                    <td class="product-quantity">
                                        <div class="cart-plus">
                                            <form action="#">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="2">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span>$ 68.00</span></td>
                                    <td class="product-stock-status"><span>In Stock</span></td>
                                    <td class="product-add-to-cart"><span>Added on March 10. 2020</span><a href="cart.html" class="btn">Add to Cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#" class="wishlist-remove"><i class="flaticon-cancel-1"></i></a><a href="shop-details.html"><img src="{{ URL::asset('venam/') }}/img/product/wishlist_thumb03.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <h4><a href="shop-details.html">Woman Lathers Jacket</a></h4>
                                        <p>Cramond Leopard & Pythong Anorak</p>
                                        <span>65% poly, 35% rayon</span>
                                    </td>
                                    <td class="product-price">$ 29.00</td>
                                    <td class="product-quantity">
                                        <div class="cart-plus">
                                            <form action="#">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="2">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span>$ 68.00</span></td>
                                    <td class="product-stock-status"><span>In Stock</span></td>
                                    <td class="product-add-to-cart"><span>Added on March 10. 2020</span><a href="cart.html" class="btn">Add to Cart</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- wishlist-area-end -->

        <!-- limited-offer-area -->
        <section class="limited-offer-area" data-background="{{ URL::asset('venam/') }}/img/bg/limited_offer_bg.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-7">
                        <div class="limited-offer-left">
                            <div class="limited-offer-title">
                                <span class="sub-title">exclusive offer</span>
                                <h2 class="title">Smart Watch Bracelet</h2>
                            </div>
                            <div class="limited-offer-disc">
                                <img src="{{ URL::asset('venam/') }}/img/images/limited_offer_discount.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="limited-offer-action">
                            <a href="#" class="btn">limited time offer</a>
                            <div class="amount-info">
                                <span class="upto">UPTO</span>
                                <span class="amount">$ 50.00</span>
                                <span class="off">OFF</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="limited-overlay-title">Vanam Top Sale 35<span>%</span></h2>
            <div class="limited-overlay-img"><img src="{{ URL::asset('venam/') }}/img/images/limited_offer_img.png" alt=""></div>
        </section>
        <!-- limited-offer-area-end -->

    </main>
    <!-- main-area-end -->

</div>
@push('scripts')

@endpush
