  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-6">
      <h1 class="h4 text-gray-800"><?php echo $cell->nama_cell.' - '.$cell->nama_modul ?></h1>      
    </div>
    <div class="col-md-6 text-right">
      <a href="<?php echo base_url('admin/cell/index/'.$id) ?>" class="btn btn-success"><i class="fas fa-calendar"></i> Today</a>
    </div>
  </div><br>
  <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <!-- <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div> -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Result / <?php echo date('d M Y', strtotime($date)); ?></h5>
            </div>
            <div class="col-md-6">
                <div class="float-right">                    
                    <?php echo form_open('admin/cell/index/'.$id, array('class' => 'form-inline')); ?>
                        <input type="text" name="date" id="date" class="form-control mb-2 mr-sm-2" placeholder="Search Date">
                        <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> &nbsp;Search</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-md-8">                
                <div class="row">
                    <div class="col-md-4 text-right">Fastest Gap Time</div>
                    <div class="col-md-2 text-danger"><?php echo $fgt->min.' seconds'; ?></div>
                    <div class="col-md-4 text-right">Slowest Gap Time</div>
                    <div class="col-md-2 text-danger"><?php echo $sgt->max.' seconds'; ?></div>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <h4>Total Gap Time</h4>
                <h4 class="text-danger"><?php echo $total; ?></h4>
            </div>
        </div>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Log / <?php echo date('d M Y', strtotime($date)); ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="active">
              <th width="1%">No</th>
              <th>Time Out</th>
              <th>Time In</th>
              <th>Gap Time</th>              
            </tr>
          </thead>          
          <tbody>
            <?php $no = 1; foreach ($log as $data) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data->time_out ?></td>
                <td><?php echo $data->time_in ?></td>
                <td><?php echo $data->diff.' seconds'; ?></td>                
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
