<?php 
include 'libs/load.php';




?>


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

    </style>
  </head>
  <body>
   
      <?php load_tempulate('__header') ?>
      <?php load_tempulate('__head') ?>
   

    <main class="main-container">
      <?php load_tempulate('__signup') ?>
    </main>

    <?php load_tempulate('__footer') ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
