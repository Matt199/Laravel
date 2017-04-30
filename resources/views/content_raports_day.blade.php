<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?= $page_tittle ?> 
			</h3>
			
	
			<!-- BEGIN PAGE CONTENT-->
			
			
			
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-share font-red-sunglo hide"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Statystyki</span>
								<span class="caption-helper">Dzienne</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<!-- <a href="" class="btn grey-salsa btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									Daty<span class="fa fa-angle-down">
									</span>
									</a> -->
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											Q1 2014 <span class="label label-sm label-default">
											past </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
											Q2 2014 <span class="label label-sm label-default">
											past </span>
											</a>
										</li>
										<li class="active">
											<a href="javascript:;">
											Q3 2014 <span class="label label-sm label-success">
											current </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
											Q4 2014 <span class="label label-sm label-warning">
											upcoming </span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<!--<div id="site_activities_loading">
								<img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
							</div> -->
							<div id="site_activities_content" class="display-none">
								<div id="site_activities" style="height: 228px;">
								</div>
							</div>
                                                    <div class="col-md-6 col-sm-6   ">    
                                                         <div id="reportrange" class="pull-right" style=" cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                                            <span></span> <b class="caret"></b>
                                                        </div>
                                                    </div>    
                                                        
                                                        
							<div style="margin: 20px 0 30px 30px">
                                                            
                                                           
                                                            
                                                            <div id="report_day" style="height: 328px; margin: 0px 0 40px 0px"></div>
								
                                                            
                                                            
								<div class="row">
                                                                     
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-sm label-success">
										Kliknięć: </span>
										<h3>{{$sums[0]->SumClick}}</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-sm label-info">
										Conversion Rate: </span>
										<h3>
                                                                                    @if($sums[0]->SumClick != 0)
                                                                                    {{ number_format(($sums[1]->SumConv/$sums[0]->SumClick)*100,2) }} %
                                                                                    @else
                                                                                    -
                                                                                    @endif
                                                                                </h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-sm label-danger">
										Konwersje: </span>
										<h3>{{$sums[1]->SumConv}}</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-sm label-warning">
										Zarobione: </span>
										<h3>{{$sums[2]->SumComi}} zł</h3>
									</div>
                                                                 
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
                                        
                                        
                                     
                                       


                                      
                                        
				</div>
				<div class="clearfix">
				</div>
			
			
                        
			
			<div class="portlet box red-intense">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Raport Dzienny
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="javascript:;" data-toggle="dropdown">
									Kolumny <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><input type="checkbox" checked data-column="0">Data</label>
										<label><input type="checkbox" checked data-column="1">Wyświetlenia</label>
										<label><input type="checkbox" checked data-column="2">Kliknięcia</label>
										<label><input type="checkbox" checked data-column="3">Konwersje</label>
										<label><input type="checkbox" checked data-column="4">Wypłata</label>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_4">
							<thead>
							<tr>
								<th>
									 Data
								</th>
								<th>
									 CR
								</th>
								<th class="hidden-xs">
									 Kliknięcia
								</th>
								<th class="hidden-xs">
									 Konwersje	
								</th>
								<th class="hidden-xs">
									Wypłata
								</th>
							</tr>
							</thead>
							<tbody>
							
						
                                                        
                                                        @foreach ($reportbydays as $key => $v) 
                                                            
                                                               
                                                                
							<tr>
								<td>
                                                                    {{$v->get('day') }}
                                                                     
								</td>
								<td>
                                                                    @if($v->get('clicks') != 0)
								  {{
                                                                      ($v->get('conv')/$v->get('clicks') )*100
                                                                  }} %
                                                                  @else
                                                                  0 %
                                                                   @endif
								</td>
								<td>
								{{$v->get('clicks') }}
								</td>
								<td>
								{{$v->get('conv') }}	
								</td>
								<td>
									 {{$v->get('commision') }} zł
								</td>
							</tr>
                                                            
                                                       @endforeach 
							
							
							</tbody>
							</table>
						</div>
					</div>
			
			
			
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
        
      <!--  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  -->      
     <script> 
         
       /*  var visitors = [
                ['01', 15],
                ['02', 25],
                ['03', 17],
                ['04', 8],
                ['05', 15],
                ['06', 23],
                ['07', 15],
                ['08', 13],
                ['09', 46]
            ];*/
         
         
         /*   var data1 = 
            echo $data;*/
         /*    echo "[";
            for(  $i =0 ; $i< count($wykresys['date']) ; $i++)
            {
               $abc =  $wykresys['date'][$i];
               $N_date_start = strtotime($abc);
               $date_start = date("d/m",$N_date_start);
                
                echo "['".$date_start."',".$wykresys['clicks'][$i]."]," ;
            }
             echo "]";*/
            
 
     
     
     
    </script>
   