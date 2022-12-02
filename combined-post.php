<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EHD_VIDNOT_20221121_LL_JSEss_2021__WIP__01.md</title>
    <link rel="stylesheet" href="./css/style.css"></script>
  </head>
  <body class="ehw-body notes">
    <h1>EHD_VIDNOT_20221121_LL_JSEss_2021__WIP__01.md</h1>

    <?php 
    
    // define('APP_PATH', dirname(__FILE__) . '/../');
    define('APP_PATH', dirname(__FILE__));

    echo '<h3>APP_PATH = '. APP_PATH . '</h3>';
    
    $testPath = APP_PATH . '/sb/junk2.htm';

    echo '<h3 class="error">PATH TEST: '. $testPath . '</h3>';

    include $testPath;
    
    ?>

    <?php include('./post-wip/post-wip-course-js-ess-03.htm') ?>

  </body>
</html>
