
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Password Change Section</h3>
    </div>
    <div class="panel-body">
      
     <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Dept</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
       
    <?php foreach($viewmodel as $item): ?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['name']?></td>
        <td><?=$item['email']?></td>
        <td><?=$item['dept']?></td>
        <td>
        <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <input type="hidden" name="delete_id" value="<?=$item['id']?>"/>
        <input type="submit" class="btn btn-warning" name="resetPass" value="reset"/>
        <input type="submit" class="btn btn-danger" name="delete" value="delete"/>
       
        </form>
</td>
        </tr>
<?php endforeach;?>
</tbody>
      
    </div>
</div>
