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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</table>
</body>
</html>