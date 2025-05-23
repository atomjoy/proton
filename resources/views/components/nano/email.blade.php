{{--
<x-proton.nano.email title="Email" locale="pl">
    // Email message content
</x-proton.nano.email>
--}}
<!DOCTYPE html>
<html lang="{{ $locale ?? 'pl' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Email message' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <style>
        .nano-body {
            font-size: 16px;
            display: block;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .nano-wrapper {
            font-size: 16px;
            box-sizing: border-box;
            overflow: hidden;
            width: 100%;
            display: block;
            font-weight: normal;
            font-family: 'Poppins', 'Google Sans', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
            background: #fafafa;
            color: #707070;
        }

        .nano-table {
            font-size: 16px;
            border-collapse: collapse;
            border-spacing: 0;
            border: 0px;
            width: 640px;
            max-width: 90%;
            margin: 50px auto;
            border-radius: 5px;
            overflow: hidden;
        }

        .nano-table tr,
        .nano-table td,
        .nano-table th {
            border: 0px;
            border-spacing: 0;
            border-collapse: collapse;
            box-sizing: border-box;
            background: #ffffff;
            color: #222;
        }

        .nano-table a {
            color: #0075ff;
            font-weight: normal;
            box-sizing: border-box;
            overflow: hidden;
        }

        .nano-table a:hover {
            color: #00b13f;
        }

        .nano-table a:active {
            color: #ff6600;
        }

        .nano-table a:visited {
            color: #8e8e8e;
        }

        .nano-table a.nano-link {
            display: inline-block;
            width: auto !important;
            outline: none !important;
            text-decoration: none !important;
        }

        .nano-table img {
            display: block;
            max-width: 100%;
            margin-bottom: 25px;
            border-radius: 10px;
            border: 0px;
        }

        .nano-table a.nano-button {
            display: inline-block;
            font-weight: bold;
            font-size: 16px;
            margin: 20px 0px;
            padding: 15px 50px;
            box-sizing: border-box;
            color: #ffffff !important;
            background: #0075ff !important;
            border-radius: 6px;
            text-decoration: none;
            outline: none;
        }

        .nano-table a.nano-button:hover {
            color: #ffffff !important;
            background: #00b13f !important;
        }

        .nano-table a.nano-icon {
            display: inline-block;
            padding: 5px;
        }

        /* Overvrite style */

        .nano-divider {
            float: left;
            width: 100%;
            overflow: hidden;
            margin: 25px 0px;
            border-top: 1px solid #f0f0f0;
        }

        .nano-title {
            float: left;
            width: 100%;
            overflow: hidden;
            margin-bottom: 20px;
            font-size: 30px;
            font-weight: 600;
            color: #3c4043;
        }

        .nano-title-small {
            float: left;
            width: 100%;
            overflow: hidden;
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: 600;
            color: #3c4043;
        }

        .nano-p {
            float: left;
            width: 100%;
            overflow: hidden;
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: normal;
            color: #5f6368;
        }

        .nano-regards {
            float: left;
            width: 100%;
            height: auto;
            overflow: hidden;
            font-size: 20px;
            font-weight: 600;
            color: #3c4043;
        }

        .nano-regards-text {
            font-size: 18px;
            font-weight: 700;
        }

        .nano-regards-name {
            float: left;
            width: 100%;
            overflow: hidden;
            margin-bottom: 25px;
            font-size: 16px;
            font-weight: normal;
            color: #5f6368;
        }

        .nano-bg {
            font-size: 14px;
            color: #3c4043 !important;
            background: #fafafa !important;
        }

        .nano-bg a {
            color: #3c4043;
            font-weight: normal;
        }

        .nano-radius {
            border-radius: 6px;
        }

        .nano-border {
            border: 1px solid #f0f0f0 !important;
        }

        .nano-font-small {
            color: #706d6b;
            font-size: 13px;
        }

        .nano-padding {
            float: left;
            width: 100%;
            height: auto;
            padding: 25px;
            box-sizing: border-box;
            overflow: hidden;
        }

        .nano-padding-inline {
            padding: 0px 25px;
        }

        .nano-padding-top {
            padding-top: 25px;
        }

        .nano-padding-bottom {
            padding-bottom: 25px;
        }

        .nano-code {
            float: left;
            width: 100%;
            overflow: hidden;
            margin: 20px 0px;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 6px;
            border: 1px dashed #0075ffaa;
            background: #0075ff11;
            color: #0075ff;
            font-weight: 700;
            font-size: 23px;
            text-align: center;
        }

        .nano-code ul {
            display: inline-block;
            margin: 5px 5px;
            padding: 10px 20px;
            box-sizing: border-box;
            min-width: 30px;
            border-radius: 6px;
            border: 1px dashed #0075ffaa;
            background: #fff;
            color: #3c4043;
            font-weight: 700;
            font-size: 21px;
        }

        .nano-company-logo {
            border-radius: 0px !important;
        }

        .nano-50 {
            position: relative;
            float: left;
            width: 50%;
            padding: 25px;
            padding-top: 0px;
            box-sizing: border-box !important;
        }

        .nano-50 img {
            margin-top: 0px;
        }

        .nano-50 a.nano-buy {
            float: left;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            font-size: 14px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #3c4043;
            color: #3c4043;
        }

        .nano-50 a.nano-buy:hover {
            color: #0075ff;
            border: 1px solid #0075ff;
        }

        @media screen and (max-width: 640px) {
            .nano-50 {
                width: 100%;
            }

            .nano-title {
                font-size: 25px;
            }

            .nano-title-small {
                font-size: 18px;
            }
        }
    </style>

    {{ $style ?? '' }}
</head>

<body class="nano-body">
    <div class="nano-wrapper">
        <table class="nano-table">
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</body>

</html>
