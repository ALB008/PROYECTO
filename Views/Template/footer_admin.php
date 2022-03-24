    <!-- Essential javascripts for application to work-->
    <script src="<?= media();?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media();?>/js/popper.min.js"></script>
    <script src="<?= media();?>/js/bootstrap.min.js"></script>
    <script src="<?= media();?>/js/main.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="<?= media();?>/js/functions_admin.js"></script>    
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media();?>/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

    <?php if($data['page_name'] == "actividades"){?>
    <script src="<?= media();?>/js/functions_activ.js"></script>  
    <?php }?>
 
  </body>
</html>