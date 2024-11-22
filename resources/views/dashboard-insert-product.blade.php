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
                                <a href='/insert-product'>Insert Product</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Insert Product</h1>
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
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Insert Your Product</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{ route('dashboard-products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <div class="select-wrap select-wrap2">

                                            <select name="category_name" id="category" class="text_field">

                                                @foreach ($categories as $category)

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                @endforeach
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    {{-- <select name="category_id">

                                        @foreach($category as $categor)
                                            <option value="{{ $categor->id }}">{{ $categor->name }}</option>
                                        @endforeach
                                    </select> --}}

                                    <div class="form-group">
                                        <label for="product_name">Product Name </label>
                                        <input type="text" id="product_name" name="product_name"  class="text_field" placeholder="Enter your product name here...">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">Product Price
                                        </label>
                                        <input type="text" id="product_name" name="price" class="text_field" placeholder="Enter your product price here...">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">Product Quantity
                                        </label>
                                        <input type="text" id="product_name" name="quantity" class="text_field" placeholder="Enter your product Quantity here...">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">Product Date
                                        </label>
                                        <input type="date" id="product_name" name="expdate" class="text_field" placeholder="Enter your product Date here...">
                                    </div>

                                    <div class="form-group no-margin">
                                        <label for="product_name"> Product Description
                                        </label>
                                        <input type="text" id="product_name" name="description"  class="text_field" placeholder="Enter your product Description here...">
                                        {{-- <div id="trumbowyg-demo"></div> --}}
                                    </div>

                                    <div class="mb-3">
                                        <label> Upload File/Image </label>
                                        <input type="file" name="image" class="form-control">

                                    </div>
                                </div>

                            </div>

                            <!-- submit button -->
                            <button type="submit"  style="background-color: #8c57bd"  class="btn btn--round btn--fullwidth btn--lg">Submit Your Product </button>
                        </form>
                    </div>
                    <!-- end /.col-md-8 -->

                    <div class="col-lg-4 col-md-5">
                        <aside class="sidebar upload_sidebar">

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>More Upload Info</h3>
                                </div>

                                <div class="card_content">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut sceler isque the
                                        mattis, leo quam aliquet congue.</p>
                                    <ul>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->
                        </aside>
                        <!-- end /.sidebar -->
                    </div>
                    <!-- end /.col-md-4 -->
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
