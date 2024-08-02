<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gnmarine</title>
    <style>
        
    </style>
</head>
<body>
    <div>
        <h1>Gnmarine</h1>
        <p>Chúng tôi đã tạo mới tàu thành công cho bạn</p>
        <p style="font-weight: bold">Name Vessel: {{$vessel->name}}</p>
        <p>Owner: {{$vessel->company->name}}</p>

        <p>======================================================</p>
        <p style="font-weight: bold">Contact Person Details:</p>
        <p>- Name: {{$vessel->captain}}</p>
        <p>- Phone No.: {{$vessel->phone_captain}}</p>
        <p>- Mobile No.: {{$vessel->mobile_captain}}</p>
        <p>- Email: {{$vessel->email_captain}}</p>
        <p>======================================================</p>

        @if($vessel->cos_expiry_date == null)
            <p>CoS Expiry Date: Chưa có thông tin</p>
        @else
            <p style="font-weight: bold">CoS Expiry Date: {{$vessel->cos_expiry_date}}</p>
            <p>Đề nghị gia hạn đăng kiểm trước ngày hết hạn</p>
        @endif

        <p>======================================================</p>
        <p>Truy cập link: <a href="https://gnmarine.online/">gnmarine.online</a></p>
        <p>Vui lòng liên hệ tổng đài nếu bạn quên tài khoản hoặc mật khẩu</p>
    </div>
</body>
</html>