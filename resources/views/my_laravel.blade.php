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
                @if($data['score'] < 60)
                    不及格<br />
                @else
                    及格<br />
                @endif

                @for($i=1; $i < 10; $i++)
                    {{$i}}<br />
                @endfor

                @foreach($data['article'] as $d)
                    {{$d}}<br />
                 @endforeach

                 @forelse($data['news'] as $d)
                        {{$d}}<br />
                 @empty
                        no data
                 @endforelse
            </div>
        </div>
    </body>
</html>
