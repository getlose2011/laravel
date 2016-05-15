<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <!--
                1. @{{ 變數 }}直接印出來
                2. 如果變數$name 是null 要有預設值則可以這樣寫{{$name or 'xxx'}}
                3. 如果判斷是有這變數可以用 {{isset($name)?$name:'xxx'}}
                4. 要執行javascript腳本則要寫成{!! $name !!} ; 如果寫成{{$name}} , 則會被實體化 , 直接打印在網頁上 , 防止腳本被運行
                 -->
                <div class="title">ing</div>
            </div>
        </div>
    </body>
</html>
