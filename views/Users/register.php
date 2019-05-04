
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Register User</h3>
    </div>
    <div class="panel-body">
      
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
          <legend>User Registration Form</legend>
      
          <div class="form-group col-sm-6">
              <label for="">Full Name</label>
              <input type="text" class="form-control" name ="name" placeholder="Enter Fullname">
          </div>
          <div class="form-group col-sm-6">
              <label for="">Department</label>
              <select name="dept" class="form-control">
              <option value="0" >Select Department</option>
              <option value="Placement">Placement</option>
              <option value="Admission">Admission</option>
              <option value="Academic">Academic</option>
              <option value="CSIT">CS/IT</option>
              <option value="ME">ME</option>
              <option value="CE">CE</option>
              <option value="EN">EN</option>
              <option value="ETAEI">ET/AEI</option>
              <option value="PP">PP</option>
                   <option value="Basic">Basic Science</option>
              </select>
            
          </div>
          <div class="form-group col-sm-6">
              <label for="">Email</label>
              <input type="text" class="form-control" name ="email" placeholder="Enter Email">
            </div>
          <div class="form-group col-sm-6">
              <label for="">Password</label>
              <input type="password" class="form-control" name ="password" placeholder="Enter Password">
          </div>
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
         
      </form>
      
    </div>
</div>
