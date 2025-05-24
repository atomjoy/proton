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
            display: block;
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
            float: left;
            width: 100%;
            padding: 0px;
            margin: 0px;
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
            display: inline-block;
            width: 100%;
            max-width: 100%;
            margin-bottom: 25px;
            border: 0px;
            border-radius: 10px;
            overflow: hidden;
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

        .nano-table a.nano-buy-button {
            float: left;
            width: 100%;
            margin-top: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            box-sizing: border-box;
            border-radius: 6px;
            border: 1px solid #3c4043;
            color: #3c4043;
        }

        .nano-table a.nano-buy-button:hover {
            color: #0075ff;
            border: 1px solid #0075ff;
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
            display: block;
            overflow: hidden;
            color: #3c4043;
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .nano-title-small {
            display: block;
            overflow: hidden;
            color: #3c4043;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .nano-p {
            display: block;
            overflow: hidden;
            width: 100%;
            color: #5f6368;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .nano-regards {
            display: block;
            overflow: hidden;
            width: 100%;
            color: #3c4043;
            font-size: 20px;
            font-weight: 600;
        }

        .nano-regards-text {
            display: block;
            overflow: hidden;
            width: 100%;
            font-size: 18px;
            font-weight: 700;
        }

        .nano-regards-name {
            display: block;
            overflow: hidden;
            width: 100%;
            color: #5f6368;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 25px;
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
            border: 1px solid #f0f0f0;
        }

        .nano-font-small {
            color: #706d6b;
            font-size: 13px;
        }

        .nano-padding {
            display: block;
            overflow: hidden;
            padding: 25px !important;
        }

        .nano-padding-inline {
            display: block;
            overflow: hidden;
            padding: 0px 25px !important;
        }

        .nano-padding-top {
            display: block;
            overflow: hidden;
            padding-top: 25px !important;
        }

        .nano-padding-bottom {
            display: block;
            overflow: hidden;
            padding-bottom: 25px !important;
        }

        .nano-code {
            display: block;
            overflow: hidden;
            width: 100%;
            margin: 20px 0px;
            padding-top: 15px !important;
            padding-bottom: 15px !important;
            border-radius: 6px;
            border: 1px dashed #0075ff;
            background: #eef6ff;
            color: #0075ff;
            font-size: 23px;
            font-weight: 700;
            text-align: center;
        }

        .nano-code ul {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px 5px;
            min-width: 30px;
            border-radius: 6px;
            border: 1px dashed #0075ffaa;
            background: #fff;
            color: #3c4043;
            font-weight: 700;
            font-size: 21px;
            box-sizing: border-box;
        }

        .nano-company-logo {
            float: left;
            width: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        .nano-company-logo img {
            width: auto !important;
            max-width: 200px !important;
            border-radius: 0px !important;
        }

        .nano-50 {
            position: relative;
            float: left;
            width: 48%;
            padding: 0px;
            padding-bottom: 25px;
        }

        .nano-50 img {
            width: 100%;
            margin-top: 0px;
        }

        .nano-product-left {
            padding-right: 2%;
        }

        .nano-product-right {
            padding-left: 2%;
        }

        .nano-product-name {
            font-size: 18px;
            font-weight: 700;
            color: #3c4043;
        }

        .nano-product-text {
            color: #5f6368;
        }

        .nano-product-price {
            font-size: 20px;
            font-weight: 400;
            color: #3c4043;
        }

        @media screen and (max-width: 640px) {
            .nano-50 {
                width: 100%;
            }

            .nano-product-left {
                padding-right: 0px;
            }

            .nano-product-right {
                padding-left: 0px;
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