<script type="text/javascript">
$(document).ready(function(){
	
	/* setup navigation, content boxes, etc... */
	Administry.setup();
	
	/* datatable */
	$('#example').dataTable();
	
	/* expandable rows */
	Administry.expandableRows();
});

</script>
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper">
				<!-- Left column/section -->
				<section class="column width6 first">					
					<h3>User List</h3>
					<?Php $this->widget('zii.widgets.grid.CGridView', array(
						'dataProvider'=>$dataProvider,
						'itemsCssClass'=>'display stylized',
						'columns'=>array(
							 array('header'=>'id',
                                   'value'=>'$data->u_id',
                                   'type'=>'raw',
							),
							 array('header'=>'username',
                                   'value'=>'$data->username',
                                   'type'=>'raw',
							),
							 array('header'=>'real_name',
                                   'value'=>'$data->real_name',
                                   'type'=>'raw',
							),
							array(  'header'=>'操作',
									'class'=>'CButtonColumn',
								),
						),
						'pager'=> array( 
							'class'=>'CLinkPager',
							'header' => '', 
							'maxButtonCount' => 0,
							'prevPageLabel' => '<',
							'nextPageLabel' => '>',
							),  
					));	
				?>	
					<div class="clear">&nbsp;</div>
					
				</section>
				<!-- End of Left column/section -->
				
				<!-- Right column/section -->
				<aside class="column width2">
					<div id="rightmenu">
						<header>
							<h3>You might also want to check out...</h3>
						</header>
						<dl class="first">
							<dt><img width="16" height="16" alt="Basic styles" SRC="img/style.png"></dt>
							<dd><a HREF="styles.html">Basic styles</a></dd>
							<dd class="last">Basic elements and styles</dd>							
							
							<dt><img width="16" height="16" alt="" SRC="img/book.png"></dt>
							<dd><a HREF="http://www.865171.cn">www.865171.cn</a></dd>
							<dd class="last">Datatable documentation</dd>							
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>Tables</h3>
						</header>
						<section>
							Try other alternatives:<br/>
							<dl>
								<dt></dt>
								<dd><a HREF="http://www.865171.cn">www.865171.cn</a></dd>
							</dl>
						</section>
					</div>
				</aside>
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	

