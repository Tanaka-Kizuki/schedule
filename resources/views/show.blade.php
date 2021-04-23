<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <form action="/update" method="post">
          <input type="text" value="{{$form->company}}">
          <input type="text" value="{{$form->url}}">
          <input type="text" value="{{$form->status}}">
          <input type="datetime-local" value="{{$form->date}}">
          <input type="text" value="{{$form->memos}}">
          <input type="submit" value="update">
     </form>
</body>
</html>