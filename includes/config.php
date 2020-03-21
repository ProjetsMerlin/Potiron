<?php
/*CONFIGS*/
$config = array(
"version"     => 1,

"type"        => 'website', /*Application, emailing, splashpage*/

"author"      => "L'interMEDIAire",

"url"         => linter_url(),

"robots"      => "all", /*none*/

"lang"        => "fr-BE",

"title"       => "Titre",

"description" => "Lorem ipsum dolor sit amet,
 consectetur adipisicing elit. Saepe rerum itaque,
 excepturi molestias sed,
 exercitationem fugit similique dolorum pariatur minima deserunt aliquam sit quo commodi odit optio in id? Nemo.",/*MAX 150*/

"favicon"     => "favicon.png",

"ga"          => "UA-...",

"fontawesome" => true,

"jQuery"      => true

);

/*FUNCTIONS*/

/*créé un exerpt*/
function linter_exerpt($content,$nbr_characters) {
  $content_excerpt = substr($content,0,$nbr_characters);
  return $content_excerpt;
}

/*créé un slug*/
function linter_slug($slug_titre) {
  /*ajout du tiret*/
  $slug_titre = preg_replace('~[^\pL\d]+~u', '-', $slug_titre);
  /*utf8*/
  $slug_titre = iconv('utf-8', 'us-ascii//TRANSLIT', $slug_titre);
  /*suppression des caractères spéciaux*/
  $slug_titre = preg_replace('~[^-\w]+~', '', $slug_titre);
  /*suppression des espaces*/
  $slug_titre = trim($slug_titre, '-');
  /*suppression des tiraits en double*/
  $slug_titre = preg_replace('~-+~', '-', $slug_titre);
  /*suppression des majuscule*/
  $slug_titre = strtolower($slug_titre);
  return $slug_titre;
}

function linter_url() {
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
  }
  else {
    $url = "http://";
  }
  $url .= $_SERVER['HTTP_HOST'];

  $url .= $_SERVER['REQUEST_URI'];

  return $url;
}