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
    <h3>Create account</h3>
  </div>
</section>
<div class="hr-line"></div>
<section class="hero section-p">
  <div class="container-x flex between">

    <!-- FORM -->
    <form method="post" class="w-md">

      <!-- Name -->
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?= getReturnValue($errors, "name") ?>">
      </div>

      <!-- Name -->
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" value="<?= getReturnValue($errors, "email") ?>">
      </div>

      <!-- Name -->
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" value="">
      </div>

      <!-- Name -->
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="confirm_password" value="">
      </div>
      <br>
      <button class="btn danger w-full">create account</button>
    </form>


    <!-- Errors -->
    <div class="w-md flex-1">
      <?php
      if (isset($errors))
        foreach ($errors as $name => $value) { ?>
        <p class="bg-danger p-2 clr-light mb-1"><?= $value['errors'][0] ?? 'error' ?></p>

      <?php }
      ?>
    </div>
  </div>
</section>