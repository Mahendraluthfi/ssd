<h3>Moduls</h3>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<div class="card">		
	        <div class="card-header">Modul 1</div>
	        <div class="card-body text-center">
                <div class="dropdown no-arrow">
	                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  Cell
	                </button>
	                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                <?php foreach ($mod1 as $key) { ?>
	                	<a class="dropdown-item" href="<?php echo base_url('admin/cell/index/'.$key->id_cell) ?>"><?php echo $key->nama_cell ?></a>
	              	<?php } ?>                  
	                </div>                  
	            </div>
	        </div>              
		</div>		
	</div>
	<div class="col-md-2">		
		<div class="card">		
	        <div class="card-header">Modul 2</div>
	        <div class="card-body text-center">
                <div class="dropdown no-arrow">
	                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  Cell
	                </button>
	                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                <?php foreach ($mod2 as $key) { ?>
	                	<a class="dropdown-item" href="<?php echo base_url('admin/cell/index/'.$key->id_cell) ?>"><?php echo $key->nama_cell ?></a>
	              	<?php } ?>                  
	                </div>                  
	            </div>
	        </div>              
		</div>			
	</div>
	<div class="col-md-2">
		<div class="card">		
	        <div class="card-header">Modul 3</div>
	        <div class="card-body text-center">
                <div class="dropdown no-arrow">
	                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  Cell
	                </button>
	                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                <?php foreach ($mod3 as $key) { ?>
	                	<a class="dropdown-item" href="<?php echo base_url('admin/cell/index/'.$key->id_cell) ?>"><?php echo $key->nama_cell ?></a>
	              	<?php } ?>                  
	                </div>                  
	            </div>
	        </div>             
		</div>		
	</div>
	<div class="col-md-2">
		<div class="card">		
	        <div class="card-header">Modul 4</div>
	        <div class="card-body text-center">
                <div class="dropdown no-arrow">
	                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  Cell
	                </button>
	                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                <?php foreach ($mod4 as $key) { ?>
	                	<a class="dropdown-item" href="<?php echo base_url('admin/cell/index/'.$key->id_cell) ?>"><?php echo $key->nama_cell ?></a>
	              	<?php } ?>                  
	                </div>                  
	            </div>
	        </div>              
		</div>		
	</div>
	<div class="col-md-2">
		<div class="card">		
	        <div class="card-header">Modul 5</div>
	        <div class="card-body text-center">
                <div class="dropdown no-arrow">
	                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  Cell
	                </button>
	                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                <?php foreach ($mod5 as $key) { ?>
	                	<a class="dropdown-item" href="<?php echo base_url('admin/cell/index/'.$key->id_cell) ?>"><?php echo $key->nama_cell ?></a>
	              	<?php } ?>                  
	                </div>                  
	            </div>
	        </div>              
		</div>		
	</div>
	<div class="col-md-1"></div>	
</div>