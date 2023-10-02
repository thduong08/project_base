<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>Register</title>
</head>
<body class="bg-info">
    <div id="wropper bg-success" >
        <div class="container" >
            <div class="row justify-content-around">
                <form action="" class="col-md-5 bg -light p-3 my-1">
                    <h1 class="text-center text-uppercase h3 py-1 ">Đăng ký tài khoản</h1>
                <div class="form-group">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname"
                    id="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" name="username"
                    id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password"
                    id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                    id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender"
                    id="male" value="male" class="form-check-input" checked>
                    <label for="male" class="form-check-lable">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender"
                    id="female" value="female" class="form-check-input">
                    <label for="female" class="form-check-lable">Nữ</label>
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address"
                    id="address" class="form-control" required>
                </div>
                <input type="submit" value="Đăng ký" class="btn-primary btn btn-block mb-3">
                </form>
            </div>
        </div>
    </div>
</body>
</html>