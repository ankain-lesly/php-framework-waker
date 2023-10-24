<!DOCTYPE html>
<html lang="en" data-app-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{page_title}}</title>
  <link rel="stylesheet" href="/static/styles/style.css">
</head>

<body>
  <header>
    <div class="container-x py-2">
      <a href="/">
        << Back</a>
    </div>
  </header>
  <div class="hr-line"></div>

  <!-- Body -->
  <section class="hero section-p">
    <div class="container-x flex">
      <!-- sidenav -->
      <aside style="border-right: 2px solid #f20;" class="w-md flex-1">
        <h3 class="py-2">SideBar</h3>

        <nav>
          <p class="clr-danger mb-2">Dashboard</p>
          <a class="flex mb-x" href="/app">+ App</a>
          <a class="flex mb-x" href="/posts/create">+ New Post</a>
          <a class="flex mb-x" href="/topics/create">+ New Topic</a>
          <br><br>
          <a class="flex mb-x clr-warning" href="/"><- Back Home</a>
        </nav>
      </aside>
      <!-- content -->
      <main style="padding: 2rem;">
        {{content}}
      </main>
    </div>
  </section>
</body>

</html>