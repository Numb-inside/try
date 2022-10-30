<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="Logo">
                <div class="container">
                    <div class="logo_logo">
                        <img src="{{ $img }}"><p>{{ $mainTitle }}</p>
                    </div>
                    <div class="info">
                        <div class="info_item">
                            <div class="info_img"><img src="{{ $img }}"></div>
                            <div class="info_glavn">
                                <div class="main_title">{{ $titleOne }}</div>
                                <div class="main_text">{{ $txtOne }}</div>
                            </div>
                        </div>
                        <div class="info_item">
                            <div class="img"><img src="{{ $img }}"></div>
                            <div class="info_glavn">
                                <div class="main_title">{{ $titleTwo }}</div>
                                <div class="main_text">{{ $txtTwo }}</div>
                            </div>
                        </div>
                        <div class="info_item">
                            <div class="img"><img src="{{ $img }}"></div>
                            <div class="info_glavn">
                                <div class="main_title">{{ $titleThree }}</div>
                                <div class="main_text">{{ $txtThree }}</div>
                            </div>
                        </div>
                        <div class="info_item">
                            <div class="img"><img src="{{ $img }}"></div>
                            <div class="info_glavn">
                                <div class="main_title">{{ $titleFour }}</div>
                                <div class="main_text">{{ $txtFour }}</div>
                        </div>
                        </div>
                    </div>
                    <div class="trash">
                        <div class="first_trash trashcan">
                                <div class="shop"><img src="{{ $img }}">{{ $shop }}</div>
                                <div class="sponsor"><img src="{{ $img }}">{{ $sponsor }}</div>
                        </div>
                        <div class="second_trash trashcan">
                            <div class="trash_built">{{ $build }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>