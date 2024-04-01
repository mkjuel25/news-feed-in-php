<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBC World News</title>
  <style>
    .feednews{
background-color: white;
margin-top: 10px;
Width: 450px;
}
.news-item{
 padding: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  margin-bottom: 10px;
}
  </style>
</head>
<body>
  <h1>BBC World News</h1>
<div class="feednews">
  <?php include 'parse_rss.php'; ?>
</div>
</body>
</html>
