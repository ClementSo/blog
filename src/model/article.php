<?php


function getArticles() {
  global $bdd;
  $req = $bdd->query('SELECT * FROM articles');
  return $req->fetchAll();
}

function getArticle($slug) {
  global $bdd;
  $req = $bdd->prepare('SELECT * FROM articles WHERE slug = :slug');
  $req->execute([
    "slug" => $slug
  ]);
  return $req->fetch();
}

function storeArticle() {
  global $bdd;
  $req = $bdd->prepare("INSERT INTO articles (title, content, slug, user_id) VALUES (:title, :content, :slug, 1)");
  $req->execute([
    "title" => $_POST['title'],
    "content" => $_POST['content'],
    "slug" => $_POST['slug']
  ]);
}
