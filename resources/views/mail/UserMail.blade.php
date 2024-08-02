<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Gnmarine: Email xác nhận</h1>
        <p>Hệ thống đã tạo tài khoản thành công cho bạn</p>
        <p>Email đăng nhập: {{$user->email}}</p>
        <p>Company: {{$user->company->name}}</p>
        <p>Phone Number: {{$user->phoneNumber}}</p>
        <p>Vì yếu tố bảo mật nên chúng tôi sẽ không gửi Mật khẩu qua email này</p>
        <p>Truy cập link: <a href="https://gnmarine.online/">gnmarine.online</a></p>
        <p>Vui lòng liên hệ tổng đài nếu bạn chưa rõ tài khoản hoặc mật khẩu</p>
    </div>
</body>
</html>
