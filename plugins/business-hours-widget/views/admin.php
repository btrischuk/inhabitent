<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
<!-- title -->
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

<!-- monday-friday -->
   <p><label for="<?php echo $this->get_field_id('Monday to Friday'); ?>">Monday to Friday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('monday_friday'); ?>" name="<?php echo $this->get_field_name('monday_friday'); ?>" type="text" value="<?php echo $monday_friday; ?>">
   </p>

<!-- saturday -->
   <p><label for="<?php echo $this->get_field_id('Saturday'); ?>">Saturday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('saturday'); ?>" name="<?php echo $this->get_field_name('saturday'); ?>" type="text" value="<?php echo $saturday; ?>">
   </p>

<!-- sunday -->
   <p><label for="<?php echo $this->get_field_id('Sunday'); ?>">Sunday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('sunday'); ?>" name="<?php echo $this->get_field_name('sunday'); ?>" type="text" value="<?php echo $sunday; ?>">
   </p>

</div>
