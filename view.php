<?php require_once ("./stroage/student.php") ?>
<?php include_once("./layout/header.php"); ?>
<h1 class="text-center my-4">Student List!</h1>
            <div class="row">
                <div class="col-7">
                    <div class="card">
                      <img src="./img/uni.jpg" alt="university" style="height: 500px;">
                    </div>
                </div>
                <div class="col-5">
                    <div class="card" style="height: 500px;">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      <th>Roll</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Age</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php for ($i = 0; $i < count($student_list) ; $i++) { ?>
                                    <tr>
                                        <td><?= $student_list[$i]['roll'] ?></td>
                                        <td><?= $student_list[$i]['name'] ?></td>
                                        <td><?= $student_list[$i]['email'] ?></td>
                                        <td><?= $student_list[$i]['age'] ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  </div>
<?php include_once("./layout/footer.php"); ?>