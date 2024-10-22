<?php 
$e_roll = $e_name = $e_age = '';
if(isset($_POST['roll'])) {
  $roll = $_POST["roll"];
  $name = $_POST["name"];
  $age = $_POST["age"];

  if($roll === '') {
    $e_roll = "Roll must be fill";
  }
  if($name === '') {
    $e_name = "Name must be fill";
  }
  if($age === '') {
    $e_age = "Age must be fill";
  }
} ?>
<?php include_once("./layout/header.php") ?>

  <h1 class="text-center my-4">Welcome!</h1>  
  <div class="row">
      <div class="col-8">
        <img src="./img/uni.jpg" alt="university" style="height: 500px;">
      </div>
      <div class="col-4">
        <div class="card" style="height: 500px;">
          <div class="card-body">
              <?php if(isset($_REQUEST['success'])) { ?>
                  <div class="alert alert-success"><?= $_REQUEST['success'] ?></div>
             <?php } ?>
             <form action="" method="post">
              <div class="form-group my-2">
                <label for="roll" class="form-label">Roll</label>
                <input type="text" name="roll" id="roll" class="form-control">
                <div class="text-danger"><?= $e_roll ?></div>
              </div>
              <div class="form-group my-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <div class="text-danger"><?= $e_name ?></div>
              </div>
              <div class="form-group my-2">
                <label for="age" class="form-label">Age</label>
                <input type="text" name="age" id="age" class="form-control">
                <div class="text-danger"><?= $e_age ?></div>
              </div>
              <button class="btn btn-primary mt-4">Submit</button>
             </form>
          </div>
        </div>
      </div>
  </div>

<?php include_once("./layout/footer.php") ?>