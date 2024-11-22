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
                    <h1 class="page-title">Edit Categories</h1>
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
                                    <h3>Edit Your Category</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{ route('dashboard-categories.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">

                                    <div class="form-group">
                                        <label for="category_name"> Category Name </label>
                                        <input type="text" id="category_name" name="category_name" value="{{ $category->name }}" class="text_field">
                                    </div>

                                </div>

                                </div>
                            </div>
                            <!-- submit button -->
                            <button type="submit"  style="background-color: #8c57bd;     width: 66%;"  class="btn btn--round btn--fullwidth btn--lg">Submit Your category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
</x-app-layout>
