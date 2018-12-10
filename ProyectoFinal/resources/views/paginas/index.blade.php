@extends('layouts.app')

@section('content')
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="assets/img/logo.png" alt="logo" class="loader-logo">
        <div class="spinner"></div>   
    </div>
</div>
<!-- End Preloader -->
<!-- Begin Container -->
<div class="container-fluid no-padding h-100">
    <div class="row flex-row h-100 bg-white">
        <!-- Begin Left Content -->
        <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
            <div class="elisyam-bg background-01">
                <div class="elisyam-overlay overlay-01"></div>
                <div class="authentication-col-content mx-auto">
                    <h1 class="gradient-text-01">
                        Welcome To Elisyam!
                    </h1>
                    <span class="description">
                        Etiam consequat urna at magna bibendum, in tempor arcu fermentum vitae mi massa egestas. 
                    </span>
                </div>
            </div>
        </div>
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
            <!-- Begin Form -->
            <div class="authentication-form mx-auto">
                <div class="logo-centered">
                    <a href="db-default.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <h3>Sign In To Elisyam</h3>
                <form>
                    <div class="group material-input">
                        <input type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="group material-input">
                        <input type="password" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </form>
                <div class="row">
                    <div class="col text-left">
                        <div class="styled-checkbox">
                            <input type="checkbox" name="checkbox" id="remeber">
                            <label for="remeber">Remember me</label>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="pages-forgot-password.html">Forgot Password ?</a>
                    </div>
                </div>
                <div class="sign-btn text-center">
                    <a href="db-default.html" class="btn btn-lg btn-gradient-01">
                        Sign in
                    </a>
                </div>
                <div class="register">
                    Don't have an account? 
                    <br>
                    <a href="pages-register.html">Create an account</a>
                </div>
            </div>
            <!-- End Form -->                        
        </div>
        <!-- End Right Content -->
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->    
<!-- Begin Vendor Js -->
<script src="assets/vendors/js/base/jquery.min.js"></script>
<script src="assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
@endsection    