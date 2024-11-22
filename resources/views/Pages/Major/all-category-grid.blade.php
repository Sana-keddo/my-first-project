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
                                        <input class="relative-field rounded" type="text" placeholder="Search your Categories">
                                        <button class="btn btn--round" style="background-color: #ee69a8" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">All Categories</a>
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
    <section class="products section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="statement_table table-responsive">

                        <table class="table">

                            <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>

                            @foreach ($allCategoryies as $allcat)

                            <tbody>
                                <tr>
                                    <td> #{{ $allcat->id }}</td>
                                    <td>{{ $allcat->name }}</td>

                                </tr>

                            </tbody>

                            @endforeach



                        </table>


                        {{ $allCategoryies->links('pagination::bootstrap-4') }}

                    </div>

                </div>
            </div>
            <!-- end /.row -->

        </div>

    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->

    @endsection
