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
                        </ul>
                    </div>
                    <h1 class="page-title">Edit Products</h1>
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
        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Edit Your Product</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{ route('dashboard-products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">

                                    <div class="form-group">
                                        <label for="product_name"> Product Name </label>
                                        <input type="text" id="product_name" name="product_name" value="{{ $product->name }}" class="text_field">
                                    </div>


                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <div class="select-wrap select-wrap2">

                                            <select name="category_name" id="category" class="text_field">

                                                @foreach ($categories as $category)

                                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected': ' '}}>{{ $category->name }}</option>

                                                @endforeach
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_price">Product Price
                                        </label>
                                        <input type="text" id="product_price" name=" price" value="{{ $product->price }}" class="text_field">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_quantity">Product Quantity
                                        </label>
                                        <input type="text" id="product_quantity" name="quantity" value="{{ $product->quantity }}" class="text_field">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_expdate">Product Date
                                        </label>
                                        <input type="date" id="product_expdate" name="expdate" value="{{ $product->expdate }}" class="text_field">
                                    </div>

                                    <div class="form-group no-margin">
                                        <label for="product_description"> Product Description
                                        </label>
                                        <input type="text" id="product_description" name="description"value="{{ $product->description }}"  class="text_field">
                                        {{-- <div id="trumbowyg-demo"></div> --}}
                                    </div>

                                    <div class="mb-3">
                                        <label> Upload File/Image </label>
                                        <input type="file" name="image" class="form-control">

                                    </div>
                                </div>

                                {{-- <div class="upload_modules module--upload">
                                    <div class="modules__title">
                                        <h3>Upload Images</h3>
                                    </div>
                                    <div class="modules__content">
                                        <div class="form-group">
                                            <div class="upload_wrapper">
                                                <div class="custom_upload">
                                                    <label for="thumbnail">
                                                        <input type="file" id="thumbnail" name="image" class="form-control">
                                                        <span class="btn btn--round btn--sm">Choose File</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>

                            <!-- submit button -->
                            <button type="submit"  style="background-color: #8c57bd"  class="btn btn--round btn--fullwidth btn--lg">Submit Your product</button>
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

