<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 07:32:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Koki - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>name</strong></label>
                                            <input type="text" class="form-control" placeholder="Your name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name="username" id="usernamecheck">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Profile Picture</strong></label>
                                            <input type="file" name="profile_picture" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div> 

                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{ route('admin-login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
  <script src="{{ asset('admin/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/backend/custom.js') }}"></script>

<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 07:32:44 GMT -->
</html>