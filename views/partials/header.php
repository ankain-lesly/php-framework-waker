<?php

use Devlee\WakerORM\Services\Session;

$user = (new Session)->get('user');

?>
<header class="bg-dark clr-white">
  <div class="container-x flex between py-2">
    <nav class="flex gap-2">
      <a class="flex" href="/">Welcome</a>
      <a class="flex" href="#Contact">Contact</a>
      <a class="flex" href="#About">About</a>
      <a class="flex" href="#Posts">Posts</a>
    </nav>

    <div class="flex gap-1">
      <a href="https://github.com/ankain-lesly/php-framework-waker" target="_blank" class="rounded btn warning small">Waker</a>
    </div>
  </div>
</header>