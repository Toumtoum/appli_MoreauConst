<div class="container">
  <ul class="collection with-header">
    <li class="collection-header"><h4><?php echo $project ;?></h4></li>
    <?php foreach ($data as $value) {
      ?>
    <li class="collection-item" id=""><h6><?php echo $value['step'] ;?></h6></li>
    <form action="#">
      <?php foreach ($dataTasks as $Task) {
        if ($value['id']==$Task['id_mainSteps']){
        ?>
      <li class="collection-item">
        <input type="checkbox" id="<?php echo $Task['id'];?>"  />
        <label for="<?php echo $Task['id'];?>"><?php echo $Task['task'] ;?></label>
      </li>
      <?php
      }
      } ?>
    </form>
    <?php
    } ?>
  </ul>
</div>
