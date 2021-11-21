@extends('layouts.app')

@section('additional_css')
<style>
    th{
        background-color:#aabec5!important;
        font-size:12px!important;
        color:#BA509D;
    }
    .form-select{
        width:190px;
    }
    .content-body{
        padding-left:20px;
        padding-top:10px;
        padding-right:100px;
    }
    .search-edit{
        width:90%;
    }
    .card{
        /* padding-bottom:30px; */
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
                                <h3 class="content-header-title float-start mb-0">Students</h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body" >
                <div class ="row col-12">
                    <div class=" d-flex justify-content-end">
                        <button class ="buttontype1">Add new</button>
                    </div>
                </div>

                <div class ="row mt-1">
                    <div class="card">
                        <div class ="search-edit row mt-1">
                            <div class="d-flex justify-content-around">
                                <div class="d-flex justity-content-center">
                                    <label style="margin-top:11px;">  Name:</label>
                                    <select class="form-select">
                                        <option>XXXX</option>
                                        <option>YYYY</option>
                                    </select>   
                                </div>
                                
                                <div class=" d-flex justity-content-center">
                                    <label style="margin-top:11px;">S Date: </label> 
                                    <select class="form-select">
                                        <option></option>
                                        <option>show</option>
                                    </select>   
                                </div>
                                <div class=" d-flex justity-content-center">
                                    <label style="margin-top:11px;">F Date: </label> 
                                    <select class="form-select">
                                        <option>Beginner MA01Dx</option>
                                        <option></option>
                                    </select>   
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-around mt-1">
                                <div class="d-flex justity-content-center">
                                    <label style="margin-top:11px;">  Email:</label>
                                    <select class="form-select">
                                        <option>XXXX</option>
                                        <option>YYYY</option>
                                    </select>   
                                </div>
                                
                                <div class=" d-flex justity-content-center">
                                    <label style="margin-top:11px;">Status: </label> 
                                    <select class="form-select">
                                        <option></option>
                                        <option>show</option>
                                    </select>   
                                </div>
                                <div class=" d-flex justity-content-center">
                                    <label style="margin-top:11px;">Class: </label> 
                                    <select class="form-select">
                                        <option>Beginner MA01Dx</option>
                                        <option></option>
                                    </select>   
                                </div>
                            </div>
                            <div class="col-8 d-flex justify-content-around mt-1" >
                                <div class="d-flex justity-content-center">
                                    <label style="margin-top:11px;">  Class:</label>
                                    <select class="form-select">
                                        <option>XXXX</option>
                                        <option>YYYY</option>
                                    </select>   
                                </div>
                                
                                <div class=" d-flex justity-content-center">
                                    <label style="margin-top:11px;">Class: </label> 
                                    <select class="form-select">
                                        <option></option>
                                        <option>show</option>
                                    </select>   
                                </div>
                              
                            </div>

                        </div>
                        
                        <div class= "row col-12"  > 
                            <div class="d-flex justify-content-end">
                                <button class="btn-main buttontype1">Search</button>
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>

                <section id="dashboard-ecommerce" >
                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Tuition Start</th>
                                                    <th>Tuition Finish</th>
                                                    <th>Class</th>
                                                    <th>Status</th>
                                                    <th>Average</th>
                                                    <th>Score</th>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
                                                    <td>QT1A1</td>
                                                    <td>Active</td>
                                                    <td>94%</td>
                                                    <td>37</td>
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
    <!-- END: Content-->

@endsection

@section('additional_js')

@endsection
