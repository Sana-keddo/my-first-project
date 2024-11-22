@extends('Front.app')


@section('content')


    <!--================================
    START HERO AREA
=================================-->
<section class="hero-area ">
    <div class="bg_image_holder">
        <img src="images/photo_2024-04-30_12-29-00.jpg" alt="background-image">
    </div>
</section>
<!--================================
END HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
    <section class="features section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img  width="290px" height="330px"src="images/travel-size-offer-tout-600x600.webp" alt="feature">
                        </div><br>
                        <div class="feature__desc">
                            <p  style="font-size: 22px;">Let your beauty shine bright with our radiant and long-lasting cosmetics.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img  width="290px" height="330px"src="images/6dee61b09ac04e62058480be099dd103_750.webp" alt="feature">
                        </div><br>
                        <div class="feature__desc">
                            <p style="font-size: 22px;">Embrace elegance and sophistication with our sophisticated makeup products</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img width="250px" height="350px" src="images/photo_2024-04-30_12-28-46.jpg" alt="feature">
                        </div><br>
                        <div class="feature__desc">
                            <p style="font-size: 22px;">Enhance your natural beauty with our high-quality makeup line.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END FEATURE AREA
=================================-->

<!--================================
START FEATURED PRODUCT AREA
=================================-->
<section class="featured-products bgcolor  section--padding">

    <div class="container">
        <div class="row">
            <div class="col-md-12 no0-padding">
                <div class="featured-product-slider prod-slider1">
                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="images/we1.jpg" alt="Featured products">
                            <div class="prod_btn">
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">

                                    <br>
                                </a>
                                <!-- end /.titlebtm -->
                                <p>
                                    <h5>
                                        Our company's products are characterized by high quality and unparalleled reliability<br><br>We take pride in providing high-quality products that perfectly meet the needs of our customers<br><br>Raw materials were carefully selected to ensure the quality and excellent performance of our products
                                    </h5>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end /.featured__single-slider-->

                </div>
            </div>
        </div>
        <!-- end /.featured__preview-img -->
    </div>
    <!-- end /.featured-product-slider -->
</section>
<!--================================
END FEATURED PRODUCT AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
<section class="products section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>
                            <span class="highlighted"style="color: #ee69a8 ">Newest</span> Products
                        </h2>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <!-- start .col-md-4 -->
            @foreach ($newestProducts as $product)
                {{-- @php
                     $img=$product->images->first();
                     $img_name=$img['image'];
                 @endphp --}}
            <div class="col-lg-4 col-md-6">
                <div class="product product--card">
                    <img  src="{{ asset($product->image) }}"style="width: 260px; height:250px;" name="image"  alt="Product Image">
                    <!-- end /.product__thumbnail -->
                    <div class="product-desc">
                        <a href="#" class="product_title">
                            <h4>{{ $product->name }}</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                {{-- <img class="auth-img" src="#" alt="author image"> --}}
                                <p>
                                    <a href="#">{{ $product->category->name }}</a>
                                </p>
                            </li>
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>{{ $product->expdate }}</a>
                            </li>
                        </ul>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="product-purchase">
                        <div class="price_love" >
                            <span style="color: #8c57bd"> {{ $product->price }} $</span>
                        </div>
                        <div class="sell">
                            <p>
                                <span style="color: #8c57bd" > {{ $product->quantity }}</span>
                                <span style="color: #8c57bd" class="lnr lnr-cart"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <!-- start .row -->
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="all-products.html" class="btn btn--lg btn--round">All New Products</a>
                </div>
            </div> --}}
            <!-- end ./col-md-12 -->
        </div>
        {{-- <!-- end /.row -->  {{$products->links()}} --}}
    </div>
    <!-- end /.container -->
