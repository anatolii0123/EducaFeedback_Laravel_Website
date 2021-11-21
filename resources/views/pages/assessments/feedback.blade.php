@extends('layouts.app')

@section('additional_css')
<style>
     th{
       background-color:#aabec5!important;
       /* font-size:12px!important; */
    }
    div.card-body.p-0{
        border-radius:8px;
    }
</style>
@endsection

@section('contents')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow">
    </div>
    <div class="content-wrapper container-xxl p-0 pt-2 pb-2" style="margin-left:12px;">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-3">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <span>
                            <h3 class="content-header-title float-start mb-0">Assessments</h3>
                            <h3 class="content-header-title float-start mb-0"> - </h3>
                            <h3 class="content-header-title float-start mb-0">Feedback</h3>
                            <h3 class="content-header-title float-start mb-0"> - </h3>
                            <h3 class="content-header-title float-start mb-0">Question Back</h3>
                        </span>
                    </div>
                </div>
            </div>
        </div> 
    <!-- start tthe content -->
        <div class ="row mt-1 ">
            <div class="d-flex justify-content-start col-8">
                <div class="col-10 mt-1 d-flex" style="padding-top:3px;">
                    <h1><label > Category:</label></h1>
                    <div style="margin-left:10px;">
                        <select class="black-sel" style="width:250px;height:50px">
                            <option>Biginner-MA01DX</option>
                            <option>Blade Runner</option>
                            <option>Thor Ragnarok</option>
                        </select>   
                    </div>
                </div>
                <div class= "col-2 mt-1"  style="display:flex; justify-content: flex-end"> 
                    <a class="buttontype2" type="button" href="/assessments/tests/new_test">Add new</a>
                </div>
            </div>
        </div>
        <section id="dashboard-ecommerce" class="mt-2">
            <div class="row match-height">
                <div class="col-lg-12 col-12">
                    <div class="card card-company-table col-8">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Catergory</th>
                                            <th>Topic</th>
                                            <th></th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="align-items-center">
                                                    <div>
                                                        <div class="fw-bolder">Kevin Cardoso</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td>past simple</td>
                                            <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='x'></i></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="align-items-center">
                                                    <div>
                                                        <div class="fw-bolder">Kevin Cardoso</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td>past simple</td>
                                            <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='x'></i></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="align-items-center">
                                                    <div>
                                                        <div class="fw-bolder">Kevin Cardoso</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td>past simple</td>
                                            <td class="ficon-td"><i class="ficon" data-feather="eye"></i><i data-feather='x'></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br/><br/><br/><br/><br/><br/>
        <div class="col-12">
            <span>
                <h1 class="float-start mb-0"><label>Categories</label></h1>
            </span>
            <div class= "col-2 mt-1"  style="display:flex; justify-content: flex-end"> 
                <button class="buttontype1">Add new</button>
            </div>
        </div>
        <section id="dashboard-ecommerce" class="mt-3">
                <div class="col-lg-12 col-12">
                    <div class="card card-company-table col-3">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td class="ficon-td"><i class="ficon" data-feather="pen-tool"></i><i data-feather='x'></i></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td class="ficon-td"><i class="ficon" data-feather="pen-tool"></i><i data-feather='x'></i></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td class="ficon-td"><i class="ficon" data-feather="pen-tool"></i><i data-feather='x'></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <br/><br/><br/>
        <div class="col-12">
            <span>
            <h1 class="float-start mb-0"><label>Topics</label></h1>
            </span>
                <div class= "col-2 mt-1"  style="display:flex; justify-content: flex-end"> 
                <button class="buttontype1">Add new</button>
            </div>
        </div>
        <section id="dashboard-ecommerce" class="mt-2">
            <div class="row match-height">
                <div class="col-lg-12 col-12">
                    <div class="card card-company-table col-3">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td class="ficon-td"><i class="ficon" data-feather="pen-tool"></i><i data-feather='x'></i></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td class="ficon-td"><i class="ficon" data-feather="pen-tool"></i><i data-feather='x'></i></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span>Category1</span>
                                                </div>
                                            </td>
                                            <td class="ficon-td"><i class="ficon" data-feather="pen-tool"></i><i data-feather='x'></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection

@section('additional_js')

@endsection
