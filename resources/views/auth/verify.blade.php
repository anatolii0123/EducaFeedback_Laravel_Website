<html>
    <head>
         <title>Educa login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-validation.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/page-auth.css">
         <!-- BEGIN: Custom CSS-->
        <!-- <link rel="stylesheet" type="text/css" href="/assets/css/style.css"> -->
         <!-- END: Custom CSS-->
         <style>
             .container-fluid{
                background-image: linear-gradient(to right, #cd1ed9de , #3f51b5);
                width:100%;
                height:1024px;
            }
            /*
            .email-input{
                width:30%;
                height:65px;
                border-radius: 0.357rem;
                background-color:#b19ac5;
                color: #9c27b0;
                border:none!important;
                font-size:30px;
                
            }
            .input-group{
                position: relative;
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
                width: 30%;
                height:65px;
                color:white;
                background-color:#b19ac5;
                color: #9c27b0;
            }
            */
            .start-logo{
                /* margin: auto;
                width: 40%;
                border: 3px solid #73AD21;
                padding: 30px; */
                
            }
          
            .login{
                margin: auto;
                width: 35%;
                /* border: 3px solid #73AD21; */
                padding: 30px;
                color:white;
                text-align:center;

            }  
            h4{
                color:white;
            }
            /*
            .log-btn{
               color: #9c27b0;
                width: 113px;
                border-radius: 15px;
                font-size: 22px;
            }*/
            span{
                color:white;
                font-size:20px;
            } 
            p{
                 font-size:15px;
            }
            .btn-outline-primary {
                color: #9b1170;
                background-color: white;
            }
            ::-webkit-input-placeholder {
                color: #9b1170;
                /* opacity: 1;  */
            }
            ::placeholder {
                 color: #9b1170;
            }
            
            input#login-email.form-control{
                background-color:#b4a7cb;
                color: #9b1170;
                width:80%;
                margin-left:30px;
            }
            input#login-password.form-control.form-control-merge{
                background-color:#b4a7cb;
                color: #9b1170;
            }
            span.input-group-text.cursor-pointer{
                background-color:#b4a7cb;
                color: #9b1170;
            }
            div.modal-content {
                position: relative;
                display: flex;
                flex-direction: column;
                width: 100%;
                height: 270px;
                pointer-events: auto;
                background-color: #4c4cb3;
                background-clip: padding-box;
                /* border: 0 solid rgba(34, 41, 47, 0.2); */
                border-radius: 1.357em;
                outline: 0;
                justify-content: center;
                justify-content: space-evenly;
             }
             div.model-body{
                 margin-top: 50px;
             }
             h2{
                 width:80%;
                 color:white;
                 text-align:center;
             }

        </style>
    </head>
    <body>
        <div class ="container-fluid" style= "height">
            <div class="container">
                <div class="login">
                    <div class="start-logo">
                        <img src="/assets/images/new_logo/EDUCA_logo-12.png" width="500" height="300" >
                    </div>
                    <h4>Reset password</h4>
                    <p>please insert your email and a code will be sent to you</p>
                    <div class="mt-0">
                        <input type="text" class="form-control" id="login-email" name="login-email" 
                        placeholder="Username/Email" aria-describedby="login-email" 
                        tabindex="1" autofocus=""/>
                    </div>
                    <div class="d-flex justify-content-center mt-1">
                        <button type="button" class="btn btn-outline-primary round waves-effect"
                        data-bs-toggle="modal" data-bs-target="#default"><b>Send Code</b></button>
                    </div>
                </div>
            </div>
              <!-- Modal -->
            <div class="modal fade text-start" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2 style="padding-top:50px;padding-left:50px;">Are you sure you want to logout?</h2>
                            <div class="mt-3" style="padding-left:150px;">
                                <button type="button" class="btn-outline-primary" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn-outline-primary" data-bs-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
        
    </body>
    
</html>