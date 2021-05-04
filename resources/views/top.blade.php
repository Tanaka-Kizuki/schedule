<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <title>Document</title>
  </head>
  <body>
    <h2 class="calendar-title"><span id="js-year"></span>年 <span id="js-month"></span>月</h2>
    <table class="calendar-table">
      <thead>
        <tr><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr>
      </thead>
      <tbody id="js-calendar-body"></tbody>
    </table>
    <div>
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
                    @foreach($datas as $data)
                    <tr>
                    <th>{{$data->company}}</th>
                    <th><a href="{{$data->url}}">HP</a></th>
                    <th>{{$data->status}}</th>
                    <th>{{$data->date}}</th>
                    <th>{{$data->memos}}</th>
                    <th><a href="/show/{{$data->id}}">update</a></th>
                    <th><a href="/delete/{{$data->id}}">delete</a></th>
                    </tr>
                    @endforeach                 
                </table>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/top.js') }}"></script>
  </body>
</html>