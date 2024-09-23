<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>email</title>
  <style>
    body{
      background-color: #f9f9f9;
      color: #2f2f2f;
      font-family: 'Open Sans', sans-serif;
      font-size: 18px;
      line-height: 1.5;
      margin: 0;
      padding: 0;
    }

    .container{
      width:90%;
    }

    .first-sentence{
      font-size: 24px;
      font-weight: bold;
      font-style: italic;
    }
    </style>
</head>
<body>
    <div class="container">
      <p>Welcome, {{ $name }}!</p>
      <p>Thank you for registering at Kredo IG.</p>
      <p>To get started, visit the website <a href="{{ $appURL }}">here</a>.</p>
</body>
</html>
