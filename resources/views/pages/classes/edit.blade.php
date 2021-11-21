@extends('layouts.app')

@section('additional_css')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<style>
    
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
                        <h3 class="content-header-title float-start mb-0">Classes</h3>
                        <h3 class="content-header-title float-start mb-0"> >-Manages </h3>
                        <h3 class="content-header-title float-start mb-0">-Add New Class</h3>
                    </span>
                </div>
            </div>
        </div>
    </div>
     <!-- start tthe content -->
     <div class = "row mt-2 ml-1">
        <div class = "col-7 d-flex justify-content-start">
            <div class ="d-flex justify-content-start" style=" width:45%;">
                <label style="width:200px; margin-top:11px; color:#eb16db; ">Class name:</label>
                <input type="text" class =" form-control" ></input>
            </div>
            <div class ="d-flex justify-content-start" style="width:45%; margin-left:15px;">
                <label  style="width:200px; margin-top:11px; color:#eb16db;" >Class code:</label>
                <input type="text" class=" form-control" ></input>
            </div>
        </div>
    </div>   

    <div class ="row mt-1">
        <label>Assessments</label>
        <div class ="card assessments"  style ="max-width:50%; padding:25px;" >
            <div class ="row">
                <div class="d-flex justify-content-around">
                    <div class="add-new d-flex justify-contnet-start">
                        <label style="margin-top:11px;">  Add new:</label>
                        <select class="form-select"  style="width:233px;">
                            <option>Biginner-MA01DX</option>
                            <option>Blade Runner</option>
                            <option>Thor Ragnarok</option>
                        </select>   
                    </div>
                    
                    <div class="Visiblity d-flex justify-content-start ">
                        <label style="margin-top:11px;">Visiblity: </label> 
                        <select class="form-select"  style="width:100px;">
                            <option>Hidden</option>
                            <option>show</option>
                        </select>   
                    </div>
                </div>
            </div>
            <div class ="row mt-2" >
                <div class="d-flex justify-content-around">
                    <div class="add-new d-flex justify-contnet-start">
                        <label style="margin-top:11px;">Avaliable from:</label>
                        <select class="form-select"  style="width:195px;">
                            <option>08/05/2021 -9 am</option>
                            <option>08/05/2021 -9 am</option>
                        </select>   
                    </div>
                    
                    <div class="add-new d-flex  justify-content-around">
                        <label style="margin-top:11px;" >To:</label>
                        <select class="form-select"  style="width:170px;">
                            <option>08/05/2021 -9 am</option>
                            <option>08/05/2021 -9 am</option>
                        </select>   
                    </div>
                </div>
            </div>
            <!-- Duration part -->
            <div class="row mt-1 col-6">
                <div class="d-flex justify-content-around" style ="padding-bottom:20px;" >
                    <label style="padding-top:2px;font-size:20px">Duration:</label>
                    <input type ="text" class="form-control" style =" width:20px;"></input> 
                    <span style="padding-top:2px;font-size:20px">Minutes</span>    
                </div>
            </div>
            <div class= "row col-12 "  style="display:flex; justify-content: flex-end"> 
                <button class="buttontype1" style="width:250px;">Save and Add</button>
            </div>
        </div>
        <div class= "row col-12 mt-1"  style="display:flex; justify-content: flex-start"> 
            <button class="buttontype1" style="width:150px;">Add new</button>
        </div>
    </div>

    
    <div class ="row mt-1">
        <label>Exercises</label>
        <div class ="card assessments"  style ="max-width:50%; padding:25px;" >
            <div class ="row">
                <div class="d-flex justify-content-around">
                    <div class="add-new d-flex justify-contnet-start">
                        <label style="margin-top:11px;">  Add new:</label>
                        <select class="form-select"  style="width:233px;">
                            <option>Biginner-MA01DX</option>
                            <option>Blade Runner</option>
                            <option>Thor Ragnarok</option>
                        </select>   
                    </div>
                    
                    <div class="Visiblity d-flex justify-content-start ">
                        <label style="margin-top:11px;"> Visiblity: </label>
                        <select class="form-select"  style="width:100px;">
                            <option>Hidden</option>
                            <option>show</option>
                        </select>   
                    </div>
                </div>
            </div>

            
            <div class ="row mt-2" >
                <div class="d-flex justify-content-around">
                    <div class="add-new d-flex justify-contnet-start">
                        <label style="margin-top:11px;">Avaliable from:</label>
                        <select class="form-select"  style="width:195px;">
                            <option>08/05/2021 -9 am</option>
                            <option>08/05/2021 -9 am</option>
                        </select>   
                    </div>
                    
                    <div class="add-new d-flex  justify-content-around">
                        <label style="margin-top:11px;" >To:</label>
                        <select class="form-select"  style="width:170px;">
                            <option>08/05/2021 -9 am</option>
                            <option>08/05/2021 -9 am</option>
                        </select>   
                    </div>
                </div>
            </div>
            <div class="row mt-1 col-6">
                <div class="d-flex justify-content-around" style ="padding-bottom:20px;" >
                    <label style="padding-top:2px;font-size:20px">Duration:</label>
                    <input type ="text" class="form-control" style =" width:20px;"></input> 
                    <span style="padding-top:2px;font-size:20px">Minutes</span>     
                </div>
            </div>
            <div class= "row col-12 "  style="display:flex; justify-content: flex-end"> 
                <button class="buttontype1" style="width:250px;">Save and Add</button>
            </div>
        </div>
        <div class= "row col-12 mt-1"  style="display:flex; justify-content: flex-start"> 
            <button class="buttontype1" style="width:150px;" href="/classes/manage/new_class">Add new</button>
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
