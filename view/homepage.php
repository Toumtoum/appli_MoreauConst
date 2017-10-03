<main>
  <table class="striped">
    <thead>
      <tr>
        <th>PROJECT</th>
        <th>PROJECT MANAGER</th>
        <th>STARTING DATE</th>
        <th>ENDING DATE</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($infoProjects as $value){
        ?>
      <tr onclick="document.location.href = '../controller/projectC.php?project=<?php echo $value['id'];?>'">
        <td><?php echo $value['project'];?></td>
        <td><?php echo $value['name'] . ' ' . $value['surname'] ;?></td>
        <td><?php echo $value['startingDate']; ?></td>
        <td><?php echo $value['endingDate']; ?></td>
      </tr>
      <?php
        } ?>
    </tbody>
  </table>
</main>
