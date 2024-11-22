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
                                <a href='/dashboard-categories'>Manage Categories</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Manage Categories</h1>
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
                                <h3>Manage categories</h3>
                            </div>

                            <div class="pull-right">
                                <div class="filter__option filter--text">
                                    <a style="color: #7347c1; font-size: 20px;" href="{{route('dashboard-categories.create')}}"> Insert categories </a>
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
                    <div class="col-md-12">
                        <div class="statement_table table-responsive">

                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>Category ID</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @foreach ($categories as $category)

                                <tbody>
                                    <tr>
                                        <td> #{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('dashboard-categories.edit',$category->id) }}">Edit</a>
                                            <form action="{{ route('dashboard-categories.destroy',$category->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit " class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>

                                @endforeach

                            </table>

                            {{ $categories->links('pagination::bootstrap-4') }}

                        </div>
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
