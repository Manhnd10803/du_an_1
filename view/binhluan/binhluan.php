<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/3c4fa98e07.js" crossorigin="anonymous"></script>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        table td span{
            margin: 0 3px;
        }
        .container{
            padding: 20px;
            padding-bottom: 0;
            background-color: white;
        }
        form{
            display: flex;
            justify-content: space-between;
        }
        form input{
            width: 84%;
            height: 25px;
            font-size: 16px;
            border: none;
            outline: none;
            border-radius: 3px;
        }
        form .submit{
            width: 14%;
            height: 40px;
            background-color: #ED3324;
            color: white;
            font-size: 19px;
        }
        form .submit:hover{
            background-color: #FE0000;
        }
        .dangnhap_bl{
            background-color: white;
            padding-left: 20px;
        }
        .dangnhap_bl p{
            font-size: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            
            <tr>
                <td><i class="fa-solid fa-user"></i> <span>Mã khách hàng</span> <i class="fa-solid fa-calendar-days"></i> <span>Ngày bình luận</span></td>
            </tr>
            <tr>
                <td>Nội dung</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            
        </table>
    </div>
    <div class="dangnhap_bl">
        <p style="color: #EE1E25;">Đăng nhập để bình luận</p>
    </div>
</body>
</html>
