<?php 
include 'libs/load.php';




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Instagram fake 🤯</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body, html {
        height: 100%; /* Ensures full height */
        margin: 0; /* Removes default margin */
      }

      .main-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
      }

      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        background: white; /* Optional: background color for form */
        border-radius: 10px; /* Optional: rounded corners for form */
      }

      .form-signin .checkbox {
        font-weight: 400;
      }

      .form-signin .form-floating:focus-within {
        z-index: 2;
      }

      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
  </head>
  <body>
   
      <?php load_tempulate('__header') ?>
   

    <main class="main-container">
      <?php load_tempulate('__login') ?>
    </main>

    <?php load_tempulate('__footer') ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

