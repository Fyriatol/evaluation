<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
      <title>Site Arthur | Évaluation</title>
     <link rel="stylesheet" href="./assets/css/styles.css">
     <script src="./assets/js/jquery.js"></script>
     <script src="./assets/js/jqueryui.min.js"></script>
     <script>
     $(document).ready(function () {
                 $("p").hide();
                 $("h2").each(function () {
                     $(this).replaceWith('<a href="#" title="Afficher">' + $(this).text() + '</a>');
                 });
                 $("p > a").click(function () {
                     if ($(this).next("h2:visible").length != 0) {
                         $(this).next("h2").slideUp("normal");

                     } else {
                         $("h2").slideUp("normal");
                         $(this).next("h2 ").slideDown("normal");

                     }
                     return false;
                 });


             });
     </script>
    <title>SITE ARTHUR</title>
  </head>
  <body>
