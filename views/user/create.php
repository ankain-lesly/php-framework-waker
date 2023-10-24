<h3>Create a post</h3>
<br>
<div class="container-x flex between">
  <!-- FORM -->
  <form method="post" class="w-md">

    <!-- Topic -->
    <div class="form-group">
      <label for="">Topic</label>
      <select name="topic_id" required>
        <option value="<?= $post['topic_id'] ?? '' ?>"><?= $post['topic'] ?? 'Select a topic' ?></option>
        <?php

        foreach ($topics as $topic) { ?>
          <option value="<?= $topic['topic_id'] ?>"><?= $topic['topic'] ?></option>
        <?php } ?>
      </select>
    </div>

    <!-- Title -->
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" name="title" required value="<?= $post['title'] ?? '' ?>">
    </div>

    <!-- Body -->
    <div class="form-group">
      <label for="">Body</label>
      <textarea name="body" required cols="30" rows="10"><?= $post['body'] ?? '' ?></textarea>
    </div>

    <br>
    <button class="btn danger w-full"><?= $post ? 'Update posts' : 'Create posts' ?></button>
  </form>
</div>