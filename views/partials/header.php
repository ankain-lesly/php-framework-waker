<?php

use Devlee\WakerORM\Services\Session;

$user = (new Session)->get('user');

?>
<header>
  <div class="container-x flex between py-2">
    <nav class="flex gap-2">
      <a class="flex" href="/">Home</a>
      <a class="flex" href="#">Contact</a>
      <a class="flex" href="#">About</a>
      <a class="flex" href="#">Posts</a>
    </nav>

    <div class="flex gap-1">
      <a href="/search" class="btn warning small">OO</a>

    </div>
  </div>
</header>
<div class="hr-line"></div>