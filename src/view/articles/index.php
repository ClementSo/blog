<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    foreach ($articles as $article) {
      ?>
      <div class="border">
        <p><?php echo $article["id"] ?></p>
        <p><?php echo $article["title"] ?></p>
        <p><?php echo $article["content"] ?></p>
        <p><?php echo $article["slug"] ?></p>
        <p><?php echo $article["create_at"] ?></p>
        <p><?php echo $article["update_at"] ?></p>
        <p><?php echo $article["user_id"] ?></p>
      </div>
      <?php
    }
    ?>
  </body>
</html>
