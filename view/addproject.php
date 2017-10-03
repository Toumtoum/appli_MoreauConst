<main>
  <!-- CREATE NEW PROJECT-->

  <form method="post" class="row" id="addProject">
    <div class="input-field col s12">
      <input placeholder="Project" id="project" name="project"type="text" class="validate">
      <label for="project">PROJECT</label>
    </div>
    <div class="input-field col s12">
      <input id="start" type="text" name="startingDate" class="datepicker validate">
      <label for="start">STARTING DATE</label>
    </div>
    <div class="input-field col s12">
      <input id="end" type="text" name="endingDate" class="datepicker validate">
      <label for="end">ENDING DATE</label>
    </div>
    <input type="hidden" name="user_id" value=<?php echo $_SESSION['userID']; ?>>
    <input class="waves-effect waves-light btn" type="submit" value="CREATE">

    <!-- <a type="submit" class="waves-effect waves-light btn">CREATE</a> -->
  </form><hr>

  <!--ADDING MAIN STEPS-->
  <form method="post" class="row" id="addStepsTasks">
    <div class="col s5">
      <select name="id_project" class="browser-default col s10">
        <option value="" disabled selected>PROJECT</option>
        <?php foreach ($project as $value) {?>
          <option value="<?php echo $value['id'];?>"><?php echo $value['project'];?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col s12">
    <div class="input-field col s10">
      <input placeholder="STEP" id="step" name="step" type="text" class="validate">
      <label for="step">MAIN STEP</label>
    </div>
    <input class="waves-effect waves-light btn" type="submit" value="ADD">
  </div>
  </form>

  <!--ADDING TASKS-->
  <form method="post" class="row" id="addStepsTasks">
    <div class="col s5">
      <select name="id_mainSteps" class="browser-default col s10">
        <option value="" disabled selected>MAIN STEPS</option>
        <?php foreach ($step as $value) {?>
          <option value="<?php echo $value['id'];?>"><?php echo $value['step'];?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col s12">
    <div class="input-field col s10">
      <input placeholder="TASK" id="step" name='task' type="text" class="validate">
      <label for="step">TASK</label>
    </div>
    <input class="waves-effect waves-light btn" type="submit" value="ADD">
  </div>
  </form>

</main>
