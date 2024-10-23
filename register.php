<?php 
$e_roll = $e_name = $e_age = $e_email = '';
$roll = $name = $age = $email = '';
$success = false;
if(isset($_POST['roll'])) {
  $roll = $_POST["roll"];
  $name = $_POST["name"];
  $age = $_POST["age"];
  $email = $_POST["email"];

  if($roll === '') {
    $e_roll = "Roll must be fill";
  } else {
    if (!preg_match("/^SG-\d{3}$/", $roll)) {
      $e_roll = "Invalid roll number format";
    }
  }
  if($name === '') {
    $e_name = "Name must be fill";
  } else {
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
      $e_ = "Name must be only string";
    }
  }
  if($age === '') {
    $e_age = "Age must be fill";
  } else {
    if (!preg_match("/^\d+$/", $age)) {
      $e_age = "Age must be only number";
    }
  }
  if($email === '') {
    $e_email = "Email not must be blank!";
  } else {
      if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $e_email = "Email uncorrect format";
      }
  }
  if ($e_name === '' && $e_age === '' && $e_email === '' && $e_roll === '') {
    $student = ["roll" => $roll,"name" => $name,"email" => $email,"age" => $age];
    setcookie("student", json_encode($student), time() + 3600 * 24 * 14, '/');
    $success = true;
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
              <?php if($success) { ?>
                  <div class="alert alert-success">Student save!</div>
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
              <div class="form-group my-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <div class="text-danger"><?= $e_email ?></div>
              </div>
              <button class="btn btn-primary mt-4">Submit</button>
             </form>
          </div>
        </div>
      </div>
  </div>

<?php include_once("./layout/footer.php") ?>