<?php
require_once(__DIR__ . '/../app.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COURSE NOTES: JavaScript Essential Training</title>
  <link rel="stylesheet" href="./css/style.css">
  </script>
</head>

<body>
  <div class="ehw-wrapper">
    <div class="ehw-body notes">
      <div class="course-title">JavaScript Essential Training (2021)</div>

      <a class="bookmark-link" href="#bookmark">BOOKMARK</a>

      <?php

      include_once(VIEW_PATH . '/view-header.php');
      include_once(VIEW_PATH . '/view-toc.php');
      include_once(VIEW_PATH . '/view-vidnotes.php');
      include_once(VIEW_PATH . '/view-footer.php');

      ?>

    </div>

  </div>

</body>

</html>