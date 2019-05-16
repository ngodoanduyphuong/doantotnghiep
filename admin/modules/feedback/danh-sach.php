  <!-- Content Header (Page header) -->
    <section class="content-header">
    Phan Hồi Khách Hàng
    </section>

    <!-- Main content -->
    <section class="content">
    <?php 
    $query = mysqli_query($conn,"SELECT * FROM feedback");
    ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-hover">
          	<thead>
          		<tr>
          			<th>ID</th>
          			<th>Tên Khách Hàng</th>
          			<th>Email</th>
                 <th>Phone</th>
                <th>Đối Tượng</th>
                <th>Nội Dung</th>
          		</tr>
          	</thead>
          	<tbody>
            <?php foreach($query as $feed) { ?>
              <tr>
                <td><?php echo $feed['id']; ?></td>
                <td><?php echo $feed['fullname']; ?></td>
                 <td><?php echo $feed['Email']; ?></td>
                 <td><?php echo $feed['Phone']; ?></td>
               <td><?php echo $feed['object']; ?></td>
               <td><?php echo $feed['resquest']; ?></td>
              <td>  
                <a href="index.php?module=feedback&action=xoa&id=<?php echo $feed['id'];?>" class="btn btn-danger" onclick="return confirm('bạn có chắc chắn muốn xóa không?')"><span class="glyphicon glyphicon-trash"></span></a></td>
              </tr>
            <?php } ?>
          	</tbody>
          </table>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>