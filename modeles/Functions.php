<?php

function insert_into_bdd(){
  //global $bdd;
  $bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");

  $table_url = array(0 => "http://www1.zonewebmaster.eu/feed.php",
                     1 => "http://www.chg-web.org/backend.php",);
  //print_r($table_url);
  $i = 0;
  foreach ($table_url as $value) {
    $rss_load = simplexml_load_file($value);
    //var_dump($rss_load);
    foreach ($rss_load->channel->item as $item) {
      $new_flux = "SELECT id_a FROM articles WHERE title ='".$item->title."'";
      $resultat = $bdd->prepare($new_flux);
      $resultat->execute();
      $num_occurence = $resultat->rowCount();
      if($num_occurence < 1){
          $req_insert = $bdd->prepare('insert into articles (title, description, pubdate, link)
                                     values (:title, :description, :pubdate, :link)');
          $req_insert->bindValue(':title', $item->title, PDO::PARAM_STR);
          $req_insert->bindValue(':description', strip_tags($item->description), PDO::PARAM_STR);
          $req_insert->bindValue(':pubdate', $item->pubDate, PDO::PARAM_STR);
          $req_insert->bindValue(':link', $item->link, PDO::PARAM_STR);
          return $req_insert->execute();
      }
    }
  }
}

function get_like($rep_article){
  global $bdd;
  $req_like = $bdd->query("SELECT * FROM likes WHERE id_a ='".$rep_article['id_a']."'");
  return $req_like = $req_like->rowCount();
}

function likely($id_a, $id_u){
  global $bdd;
  //$bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
  if(isset($id_a)){
    $resultat = $bdd->prepare("SELECT * FROM likes WHERE id_a ='".$id_a."' AND id_u ='".$id_u."' ");
    $resultat->execute();
    $num_occurence = $resultat->rowCount();
    if($num_occurence < 1){
      $req_likes = $bdd->prepare("INSERT INTO likes (id_a, id_u) VALUES ($id_a, $id_u)");
      return $req_likes->execute();
    }
  }
}

function disLikely($id_a, $id_u){
  global $bdd;
  //$bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
  if(isset($id_a)){
    $resultat = $bdd->prepare("DELETE FROM likes WHERE id_a ='".$id_a."' AND id_u ='".$id_u."' ");
    return $resultat->execute();
  }
}

function preferency($id_a, $id_u){
  global $bdd;
  //$bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");

  if(isset($id_u)){
    if(isset($id_a)){
      $resultat = $bdd->prepare("SELECT id_a FROM preferences WHERE id_a ='".$id_a."' AND id_u ='".$id_u."' ");
      $resultat->execute();
      $num_occurence = $resultat->rowCount();
      if($num_occurence < 1){
        $req_pref = $bdd->prepare("INSERT INTO preferences (id_a, id_u) VALUES ($id_a, $id_u)");
        return $req_pref->execute();
      }
    }
  }
}

function disPreferency($id_a, $id_u){
  global $bdd;
  //$bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
  if(isset($id_a)){
    $resultat = $bdd->prepare("DELETE FROM preferences WHERE id_a ='".$id_a."' AND id_u ='".$id_u."' ");
    return $resultat->execute();
  }
}

?>
