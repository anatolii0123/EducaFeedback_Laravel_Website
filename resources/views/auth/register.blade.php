
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8" />
	<title>Welcome to OT</title>
	<meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="./assets/css/pages/login/classic/login-479e8.css?v=7.0.3" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="./assets/plugins/global/plugins.bundle79e8.css?v=7.0.3" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/custom/prismjs/prismjs.bundle79e8.css?v=7.0.3" rel="stylesheet" type="text/css" />
	<link href="./assets/css/style.bundle79e8.css?v=7.0.3" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="https://keenthemes.com/metronic/themes/metronic/theme/html/demo2/distassets/media/logos/favicon.ico" />
	<link href="/assets/css/myStyle.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/css/newcss.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/css/front-end.css" rel="stylesheet" type="text/css"/>
    
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background: white;" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<div class="back-to-top" style="display: none;">
		<span class="back-top"><i class="fa fa-angle-up"></i></span>
	</div>
	<div class="elementor-background-overlay"></div>
	<div class="preloader-wrapper" id="preloader" style="display: none;">
		<div class="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
	</div>
	<div id="alert"></div>
    <div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat bg-back-logo" style="background-image: url('./assets/logos/header-bg.png');">
				<div class="login-form text-center p-20 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-2">
						<a href="#">
							<img src="./assets/logos/LOOGO-1024x322.png" class="max-h-100px" alt="" />
						</a>
					</div>
					<h2 class="elementor-heading-title elementor-size-default mb-5">SIGN UP</h2>
					<!--end::Login Header-->
                    <!--begin::Login Sign up form-->
					<div class="login-signup signupinfo">
						<form class="form" id="login_signup_form" action="{{ URL::to('signup') }}" method="POST">
							@csrf
							<input name="checkthisonlyadd" style="display: none;" value="true" />
                            <div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Username" name="username" required />
							</div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" required />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" required />
                            </div>
                            {{-- communities --}}
                            <div class="form-group mb-5 communities">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administration</button>
                                    <input id="communities" style="display: none;" value="1" name="community_id">
                                    @php $numCount = 1; @endphp
                                    <div class="dropdown-menu">
                                        @php $options = DB::table('communities')->get('name'); @endphp
                                        @foreach ($options as $option)
                                            <a class="dropdown-item" type="{{ $numCount++ }}" href="#">{{$option->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Name" name="name" required />
							</div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" required />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Position" name="position" required />
                            </div>
                            <div class="form-group mb-5 edits">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">No Edits</button>
                                    <input id="Edit" style="display: none;" value="0" name="leveledit">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" type="0" href="#">No Edits</a>
                                        <a class="dropdown-item" type="1" href="#">Edit Non-Locked</a>
                                        <a class="dropdown-item" type="2" href="#">Edit Local Locked</a>
                                        <a class="dropdown-item" type="3" href="#">Edit Any</a>
                                        <a class="dropdown-item" type="4" href="#">Edit Any (root)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5 reports">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">No Reports</button>
                                    <input id="Reports" style="display: none;" value="0" name="levelreport">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" type="0" href="#">No Reports</a>
                                        <a class="dropdown-item" type="1" href="#">Local Reports</a>
                                        <a class="dropdown-item" type="2" href="#">Any Location</a>
                                        <a class="dropdown-item" type="3" href="#">Any Location (root)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5 companyReports">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">No Company Reports</button>
                                    <input id="Company" style="display: none;" value="0" name="levelcompany">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" type="0" href="#">No Company Reports</a>
                                        <a class="dropdown-item" type="1" href="#">Local Reports Only</a>
                                        <a class="dropdown-item" type="2" href="#">Company Wide</a>
                                        <a class="dropdown-item" type="3" href="#">All Reports (root)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-5 role">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">No User Administration</button>
                                    <input id="Administration" style="display: none;" value="0" name="leveluser">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" type="0" href="#">No User Administration</a>
                                        <a class="dropdown-item" type="1" href="#">Local User Only</a>
                                        <a class="dropdown-item" type="2" href="#">All Locations</a>
                                        <a class="dropdown-item" type="3" href="#">All Locations (root)</a>
                                    </div>
                                </div>
                            </div>
							<div class="form-group d-flex flex-wrap flex-center mt-10">
								<button id="kt_login_signup_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
								<button id="kt_login_signup_cancel" type="button" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
							</div>
						</form>
                    </div>
					<!--end::Login Sign up form-->
				</div>
			</div>
		</div>
		<!--end::Login-->
    </div>
	<!--end::Main-->
	{{-- <script>
		var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
	</script> --}}
    <!--begin::Global Config(global config for global JS scripts)-->

	<script>
		var KTAppSettings = {
		    "breakpoints": {
		        "sm": 576,
		        "md": 768,
		        "lg": 992,
		        "xl": 1200,
		        "xxl": 1200
		    },
		    "colors": {
		        "theme": {
		            "base": {
		                "white": "#ffffff",
		                "primary": "#6993FF",
		                "secondary": "#E5EAEE",
		                "success": "#1BC5BD",
		                "info": "#8950FC",
		                "warning": "#FFA800",
		                "danger": "#F64E60",
		                "light": "#F3F6F9",
		                "dark": "#212121"
		            },
		            "light": {
		                "white": "#ffffff",
		                "primary": "#E1E9FF",
		                "secondary": "#ECF0F3",
		                "success": "#C9F7F5",
		                "info": "#EEE5FF",
		                "warning": "#FFF4DE",
		                "danger": "#FFE2E5",
		                "light": "#F3F6F9",
		                "dark": "#D6D6E0"
		            },
		            "inverse": {
		                "white": "#ffffff",
		                "primary": "#ffffff",
		                "secondary": "#212121",
		                "success": "#ffffff",
		                "info": "#ffffff",
		                "warning": "#ffffff",
		                "danger": "#ffffff",
		                "light": "#464E5F",
		                "dark": "#ffffff"
		            }
		        },
		        "gray": {
		            "gray-100": "#F3F6F9",
		            "gray-200": "#ECF0F3",
		            "gray-300": "#E5EAEE",
		            "gray-400": "#D6D6E0",
		            "gray-500": "#B5B5C3",
		            "gray-600": "#80808F",
		            "gray-700": "#464E5F",
		            "gray-800": "#1B283F",
		            "gray-900": "#212121"
		        }
		    },
		    "font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/plugins/global/plugins.bundle79e8.js?v=7.0.3"></script>
	<script src="./assets/plugins/custom/prismjs/prismjs.bundle79e8.js?v=7.0.3"></script>
	<script src="./assets/js/scripts.bundle79e8.js?v=7.0.3"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="./assets/js/pages/custom/login/login-general79e8.js?v=7.0.3"></script>
    <script src="./assets/js/myEvent.js"></script>
	<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
