<?php echo $form->create('Task');?>
          <fieldset>
             <legend>Edit Task</legend>
             <?php
                echo $form->hidden('id');
                echo $form->input('title');
                echo $form->input('done');
             ?>
          </fieldset>
<?php echo $form->end('Save');?>