</section>
<!--================================
END PRODUCTS AREA
=================================-->


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
<section class="followers-feed section--padding">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>
                            <span class="highlighted"style="color: #ee69a8 ">cheapest</span> Products
                        </h2>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start /.row -->
        <div class="row">

            @foreach ($cheapestProducts as $product)
                {{-- @php
                    $img=$product->images->first();
                    $img_name=$img['image'];
                @endphp --}}
            <div class="col-lg-4 col-md-6">
                <div class="product product--card">
                    <img  src="{{ asset($product->image) }}"style="width: 260px; height:250px;" name="image" alt="Product Image">
                    <!-- end /.product__thumbnail -->
                    <div class="product-desc">
                        <a href="#" class="product_title">
                            <h4>{{ $product->name }}</h4>
                        </a>
                        {{-- {{ asset('storage/img/'.$img_name) }} --}}
                        <ul class="titlebtm">
                            <li>
                                <p>
                                    <a href="#">{{ $product->category->name }}</a>
                                </p>
                            </li>
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>{{ $product->expdate }}</a>
                            </li>
                        </ul>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="product-purchase">
                        <div class="price_love">
                            <span style="color: #8c57bd"> {{ $product->price }} $</span>
                        </div>
                        <div class="sell">
                            <p>
                                <span style="color: #8c57bd"> {{ $product->quantity }}</span>
                                <span style="color: #8c57bd" class="lnr lnr-cart"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end /.row -->
    </div>
    <!-- start /.container -->
</section>
<!--================================
END FOLLOWERS FEED AREA
=================================-->

    <section class="why_choose section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Why Choose
                            <span class="highlighted" style="color: #ee69a8 ">Our Website</span>
                        </h1>
                        <p>Our company's products are characterized by high quality and unparalleled reliability.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">Quality Products</h3>
                            <p>Our quality makeup products are meticulously crafted to enhance your natural beauty, providing a flawless and long-lasting finish that will make you feel confident and radiant.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">Certificates of excellence</h3>
                            <p>Our company has been honored with prestigious awards for excellence in customer service and product quality."
                                - "We are proud recipients of certificates of excellence .</p>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">Fast and Friendly Support</h3>
                            <p>Experience fast and friendly support on our websites, where our dedicated team is always ready to assist you with any inquiries, ensuring a seamless and enjoyable shopping experience..</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END COUNTER UP AREA
=================================-->


<!--================================
START SELL BUY
=================================-->
<section class="proposal-area">

    <!-- start container-fluid -->
    <div class="container-fluid">
        <div class="row">
            <!--here***************-->

            <div class="col-md-12 no-padding">
                <div class="proposal proposal--right">
                    <div class="bg_image_holder">
                        <img src="images/sbg.png" alt="this is magic">
                    </div>
                    <div class="content_above">
                        <div class="proposal__icon">
                            <img src="images/sell.png" alt="Sell icon">
                        </div>
                        <div class="proposal__content ">
                            <h1 class="text--white">Start Shopping Today</h1>
                            <p>
                                <h6 style="color:#ff9dcb" class="text--white">
                                    Add a touch of magic to your look and enjoy fresh skin and an attractive appearance with our luxurious products...
                                 </h6>
                            </p>
                        </div>
                        <a href="#"style="color: #7312cd " class="btn--round btn btn--lg btn--white">Start Shopping</a>
                    </div>
                </div>
                <!-- end /.proposal -->
            </div>
        </div>
    </div>
    <!-- start container-fluid -->
</section>
<!--================================
END SELL BUY
=================================-->

<!--================================
START TESTIMONIAL
=================================-->
<section class="testimonial-area section--padding">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Our
                        <span class="highlighted" style="color: #ee69a8 ">customers</span>
                    </h1>
                    <p>
                        <h6>Our products are unique in their high quality and precise details that distinguish them from others</h6>
                    </p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/testimonials-3.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">sara</h4>

                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>
                                <h6>Your products are wonderful and long-lasting. I cannot do without them. Thank you and good luck always</h6>
                            </p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/trainer-2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">farah</h4>

                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>
                                <h6>I love your products. They give a natural and attractive touch at the same time and make me feel confident and beautiful. Thank you</h6>
                            </p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/hero-bg.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">nour</h4>

                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>
                                <h6>Your products are wonderful and long-lasting. I cannot do without them. Thank you and good luck always</h6>
                            </p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/testimonials-2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">huda</h4>

                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>
                                <h6>I love your products. They give a natural and attractive touch at the same time and make me feel confident and beautiful. Thank you</h6>
                            </p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->
                </div>
                <!-- end /.testimonial_slider -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end container -->
</section>
<!--================================
END TESTIMONIAL
=================================-->



@endsection

