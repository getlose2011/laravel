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
        @include('common.header', ['page_title' => '首頁'])
        <div class="middle">首頁的中間頁面</div>
        @include('common.footer')
    </body>
</html>
