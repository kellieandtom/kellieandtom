<?php
  $template = 'single';
  $template_title = 'Default Template';
  $template_theme = 'default';
?>
<?php include("inc/header.php"); ?>
<?php include("inc/dummy-content.php"); ?>
<?php include("plugins/form/order-form.php"); ?>
<footer>&copy; <script>document.write(new Date().getFullYear())</script> Tommy Hodgins</footer>
<?php include('plugins/notifications/test.php') ?>
<?php include("inc/footer.php"); ?>