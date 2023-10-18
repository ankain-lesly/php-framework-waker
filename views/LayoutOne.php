<?php

use Devlee\PHPRouter\View;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= View::getPageTitle() ?></title>
</head>

<style>
  body {
    background: #232323;
    color: #ececec;
  }
</style>

<body>
  <hr>
  <a href="/">Back</a>
  <hr>
  {{content}}
  <hr>
</body>

</html>