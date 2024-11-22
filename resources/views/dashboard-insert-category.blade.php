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
                                <a href='#'>Insert Categories</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Insert Categories</h1>
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
                                    <h3>insert Your Category</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{ route('dashboard-categories.store') }}" method="post">
                            @csrf

                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Category Name</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category_name">Category Name </label>
                                        <input type="text" id="category_name" name="category_name"  class="text_field" placeholder="Enter your category name here...">
                                    </div>
                                </div>

                            </div>

                            <!-- submit button -->
                            <button type="submit"  style="background-color: #8c57bd" class="btn btn--round btn--fullwidth btn--lg">Submit Your Category </button>
                        </form>
                    </div>
                    <!-- end /.col-md-8 -->
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
