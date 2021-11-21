@extends('layouts.app')

@section('additional_css')

<style>
    input{
        margin: 0;
        background-color: #91C9C1;
        border-width: none;
        border-radius:13px;
        border-style: none;
        border-color: none;
        color: #6e6b7b;
        height:35px;
    }
    .round-bar{
        width:67%;
        height:36px;
        background-color:#9a9ad5;
        margin-left:20px;
        border-radius:9px;
        display: flex;
        flex-direction:row;
        padding:10px;
        align-items:stretch;
    }
    .checked_rect{
        width:15px;
        height:15px;
        background-color:purple;
        border:none;
    }
    
    .blanked_rect{
        width:15px;
        height:15px;
        border-width:3px;
        background-color:white;
        border-color:red!important;
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
                            <h3 class="content-header-title float-start mb-0">Tests</h3>
                            <h3 class="content-header-title float-start mb-0">Add New Test</h3>
                        </span>
                    </div>
                </div>
                <div class ="col-12 d-flex justify-content-end mt-1">
                    <button class="buttontype1" style="width:250px;">Save and Add</button>
                </div>
            </div>
        </div> 
    <!-- start tthe content -->
        <div class="row col-12 d-flex flex-row">
            <div class="col-2">
                <label >Test Name:</label>
            </div>
            <div class="col-3">
                <input type="text" class="black-sel"/>
            </div>
        </div>
        <div class="row col-12 d-flex flex-row">
            <div class="col-2">
                <label class ="mt-2">Category:</label>
            </div>
            <div class="col-3">
                <select class="black-sel mt-1">
                    <option>Biginner-MA01DX</option>
                    <option>Blade Runner</option>
                    <option>Thor Ragnarok</option>
                </select>
            </div>

        </div>
        <div class="mt-1" style="padding-left:4px;">
            <button type ="text" class ="buttontype1">Add section</button>
        </div>

        <div class="row col-12 d-flex flex-row mt-1">
            <div class="col-2">
                <label >Section Name:</label>
            </div>
            <div class="col-3">
                <input type="text" class="black-sel" value="Grammer"/>
            </div>
        </div>
        <div class="mt-1">
            <button type ="text" class ="buttontype1">Add Topic</button>
        </div>
        <!-- Topic start -->
        <br/>
        <div class ="card">
            <div class="row d-flex justify-content-start">
                <div class ="col-2 mt-1" >
                    <label style= "padding-left:14px; padding-top:10px;">Topic name:</label>
                </div>
                <div class="col-4">
                    <select class="black-sel mt-1">
                        <option>Biginner-MA01DX</option>
                        <option>Blade Runner</option>
                        <option>Thor Ragnarok</option>
                    </select>
                </div>
            </div>
            <div style="padding-left:25px;">
                <div class="row mt-1">
                    <div class="col-2">
                        <button type = "text" class ="buttontype1">Add Question </button>
                    </div>
                </div>
              <!-- card  part1-->
                <div class="row mt-1">
                    <div class ="col-3">
                        <select class="black-sel mt-1" >
                            <option>Multiple choice</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex justify-content-end" style="padding-left:70px; padding-top:10px;">
                        <div class="row d-flex justify-content-start" >
                            <div class="col-2">
                                <input type="text" class="black-sel"/>
                            </div>
                            <div class="col-5" style="padding-top:8px;">
                                <span>points</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="padding-top:9px;">
                        <button class="buttontype1">Add Media</button>
                    </div>
                </div>
              
                <div class="row d-flex justify-content-around mt-1">
                    <div class="card col-8" style="background-color:#9a9ad5;">
                        <span class="scrip-span">Bold Italic Font size Font Color</span><br>
                        <p style="width:45%;">
                            1.complete the sentence
                            karl_____________________ Remote next year.
                        </p>
                    </div>
                    <div class="card col-3" style="background-color:#9a9ad5;padding:15px;">
                        <img src="/educa/Asset 12-8.png" alt="this is xxx">

                    </div>
                </div>
                <!-- Altermative -->
                <div class="row mt-1">
                    <div class="col-2">
                       <span class="scrip-span">Altermative</span>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="checked_rect"></div>
                         <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                
                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="blanked_rect"></div>
                        <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="blanked_rect"></div>
                        <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="blanked_rect"></div>
                        <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                <!-- card part2 -->
                <div class="row mt-1">
                    <div class ="col-3">
                        <select class="black-sel mt-1" >
                            <option>Multiple choice</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex justify-content-end" style="padding-left:70px; padding-top:10px;">
                        <div class="row d-flex justify-content-start" >
                            <div class="col-2">
                                <input type="text" class="black-sel"/>
                            </div>
                            <div class="col-5" style="padding-top:8px;">
                                <span>points</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="padding-top:9px;">
                        <button class="buttontype1">Add Media</button>
                    </div>
                </div>
              
                <div class="row d-flex justify-content-around mt-1">
                    <div class="card col-8" style="background-color:#9a9ad5;">
                        <span class="scrip-span">Bold Italic Font size Font Color</span><br>
                        <p style="width:45%;">
                             2.Listen the audio complete
                             karl_____________________ Remote next year.
                        </p>
                    </div>
                    <div class="card col-3" style="background-color:#9a9ad5;padding:15px;">
                        <img src="/educa/Asset 17-8.png" alt="this is xxx">

                    </div>
                </div>
                <!-- Type the Altermative -->
                <div class="row mt-1">
                    <div class="col-2">
                       <span class="scrip-span">Type the Altermative</span>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="checked_rect"></div>
                         <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                
                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="blanked_rect"></div>
                        <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="blanked_rect"></div>
                        <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="round-bar">
                        <div class="blanked_rect"></div>
                        <span style="flex-grow:2">is going to</span>
                    </div>
                </div>
                 <br/>
            </div>
        </div>      
    </div>
</div>


@endsection

@section('additional_js')

@endsection
