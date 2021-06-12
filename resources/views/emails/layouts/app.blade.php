<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>

    <style>
        *, :after, :before {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            color: black;
            font-size: 16px;
            line-height: 22px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .btn {
            background-color: #FCC81A;
            border-radius: 28px;
            font-size: 16px;
            padding: 18px 38px;
            color: black;
            text-decoration: none;
            margin-top: 40px;
            display: inline-block;
        }

        h1 {
            font-size: 18px;
        }

        a {
            color: #6BA0F1;
            text-decoration: none;
        }

        .email {
            position: absolute;
            bottom: -20px;
            left: -20px;
        }

    </style>
</head>
<body>
<div style="max-width: 600px;">
    <div class="text-center" style="padding: 30px 15px">
        <img src="/img/meetem-logo-dark.svg" alt="">
    </div>
    <div style="position: relative; color: white; background-color: #2E4058;padding: 60px 30px 40px;">
        @yield('content')
        <img src="/img/email.png" alt="" class="email">
    </div>
    <div class="text-right" style="padding: 15px">
        {{__('Copyright')}} ©meeteam {{date('Y')}} {{__('Company')}}. {{__('All rights reserved')}}.
    </div>
</div>

</body>
</html>
