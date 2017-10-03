<pre><?var_dump($dataTasks);?></pre>
<div class="container">
  <ul class="collection with-header">
    <li class="collection-header"><h4><?php echo $project ;?></h4></li>
    <?php foreach ($data as $value) {
      ?>
    <li class="collection-item" id=""><h6><?php echo $value['step'] ;?></h6></li>
    <form action="#">
      <?php foreach ($dataTasks as $value) {
        ?>
      <li class="collection-item">
        <input type="checkbox" id="<?php echo $value['id'];?>"  />
        <label for="<?php echo $value['id'];?>"><?php echo $value['task'] ;?></label>
      </li>
      <?php } ?>
    </form>
    <?php
    } ?>
  </ul>
</div>
