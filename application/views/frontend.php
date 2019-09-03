<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Silueta System Demand</title>

		<!-- Bootstrap CSS -->
    	<link href="<?php echo base_url() ?>assets/frontend/images/mas_icon.png" rel="icon" type="image/x-icon">		
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/bootstrap.min.css">
		<!-- <script src="<?php echo base_url() ?>assets/frontend/jquery-3.2.1.slim.min.js"></script> -->
  		<script src="<?php echo base_url() ?>assets/back/vendor/jquery/jquery.min.js"></script>		
		<script src="<?php echo base_url() ?>assets/frontend/popper.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/bootstrap.min.js"></script>
		<style>
			.clear{
				padding-bottom: 40px;
			}
			.no-padding{
				padding: 8px;				
			}
			.btn-cell{
				width: 100%;
				height: 70px;
				font-size: 18px;
				font-weight: bold;
			}
			.padd-bottom{
				margin-bottom: 8px;
			}
		</style>		
	</head>
	<body><p></p>
		<div class="container-fluid">		
	        	<center><img src="<?php echo base_url() ?>assets/frontend/images/Mas_Holdings_Logo_big.png" class ="image_logo" height="80"></center>
	        	<div class="clear"></div>    
	        <div class="row">
	           	
				<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center no-padding"><button type="button" class="btn btn-success" style="width: 100%;"><h3>Modul 1</h3></button></div>				
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center no-padding"><button type="button" class="btn btn-success" style="width: 100%;"><h3>Modul 2</h3></button></div>				
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center no-padding"><button type="button" class="btn btn-success" style="width: 100%;"><h3>Modul 3</h3></button></div>				
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center no-padding"><button type="button" class="btn btn-success" style="width: 100%;"><h3>Modul 4</h3></button></div>				
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center no-padding"><button type="button" class="btn btn-success" style="width: 100%;"><h3>Modul 5</h3></button></div>				
				<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
			
	        </div>   		
			<div class="row">
				<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">                      		
                  			<button id="cell_1" type="button">Cell 1</button>                      		
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_2" type="button">Cell 2</button>                      		
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_3" type="button">Cell 3</button>                      		
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_4" type="button">Cell 4</button>                      		
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_5" type="button">Cell 5</button>                      		
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_6" type="button">Cell 6</button>                      		
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_7" type="button">Cell 7</button>                      		
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_8" type="button">Cell 8</button>                      		
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_9" type="button">Cell 9</button>                      		
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
              				<button id="cell_10" type="button">Cell 10</button>                      		
						</div>
					</div>	
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">					
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_11">Cell 1</button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_12">Cell 2</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_13">Cell 3</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_14">Cell 4</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_15">Cell 5</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_16">Cell 6</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_17">Cell 7</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_18">Cell 8</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_19">Cell 9</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_20">Cell 10</button>							
						</div>
					</div>	
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">					
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_21">Cell 1</button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_22">Cell 2</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_23">Cell 3</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_24">Cell 4</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_25">Cell 5</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_26">Cell 6</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_27">Cell 7</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_28">Cell 8</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_29">Cell 9</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_30">Cell 10</button>							
						</div>
					</div>	
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">					
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_31">Cell 1</button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_32">Cell 2</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_33">Cell 3</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_34">Cell 4</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_35">Cell 5</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_36">Cell 6</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_37">Cell 7</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_38">Cell 8</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_39">Cell 9</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_40">Cell 10</button>							
						</div>
					</div>	
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">					
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_41">Cell 1</button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_42">Cell 2</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_43">Cell 3</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_44">Cell 4</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_45">Cell 5</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_46">Cell 6</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_47">Cell 7</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_48">Cell 8</button>							
						</div>
					</div>	
					<div class="row padd-bottom">
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_49">Cell 9</button>							
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 no-padding">
                      		<button type="button" id="cell_50">Cell 10</button>							
						</div>
					</div>	
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
			</div>
		</div>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->		

		<script>
			var interval = setInterval(
				function get() {
					$.ajax({
			            url : "<?php echo site_url('index.php/cell/getJson')?>/",
			            type: "GET",
			            dataType: "JSON",
			            success: function(data)
			            {                                    			            	
			            	for (var i = 0; i < data.length; i++) {			            		
				                if(data[i].status == 0){
				                	$('#cell_'+data[i].id_cell).removeAttr('class');
				                	$('#cell_'+data[i].id_cell).attr('class','btn btn-danger btn-cell');
				                }else{
				                	$('#cell_'+data[i].id_cell).removeAttr('class');			                				                	
				                	$('#cell_'+data[i].id_cell).attr('class','btn btn-primary btn-cell');
				                }			            	
			            	}
			            },
			            error: function (jqXHR, textStatus, errorThrown)
			            {
			                alert('Error get data from ajax');
			            }
			        });
				}
				, 1000
			)

		</script>
	</body>
</html>