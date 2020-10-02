<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/left_sidebar');?>
		<!-- MAIN -->
		<div class="content-wrapper"> 
			<section class="content-header">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<!--<h3 class="panel-title">On Progress</h3>--> 
						</div>
						
		  <div class="row">
        <div class="col-12">
          <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-book"></i>

              <h3 class="box-title">Covid 19 Tracker</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-12 text-center">
					<select name="countryCode" id="countryCode">
					<option value="">--Select--</option>
					<?php if(!empty($countries)) { 
						foreach($countries as $country){
							?>
						<option value="<?=$country['country_code'];?>"><?=$country['name'];?></option>
							<?php
						}
					}
					?>
					</select>
					<input type="text" placeholder="Start Date" name="startDate" id="startDate" />
					<input type="text" placeholder="End Date" name="endDate" id="endDate" />
					<input type="button" value="Get Records" name="getrec" id="getrec" onclick="getRecordsInfo();" />
					<br/>
                  <table class="table table-bordered col-lg-12 covid">
					<thead>
					<tr align="center">
						<th width="25%">Date</td>
						<td>New Infections</td>
						<td>New Deaths</td>
						<td>New Recovered</td>
					</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
                </div>  
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
		  
          <!-- /.box -->
        </div>
		  <!-- /.box -->
        </div>
		
					</div>
				</div>
			</div>
			</section>
			<!-- END MAIN CONTENT -->
		</div>
<?php $this->load->view('admin/footer');?>
<script>

  $('#startDate').datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: '2019:c'});
  $('#endDate').datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: '2019:c'});
  function getRecordsInfo(){
	  var startDate	=	$('#startDate').val();
	  var endDate	=	$('#endDate').val();
	  var countryCode	=	$('#countryCode').val();
	  $('.covid tbody').html('Loading...');
	  $.post( "<?=base_url();?>covid19tracker", { countryCode: countryCode, startDate: startDate,endDate:endDate})
					  .done(function( data ){
						  var getrec =	JSON.parse(data);
						  console.log(getrec);
						  var appendStr = '';
						  $.each(getrec, function( index, value ) {
								 appendStr += '<tr><td>'+value.up_date+'</td><td>'+value.new_infections+'</td><td>'+value.new_deaths+'</td><td>'+value.new_recovered+'</td></tr>';
							});
							if(appendStr!=''){
								$('.covid tbody').html(appendStr);
							}else{
								appendStr = '<tr><td colspan="4">No Records Found</td></tr>';
								$('.covid tbody').html(appendStr);
							}
					  });
					  
  }
  getRecordsInfo();
</script>