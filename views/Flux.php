<?php
insert_into_bdd();
$req_article= get_flux();
$i = 0;
global $id_u;
while ($rep_article = $req_article->fetch()) {

  $req_like = $bdd->query("SELECT * FROM likes WHERE id_a ='".$rep_article['id_a']."'");
  $req_like = $req_like->rowCount();

  ?>
  <article>
    <span class="numero"><?=$i++?>)</span>
    <button type="submit" class="btn btn-outline-success my-2 my-sm-0" onclick="preferency($rep_article['id_a'], $id_u);"><span class="">Ajouter à mes préférences</span></button>
    <a href="<?= $rep_article['link'] ?>" tararticle="_blank"><span class="title"><b><?=$rep_article['title']?></b></span></a>
    <span class="pubdate"><?=$rep_article['pubdate']?></span>
    <br><span class="description"><?=$rep_article['description']?></span>
    <br><button class="btn btn-danger" type="submit" onclick="likely($rep_article['id_a'], $id_u);" ><span class="">like(<?=$req_like?>)</span></button>
  </article>
  <?php
    //var_dump($req_likes);
  }
 ?>
