<?php

function getReturnValue(array $data, string $key)
{
  if (empty($data)) return "";
  $data = $data[$key] ?? false;
  return $data ? $data['value'] : $_POST[$key];
}
?>
<div class="hr-line"></div>
<section class="hero section-p">
  <div class="container-x">
    <h3>Welcome back</h3>
  </div>
</section>
<div class="hr-line"></div>
<section class="hero section-p">
  <div class="container-x flex between">

    <!-- FORM -->
    <form method="post" class="w-md">
      <!-- Name -->
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" value="<?= isset($values['email']) ? $values['email'] : '' ?>">
      </div>

      <!-- Name -->
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" value="">
      </div>

      <br>
      <button class="btn danger w-full">Login</button>
    </form>


    <!-- Errors -->
    <div class="w-md flex-1">
      <?php
      if (isset($message)) { ?>
        <p class="bg-danger p-2 clr-light mb-1"><?= $message ?></p>
      <?php }
      ?>
    </div>
  </div>
</section>