<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>

  <?php include '../head.php';?>
</head>

<body>

  <!-- Title bar -->
  <?php include '../title-bar.php';?>


  <div class="row">
    <div class="large-9 medium-12 small-12 columns">
        <?php
    		  require_once 'includes/Parsedown.php';
    		  $parsedown = new Parsedown();
    		  $text = file_get_contents('bruce-springsteen-and-me.md');
    		  echo Parsedown::instance()->text($text);
  		  ?> 
    </div>
  </div>

  <footer class="row">
    <div class="large-12 columns">
      <hr/>
    </div>
  </footer>
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>


