<?php require_once("layout/head.php") ?>
<?php require_once("layout/navbar.php") ?>

<body>
  
    <div class="container">
      <div class="row">
        
      <!-- Alertas -->
      <?php if ($_GET['success'] == 'true'): ?>
          <div class="alert alert-success">
              <p><?php echo $_GET['message'] ?></p>
          </div>
      <?php endif ?>

      <?php if ($_GET['error'] == 'true'): ?>
          <div class="alert alert-danger">
              <p><?php echo $_GET['message'] ?></p>
          </div>
      <?php endif ?>

      <?php require_once($content) ?>
          
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>url = '<?php echo URL_BASE ?>'</script>
    <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/scripts.js"></script>
    
</body>
</html>
