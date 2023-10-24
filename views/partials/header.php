<?php

use Devlee\PHPMVCCore\Services\Session;

$user = (new Session)->get('user');

?>
<header>
  <div class="container-x flex between py-2">
    <nav class="flex gap-2">
      <a class="flex" href="/">Home</a>
      <a class="flex" href="#">Contact</a>
      <a class="flex" href="#">About</a>
      <a class="flex" href="/posts">Posts</a>
    </nav>

    <div class="flex gap-1">
      <a href="/search" class="btn warning small">OO</a>
      <?php
      if ($user) : ?>
        <div class="flex gap-1">
          <a href="/app" class="btn danger rounded slim flex"><?= strtoupper($user['name'][0]) ?></a>
          <a href="/logout?token=validated" class="btn slim">Logout</a>
        </div>
      <?php else : ?>
        <div class="flex gap-2">
          <a href="/login" class="btn">Login</a>
          <a href="/signup" class="btn danger">Sign Up</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<div class="hr-line"></div>