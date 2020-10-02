<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/left_sidebar');?>
<?php $_FunctionName	= $this->router->fetch_method(); ?>
		<!-- MAIN -->
		<div class="content-wrapper"> 
			<section class="content-header">
				<div class="container-fluid">
					<h3 class="page-title">Category</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE --> 
							 
							<?php if(isset($_Success) && $_Success !=''){?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<i class="fa fa-check"></i> <?php echo $_Success;?>
							</div>
							<?php } ?>
							 <div class="box box-default">
								<div class="box-header with-border">
									<h4 class="box-title">Add Category</h4>
									<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> 
								  </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">  
									<form name="country" id="country" method="post" action="<?php echo base_url();?>country/add">
										<input type="hidden" name="country_id" value="<?php echo (isset($_Country)) ? $_Country['country_id'] : '';?>"/>
										<div class="col-md-9 form-group">
											<label>Category <span style="color:red">*</span></label>
											<input type="text" name="name" value="<?php echo (isset($_Country)) ? $_Country['name'] : '';?>"  class="form-control validate[required]" data-errormessage-value-missing="Please Enter Category"   /> 
										</div>
										<div class="col-md-9 form-group">
											<button style="width:150px;" name="saveCountry" type="submit" class="btn btn-primary btn-block">Save</button> 
										</div>
										 
									</form>
									 
							<!-- END TABLE STRIPED -->
								</div>
							</div>
							 
							 
									<!-- TABLE STRIPED --> 
							<div class="box box-default">
								<div class="box-header with-border">
								  <h3 class="box-title">Category List</h3>

								  <div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> 
								  </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body"> 
									<table class="table table-striped tablearrange display">
										<thead>
											<tr>
												<th>#</th>
												<th>Category Name</th> 
												<th>Action</th> 
											</tr>
										</thead>
										<tbody>
											<?php if(!empty($_CountryData)){
												$_Index	=	0;
											foreach($_CountryData as $_Country){
												$_Index +=1;
												?>
											<tr>
												<td><?php echo $_Index;?></td>
												<td><?=$_Country['name'];?></td> 
												<td>
												<a href="<?php echo base_url();?>country/add/<?php echo $_Country['country_id'];?>"  class="btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i> </a>&nbsp;&nbsp;  
												<a href="javascript:void(0);" onclick="deleteRecord(<?=$_Country['country_id'];?>)" class="btn-danger btn-xs" title="Delete" ><i class="fa fa-trash"></i></a>
												</td> 
											</tr>
											<?php 
												}
											}
										?>
										
										</tbody>
									</table>
									 
							<!-- END TABLE STRIPED -->
								</div>
							</div>
							<!-- END BASIC TABLE --> 
					</div>
				</div>
			</div>
			</section>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<?php $this->load->view('admin/footer');?>
		<style>
			.pagination a{
				padding:7px;
			}
			.pagination .current{
				border:2px solid gray;
			}
		</style>
		<script>
			<?php if($_FunctionName=='delete'){?>
			setTimeout(function(){ window.location.href="<?php echo base_url();?>country/add"; }, 2000);
			<?php } ?>
			function deleteRecord(record_id){
				var link 	=	'<?php echo base_url();?>country/delete/'+record_id;
				var x 		=	confirm('Are you sure want to delete this record?');
				if(x){
					window.location.href=link;
				}
			}
		</script>