<!-- Nav -->
<nav data-nav>

  <input type=checkbox id=menu>
  <label for=menu><span>≡</span></label>

  <!-- Menu Loop -->
  <input type=radio name=topNav id=home>
  <label for=home>
    <span><a href=<?php echo $site; ?>>Home</a></span>
  </label>


  <input type=radio name=topNav id=about>
  <label for=about>
    <span><a href=<?php echo $site; ?>/about.php>About Us</a></span>
  </label>

  <input type=radio name=topNav id=wedding>
  <label for=wedding>
    <span>Wedding</span>
    <div>
      <a href=<?php echo $site; ?>/ceremony.php>Ceremony</a>
      <a href=<?php echo $site; ?>/reception.php>Reception</a>
    </div>
  </label>

  <input type=radio name=topNav id=travel>
  <label for=travel>
    <span>Travel</span>
    <div>
      <a href=<?php echo $site; ?>/getting-here.php>Getting Here</a>
      <a href=<?php echo $site; ?>/accommodations.php>Accommodations</a>
      <a href=<?php echo $site; ?>/things-to-do.php>Things to Do</a>
    </div>
  </label>

  <input type=radio name=topNav>
  <label>
    <span><a href=<?php echo $site; ?>/registry.php>Registry</a></span>
  </label>

  <!-- /Menu Loop -->
  <input type=radio name=topNav id=reset>
  <label for=reset></label>
</nav>