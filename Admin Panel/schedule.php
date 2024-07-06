<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>Reservation</b>
					</div>
					<div class="card-body">
					<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="" id="">
								
								<a href="respdf.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
									class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
						<i class=""></i> </button>
						<table class="table table-bordered table-hover">
							<colgroup>
								<col width="5%">
								<col width="55%">
								<col width="20%">
								<col width="20%">
							</colgroup>
							<thead>
								<tr>
									
									<th class="text-center"> ID</th>
									<th class="text-center">Check In Date</th>
									<th class="text-center">Check In Date</th>
									<th class="text-center">Customer ID</th>
									<th class="text-center">Hotel ID</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$roomNum = $conn->query("SELECT * FROM reservation order by resId asc");
								while($row=$roomNum->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p><b><?php echo $row['checkInDate'] ?></b></p>
									</td>
									<td class="">
										<p><b><?php echo $row['checkOutDate'] ?></b></p>
									</td>
									
									<td class="text-right">
										<b><?php echo number_format($row['custUid'],2) ?></b>
									</td>
									<td class="text-right">
										<b><?php echo number_format($row['roomId'],2) ?></b>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_plan" type="button" data-id="<?php echo $row['resId'] ?>" data-plan="<?php echo $row['custUid'] ?>"
										<button class="btn btn-sm btn-danger delete_plan" type="button" data-id="<?php echo $row['resId'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
</style>
<script>
	function _reset(){
		$('#manage-plan').get(0).reset()
		$('#manage-plan input,#manage-plan textarea').val('')
	}
	$('#manage-plan').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_plan',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_plan').click(function(){
		start_load()
		var cat = $('#manage-plan')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='plan']").val($(this).attr('data-plan'))
		cat.find("[name='amount']").val($(this).attr('data-amount'))
		end_load()
	})
	$('.delete_plan').click(function(){
		_conf("Are you sure to delete this plan?","delete_plan",[$(this).attr('data-id')])
	})
	function delete_plan($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_plan',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
</script>