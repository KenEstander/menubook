<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";

?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">
          Fullname:
          <input type="text" name="" class="form-control" required>
          Company Name:
          <input type="text" name="" class="form-control" required>
          Email:
          <input type="text" name="" class="form-control" required>
          Phonenumber:
          <input type="text" name="" class="form-control" required>
          Address:
          <input type="text" name="" class="form-control" required>
          Company's Username:
          <input type="text" name="" class="form-control" required>
          Password:
          <input type="password" name="" class="form-control" required>
          Re-type Password:
          <input type="password" name="" class="form-control" required>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






<?php include $ROOT_DIR . "templates/footer.php"; ?>
