@extends('layouts.app')

@section('additional_css')
    <style>
        .card-class, .card-class .card-body{
            background-color: #5828ad;;
            border-radius: 0.428rem;
        }
        .card-class h2{
            color: #FFFFFF;
            font-weight:bolder;
        }
        .card-class h5{
            color: #FFFFFF;
        }
    </style>
@endsection

@section('contents')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0 pt-2 pb-2">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-3">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <span>
                                <h3 class="content-header-title float-start mb-0">Classes</h3>
                                <h3 class="content-header-title float-start mb-0"> > </h3>
                                <h3 class="content-header-title float-start mb-0">Overview</h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Begineer</h2>
                                    <h5 class="mb-75 mt-1 pt-20">MA01DX</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">54% Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Begineer</h2>
                                    <h5 class="mb-75 mt-1 pt-20">AA01DY</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">15 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">85% Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Elementary</h2>
                                    <h5 class="mb-75 mt-1 pt-20">MA02FG</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">41 % Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Pre-Intermediate</h2>
                                    <h5 class="mb-75 mt-1 pt-20">MA01DX   </h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">89% Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Intermediate</h2>
                                    <h5 class="mb-75 mt-1 pt-20">MA01DX</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">97 % Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>IELTS </h2>
                                    <h5 class="mb-75 mt-1 pt-20">MB11DX</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">36% Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Upper</h2>
                                    <h5 class="mb-75 mt-1 pt-20">MA01DX</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">79% Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->

                        <!-- School Card -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-class">
                                <div class="card-body">
                                    <h2>Advanced</h2>
                                    <h5 class="mb-75 mt-1 pt-20">MA01DX</h5>
                                    <br />
                                    <h5 class="mb-75 mt-1 pt-0">21 Students</h5>
                                    <h5 class="mb-75 mt-1 pt-0">83% Learning Average</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ School Card -->


                    </div>
                </section>
                
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection

@section('additional_js')

@endsection
