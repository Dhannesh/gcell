
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Password Change Section</h3>
    </div>
    <div class="panel-body">
      
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
          <legend>User Security Manager</legend>
      
          <div class="form-group col-sm-12">
              <label for="">Old Password</label>
              <input type="password" class="form-control" name ="oldPassword" required placeholder="Old Password">
          </div>
          
          <div class="form-group col-sm-12">
              <label for="">New Password</label>
              <input type="password" class="form-control" name ="newPassword" required placeholder="New Password">
            </div>
          <div class="form-group col-sm-12">
              <label for="">Retype New Password</label>
              <input type="password" class="form-control" name ="retypeNewPassword" required placeholder="Retype New Password">
          </div>
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
         
      </form>
      
    </div>
</div>
