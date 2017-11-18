<!-- This file is used to markup the public-facing widget. -->
<!-- gets rid of white space -->
<?php if ( strlen( trim( $monday_friday ) ) > 0 ): ?>

<!-- monday-friday -->
  <p> 
    <span class="day-of-week">Monday-Friday:</span> <?php echo $monday_friday; ?>
  </p>
<?php endif; ?>

<!-- saturday -->
<?php if ( strlen( trim( $saturday ) ) > 0 ): ?>
  <p> 
    <span class="day-of-week">Saturday:</span> <?php echo $saturday; ?>
  </p>
<?php endif; ?>

<!-- sunday -->
<?php if ( strlen( trim( $sunday ) ) > 0 ): ?>
  <p> 
    <span class="day-of-week">Sunday:</span> <?php echo $sunday; ?>
  </p>
<?php endif; ?> 