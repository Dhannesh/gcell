
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">User Login</h3>
</div>
<div class="panel-body">
  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
   
  
     
      <div class="form-group">
          <label for="">Email</label>
          <input type="text" class="form-control" name ="email" placeholder="Enter Email">
        </div>
      <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name ="password" placeholder="Enter Password">
      </div>
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
     
  </form>
  
</div>
</div>
