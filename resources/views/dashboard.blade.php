@extends('back.app')

<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

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
                    <h1 class="page-title">Admin Dashboard</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

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
                    <div class="col-lg-3 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg4">
                            <p>Total Items</p>
                            <h3>4,369</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-3 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg2">
                            <p>Monthly Sales</p>
                            <h3>$273.00</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-3 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg3">
                            <p>Yearly Sales</p>
                            <h3>$2,249.00</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-3 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg1">
                            <p>Lifetime Sales</p>
                            <h3>$5,583.00</h3>
                        </div>
                    </div>

                    <!-- end /.col-md-3 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>

</x-app-layout>

