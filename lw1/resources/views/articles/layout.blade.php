<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Песни Валентина Стрыкало</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            border: 0;
        }

        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        :focus,
        :active {
            outline: none;
        }

        a:focus,
        a:active {
            outline: none;
        }

        nav,
        footer,
        header,
        aside {
            display: block;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-size: 100%;
            line-height: 1;
            font-size: 14px;
            -ms-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        input,
        button,
        textarea {
            font-family: inherit;
        }

        input::-ms-clear {
            display: none;
        }

        button {
            cursor: pointer;
        }

        button::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        a,
        a:visited {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
        }

        ul li {
            list-style: none;
        }

        img {
            vertical-align: top;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        body {
            background-color: #1a202c;
            color: #a9bdde;
        }

        .wrapper {
            min-height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 1000px;
        }

        .content {
            flex: 1 1 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main {
            display: flex;
            gap: 30px;
            flex-direction: column;
        }

        .main__row {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .main__title {
            font-size: 30px;
            font-weight: 700;
        }

        .main__btn {
            background: #39d505;
            border-radius: 20px;
            padding: 10px;
            width: 180px;
            text-align: center;
        }

        .main__btn a {
            color: white;
        }

        .table {
            display: flex;
            background: #2e3748;
            overflow: hidden;
            border-radius: 10px;
            flex-direction: column;
        }

        .first__row,
        .second__row {
            display: flex;
            overflow: hidden;
            justify-content: space-between;
        }

        .row__item {
            flex: 1 1 20%;
            display: flex;
            position: relative;
            justify-content: center;
            align-items: center;
            height: 50px;
            padding: 15px;
        }

        .first__row div {
            font-size: 25px;
        }

        .first__row div:nth-child(even) {
            background-color: #3f485b;
        }

        .second__row div:nth-child(odd) {
            background-color: #3f485b;
        }

        .second__row div:nth-child(odd):after,
        .second__row div:nth-child(even):after {
            content: "";
            position: absolute;
        }

        .second__row div:nth-child(odd):after {
            width: 100%;
            height: 4px;
            top: 94%;
            background: #2e3748;
        }

        .second__row div:nth-child(even):after {
            width: 100%;
            height: 4px;
            top: 94%;
            background: #3f485b;
        }

        .second__row div:last-child {
            justify-content: space-around;
        }

        .item button {
            background: none;
        }

        .row__item:last-child {
            flex: 1 1 40%;
        }

        .item__show,
        .item__edit,
        .item__form {
            padding: 10px;
            background: #3f485b;
            border-radius: 10px;
        }

        .second__row a,
        button {
            color: #a9bdde;
        }

        .row__item input,
        textarea {
            background: none;
            color: #a9bdde;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>