<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            @csrf
                            <legend class="text-center text-uppercase">Form Register</legend>
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" placeholder="Input name" name="name" class="form-control">
                                @error('name') <small>{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" placeholder="Input email" name="email" class="form-control">
                                @error('email') <small>{{ $message }}</small> @enderror

                            </div>
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" placeholder="Input password" name="password" class="form-control">
                                @error('password') <small>{{ $message }}</small> @enderror

                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password:</label>
                                <input type="password" placeholder="Confirm password" name="confirm-password" class="form-control">
                                @error('confirm-password') <small>{{ $message }}</small> @enderror

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <p class="text-center"><a href="{{ route('admin.login') }}">Already have account?</a></p>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>