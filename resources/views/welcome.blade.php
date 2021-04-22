<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form action="/add" method="post">
                    @csrf
                    <input type="text" name="company">
                    <input type="text" name="url">
                    <input type="text" name="status">
                    <input type="datetime-local" name="date">
                    <input type="text" name="memos">
                    <input type="submit" value="add">
                </form>
                <table>
                <tr>
                    <th>会社名</th>
                    <th>ホームページ</th>
                    <th>状況</th>
                    <th>面接日時</th>
                    <th>備考・媒体</th>
                </tr>
                <tr>
                    @foreach($datas as $data)
                    <th>{{$data->company}}</th>
                    <th><a href="{{$data->url}}">HP</a></th>
                    <th>{{$data->status}}</th>
                    <th>{{$data->date}}</th>
                    <th>{{$data->memos}}</th>
                    @endforeach
                </tr>                    
                </table>
            </div>
        </div>
    </body>
</html>
