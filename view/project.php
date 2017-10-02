<div class="container">
  <ul class="collection with-header">
    <?php foreach ($data as $value) {?>
    <li class="collection-header"><h4><?php echo $value['project'] ;?></h4></li>
    <li class="collection-item" id=""><h6><?php echo $value['step'] ;?></h6></li>
    <form action="#">
      <li class="collection-item">
        <input type="checkbox" id="<?php echo $value['id'];?>"  />
        <label for="<?php echo $value['id'];?>"><?php echo $value['task'] ;?></label>
      </li>
    </form>
    <?php
    } ?>
  </ul>
</div>
