<?php


function articleIndex() {
  require MODEL . 'article.php';
  $articles = getArticles();
  require VIEW . 'articles/index.php';
}

function articleShow($param) {
  require MODEL . 'article.php';
  $article = getArticle($param);
  if ($article) {
    require VIEW . 'articles/show.php';

  }
  else {
    header('Location: /404');
  }

}

function articleCreate() {
  require VIEW . 'articles/create.php';
}

function articleStore() {

  if (isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["slug"])) {

    if (empty($_POST["title"])) {
      $_SESSION["error"]["title"] = "mettez un title";
    }

    if (empty($_POST["content"])) {
      $_SESSION["error"]["content"] = "mettez un content";
    }

    if (empty($_POST["slug"])) {
      $_SESSION["error"]["slug"] = "mettez un slug";
    }

    if (isset($_SESSION["error"])) {
      header("Location: create");
    }

    else {
      require MODEL . 'article.php';
      storeArticle();
      header('Location: /articles/' . $_POST['slug']);
    }
  }
}
