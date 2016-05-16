<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <style>
        .header{
            height: 100px; background: darkgray;}
        .middle{
            height:300px; background :lightcoral}
        .footer{height:100px; background: yellowgreen;}
    </style>
</head>
<body>
<div class="header">共用的頭部</div>
{{--
    寫法1.@yield('content')
    寫法2.@section('content')
    可放想要的代碼
    @show
--}}
@section('content')
    <P>主視圖的區塊</P>
    @show<!--主視圖只能寫show, 不能寫endsection-->
<div class="footer">共用的底部</div>
</body>
</html>