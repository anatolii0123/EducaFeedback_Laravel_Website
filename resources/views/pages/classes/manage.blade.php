@extends('layouts.app')

@section('additional_css')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<style>
    th{
       background-color:#aabec5!important;
       font-size:20px!important;
    }

</style>
@endsection

@section('contents')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow">
    </div>
    <div class="content-wrapper container-xxl p-0 pt-2 pb-2">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-3">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <span>
                            <h3 class="content-header-title float-start mb-0">Classes</h3>
                            <h3 class="content-header-title float-start mb-0"> > </h3>
                            <h3 class="content-header-title float-start mb-0">Manage</h3>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class ="">
        <div class="content-body">
            <div class ="row">
                <!-- Basic -->
                <div class="col-md-6 mb-1 d-flex justify-content-start" >
                    <!-- <h5>Class:</h5> -->
                    <!-- <select class="select2 form-select" id="select2-basic" width="40px;">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                    </select> -->
                    <!-- <span  style="width: 59px; font-size: 17px; margin-top: 5px;" ><b>Class:</b></span> -->
                    <select class="form-select" id="basicSelect" style="height:50px">
                        <option>Biginner-MA01DX</option>
                        <option>Blade Runner</option>
                        <option>Thor Ragnarok</option>
                    </select>
                    <a href="/classes/manage/edit" class="btn waves-effect waves-float waves-light buttontype1">edit</a>
                    <a href="/classes/manage/new_class" class="btn waves-effect waves-float waves-light buttontype1">delete</a>
                    
                </div>
                <div class="col-md-6 addnew-div">
                    <a  class="addbtn-manage btn waves-effect waves-float waves-light buttontype1" href="/classes/manage/new_class" >add new class
                    </a>
                </div>


            </div>
            <section id="dashboard-ecommerce" class="mt-3">
                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead >
                                            <tr >
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Tuition Start</th>
                                                <th>Tuition Finish</th>
                                                <th>Recent Score</th>
                                                <th>Average Score</th>
                                                <th></th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">Kevin Cardoso</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>kevin@seda.ie</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>         
                                               <td>QT1A1-48%</td>
                                                <td>56%</td>  
                                                <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='folder-plus'></i></td>

                                            </tr>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">Kevin Cardoso</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>kevin@seda.ie</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>         
                                               <td>QT1A1-48%</td>
                                                <td>56%</td>  
                                                <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='folder-plus'></i></td>

                                            </tr>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">Kevin Cardoso</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>kevin@seda.ie</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>         
                                                <td>QT1A1-48%</td>
                                                <td>56%</td>  
                                                <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='folder-plus'></i></td>

                                            </tr>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">Kevin Cardoso</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>kevin@seda.ie</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>         
                                               <td>QT1A1-48%</td>
                                                <td>56%</td>  
                                                <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='folder-plus'></i></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">Kevin Cardoso</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>kevin@seda.ie</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>         
                                                <td>QT1A1-78%</td>
                                                <td>94%</td>
                                                <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='folder-plus'></i></td>

                                            </tr>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">Kevin Cardoso</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>kevin@seda.ie</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">01/01/2021</span>
                                                    </div>
                                                </td>         
                                                <td>QT1A1-48%</td>
                                                <td>56%</td>    
                                                <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='folder-plus'></i></td>

                                            </tr>
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->

                </div>
            </section>

        </div>
    </div>
</div>

@endsection

@section('additional_js')

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/forms/form-select2.js"></script>
    <!-- END: Page JS-->
@endsection
