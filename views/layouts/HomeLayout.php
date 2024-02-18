<!DOCTYPE html>
<html lang="en" data-app-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/static/styles/style.css">
  <title>{{page_title}}</title>
</head>

<body>
  <!-- Include Partial >> Header -->
  <?php include_once __DIR__ . '/../partials/header.php'; ?>
  {{content}}
  <!-- Include Partial >> Header -->
</body>

</html>