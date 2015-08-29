<?php echo $form->create('Task');?>
   <fieldset>
      <legend>Add New Task</legend>
      <?php
         echo $form->input('title');
         echo $form->input('done');
      ?>
   </fieldset>
<?php echo $form->end('Add Task');?>
<?php
   echo $html->link('List All Tasks', array('action'=>'index')); 
?>
