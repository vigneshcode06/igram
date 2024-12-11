<?php 
include 'libs/load.php';


ini_set('display_errors', 1);
error_reporting(E_ALL); 

?>

<!doctype html>
<html lang="en">
<? load_tempulate('__head') ?>
  <body>
  
      
      <? load_tempulate('__header') ?>
 
    <main>
      <? load_tempulate('__calltoaction') ?>
      <? load_tempulate('__photogram') ?>
    </main>
    <? load_tempulate('__footer') ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>


  
</html>
