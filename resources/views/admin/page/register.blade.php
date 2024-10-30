<!DOCTYPE html>

<head>
    <base href="/">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="admin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="admin/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="admin/css/font.css" type="text/css" />
    <link href="admin/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="admin/js/jquery2.0.3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="reg-w3">
        <div class="w3layouts-main">
            <h2>Đăng kí</h2>
            <form action="{{ route('dang-ki') }}" method="POST">
                @csrf
                <div>
                    <label for="" class="form-label">Tên</label>
                    <input type="text" class="ggg" name="name" placeholder="NAME" required="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="" class="form-label">Mật khẩu</label>
                    <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="" class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" class="ggg" name="password_confirmation" placeholder="PASSWORD"
                        required="">

                </div>

                <div class="clearfix"></div>
                <center><button type="submit" class="btn btn-primary">Đăng kí</button></center>
            </form>
            <p>Bạn đã có tài khoản? <a href="login.html">Đăng nhập tại đây!</a></p>
        </div>
    </div>
    <script src="admin/js/bootstrap.js"></script>
    <script src="admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="admin/js/scripts.js"></script>
    <script src="admin/js/jquery.slimscroll.js"></script>
    <script src="admin/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="admin/js/jquery.scrollTo.js"></script>
</body>

</html>
