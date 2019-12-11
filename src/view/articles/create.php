<?php

function checkErrors($nameValue){
  if (isset($_SESSION["errors"][$nameValue])) {
    return $_SESSION["errors"][$nameValue];
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/articles/create" method="post">
      <p>title</p>
      <input type="text" name="title" value="">
      <p><?php echo(checkErrors("title")); ?></p>
      <p>content</p>
      <input type="text" name="content" value="">
      <p><?php echo(checkErrors("content")); ?></p>
      <p>slug</p>
      <input type="text" name="slug" value="">
      <p><?php echo(checkErrors("slug")); ?></p>
      <button type="submit">Envoyer</button>
    </form>
  </body>
</html>

<?php unset($_SESSION['errors'])?>
