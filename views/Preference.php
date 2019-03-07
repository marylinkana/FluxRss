<?php
$req_article = preference();
//var_dump($rep_article->fetch());
global $id_u;
$i = 0;
while ($rep_article = $req_article->fetch()) {
$nomb_like = get_like($rep_article);
?>
  <article>
    <span class="numero"><?=$i++?>)</span>
    <button type="submit" class="btn btn-outline-success my-2 my-sm-0" onclick="dispreferency($rep_article['id_a'], $id_u)"><span class="preference">Retirer à mes préférences</span></button>
    <a href="<?= $rep_article['link'] ?>" tararticle="_blank"><span class="title"><b><?=$rep_article['title']?></b></span></a>
    <span class="pubdate"><?=$rep_article['pubdate']?></span>
    <br><span class="description"><?=$rep_article['description']?></span>
    <br><button class="btn btn-danger"><span class="">like(<?=$nomb_like?>)</span></button>
  </article>
<?php
}
?>
