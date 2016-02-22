<?php
  $template = 'single';
  $template_title = 'TOP SECRET UPDATE BUTTON';
  $template_theme = 'code';
?>
<?php include("../inc/header.php"); ?>
<style>
  #hero, [data-nav] {
    display: none;
  }
  form {
    text-align: center;
  }
</style>
<h1>TOP SECRET</h1>
<h2>Update <code>kellieandtom</code> using the button below</h2>
<form class="actions" action="pull.php" method="post">
  <button data-button=blue type="submit">git pull</button>
</form>
<script>
  if (window.location.search.indexOf('updated')!==-1){
    notification('Website updated','')
  }
</script>
<?php include("../inc/footer.php"); ?>