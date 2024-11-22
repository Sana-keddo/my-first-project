@extends('back.app')

<x-app-layout>


    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <a href='/dashboard-products'>Manage Products</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Manage Products</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li class="active">
                                <a href="{{route('dashboard')}}">
                                    <span class="lnr lnr-home"></span>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('user-dashboard')}}">
                                    <span class="lnr lnr-cog"></span>Accounts</a>
                            </li>
                            <li>
                                <a href='/dashboard-products'>
                                    <span class="lnr lnr-briefcase"></span>Manage Products</a>
                            </li>
                            <li><a href='/dashboard-categories'>

                                    <span class="lnr lnr-briefcase"></span>Manage categories</a>
                            </li>

                            {{-- <li>
                                <a href="{{route('dashboard-products.create')}}">
                                    <span class="lnr lnr-upload"></span>Insert Products</a>
                            </li>

                            <li>
                                 <a href="{{route('dashboard-category.create')}}">
                                    <span class="lnr lnr-upload"></span>Insert categories</a>
                            </li> --}}

                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-bar dashboard_title_area clearfix filter-bar2">
                            <div class="dashboard__title dashboard__title pull-left">
                                <h3>Manage Products</h3>
                            </div>

                            <div class="pull-right">
                                <div class="filter__option filter--text">
                                    <a style="color: #7347c1; font-size: 20px;" href="{{route('dashboard-products.create')}}"> Insert Products </a>
                                </div>
                            </div>
                            <!-- end /.pull-right -->
                        </div>
                        <!-- end /.filter-bar -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <!-- start .col-md-4 -->

                    @foreach ($products as $product)

                        <div class="col-lg-4 col-md-6">
                            <!-- start .single-product -->
                            <div class="prod_option">
                                <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="lnr lnr-cog setting-icon"></span>
                                </a>

                                <div class="options dropdown-menu" aria-labelledby="drop2">
                                    <ul>
                                        <li>
                                            <a href="{{route('dashboard-products.edit',$product->id)}}">
                                                <span class="lnr lnr-pencil"></span> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('dashboard-products.destroy',$product->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit "class="lnr lnr-trash">Delete</button>
                                            </form>

                                            {{-- <a href="#" data-toggle="modal" data-target="#myModal2" class="delete">
                                                <span class="lnr lnr-trash"></span>Delete</a> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{ asset($product->image) }}" style="width: 260px; height:250px;"  alt="Product Image">

                                    {{-- <div class="prod_option">
                                        <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="lnr lnr-cog setting-icon"></span>
                                        </a>

                                        <div class="options dropdown-menu" aria-labelledby="drop2">
                                            <ul>
                                                <li>
                                                    <a href="edit-item.html">
                                                        <span class="lnr lnr-pencil"></span>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="lnr lnr-eye"></span>Hide</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal2" class="delete">
                                                        <span class="lnr lnr-trash"></span>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>{{ $product->name }}</h4>
                                    </a>
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
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span> {{ $product->price }} $</span>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span> {{ $product->quantity }}</span>
                                            <span class="lnr lnr-cart"></span>
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
                <div class="row">
                    <div class="col-md-12" >
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
</x-app-layout>
