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
                    <h1 class="page-title">User's Accounts</h1>
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
    <section class="dashboard-area dashboard_purchase">
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
                        <div class="modules__content">
                            <div class="table_module">
                                <div class="table_header">
                                    <h3> Users Accounts</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>username</th>
                                                <th>password</th>
                                                <th>usertype</th>
                                                <th>email</th>
                                            </tr>
                                        </thead>

                                        @foreach ($users as $user)

                                        {{-- <tbody>
                                            <tr>
                                                <td>
                                                    <a href="{{ route('dashboard-categories.edit',$category->id) }}">Edit</a>
                                                    <form action="{{ route('dashboard-categories.destroy',$category->id) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit " class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody> --}}

                                        <tbody>
                                            <tr>
                                                <td>#{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->password }}</td>
                                                <td>{{ $user->usertype }}</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                        </tbody>

                                        @endforeach

                                    </table>

                                    {{ $users->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
</x-app-layout>

