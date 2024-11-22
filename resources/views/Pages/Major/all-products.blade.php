@extends('Front.app')

@section('content')


    <!--================================
        START SEARCH AREA
    =================================-->
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="images/search.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <span>35,270</span> website templates from our creative community</h3>
                            </div>
                            <div class="search__field">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Search your products">
                                        <button class="btn btn--round"style="background-color: #ee69a8"  type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">All Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
    <!--================================
        END SEARCH AREA
    =================================-->



    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                @foreach ($allProducts as $all)
                    <div class="col-lg-4 col-md-6">
                        <!-- start .single-product -->

                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <img src="{{ asset($all->image) }}"style="width: 260px; height:250px;" name="image" alt="Product Image">

                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>{{ $all->name }}</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                    
                                        <p>
                                            <a href="#">{{ $all->category->name }}</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>{{ $all->expdate }}</a>
                                    </li>
                                </ul>

                                <p>{{ $all->description }}</p>
                            </div>
                            <!-- end /.product-desc -->
                            <div class="product-purchase">
                                <div class="price_love">
                                    <span style="color: #8c57bd"> {{ $all->price }} $</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span style="color: #8c57bd" > {{ $all->quantity }}</span>
                                        <span style="color: #8c57bd" class="lnr lnr-cart"></span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                    </div>
                    <!-- end /.col-md-4 -->
                @endforeach


            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12" >
                    {{ $allProducts->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->

    @endsection
