<?php $this->load->view('common/header');?>
 <!--************************************
        Inner Banner Start
    *************************************-->
    <div class="tg-innerbanner">
      <div class="container">
        <div class="row">
          <div class="col-xs-শ্রেণি2 col-sm-শ্রেণি2 col-md-শ্রেণি2 col-lg-শ্রেণি2">
            <ol class="tg-breadcrumb">
              <li><a href="javascript:void(0);">একাডেমিক তথ্য</a></li>
              <li class="tg-active">সকল ফী সূমহ</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--************************************
        Inner Banner End
    *************************************-->
<?php $this->load->view('common/SidebarLeft');?>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-center">
	<div class="panel">
		<div class="panel-body">
			<div class="page-header"><h2>সকল ফী সূমহ</h2>
				<article class="tg-themepost tg-course">
						<div class="tg-themetabs tg-coursestabs">
							<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
							
						</div> 
					
				</article>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('common/SidebarRight');?>
<?php $this->load->view('common/footer');?>
