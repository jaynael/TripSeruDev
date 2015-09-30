<!-- jQuery Version 1.11.0 -->
   <script src="/asset/admin/js/jquery-1.11.0.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
 <!--  <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/asset/admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/asset/admin/js/plugins/metisMenu/metisMenu.min.js"></script>
    
    <script src="/asset/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/asset/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/asset/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="/asset/admin/js/plugins/morris/morris.min.js"></script>
    <!--<script src="/asset/admin/js/plugins/morris/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="/asset/admin/js/sb-admin-2.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
		//Morris Data
		$(function() {
			Morris.Area({
				element: 'morris-area-chart',
				data: [{
					period: '2010 Q1',
					iphone: 2666,
					ipad: null,
					itouch: 2647
				}, {
					period: '2010 Q2',
					iphone: 2778,
					ipad: 2294,
					itouch: 2441
				}, {
					period: '2010 Q3',
					iphone: 4912,
					ipad: 1969,
					itouch: 2501
				}, {
					period: '2010 Q4',
					iphone: 3767,
					ipad: 3597,
					itouch: 5689
				}, {
					period: '2011 Q1',
					iphone: 6810,
					ipad: 1914,
					itouch: 2293
				}, {
					period: '2011 Q2',
					iphone: 5670,
					ipad: 4293,
					itouch: 1881
				}, {
					period: '2011 Q3',
					iphone: 4820,
					ipad: 3795,
					itouch: 1588
				}, {
					period: '2011 Q4',
					iphone: 15073,
					ipad: 5967,
					itouch: 5175
				}, {
					period: '2012 Q1',
					iphone: 10687,
					ipad: 4460,
					itouch: 2028
				}, {
					period: '2012 Q2',
					iphone: 8432,
					ipad: 5713,
					itouch: 1791
				}],
				xkey: 'period',
				ykeys: ['iphone', 'ipad', 'itouch'],
				labels: ['View', 'Order', 'Commision'],
				pointSize: 2,
				hideHover: 'auto',
				resize: true
			});
		
			Morris.Donut({
				element: 'morris-donut-chart',
				data: [{
					label: "Download Sales",
					value: 12
				}, {
					label: "In-Store Sales",
					value: 30
				}, {
					label: "Mail-Order Sales",
					value: 20
				}],
				resize: true
			});
		
			Morris.Bar({
				element: 'morris-bar-chart',
				data: [{
					y: '2006',
					a: 100,
					b: 90
				}, {
					y: '2007',
					a: 75,
					b: 65
				}, {
					y: '2008',
					a: 50,
					b: 40
				}, {
					y: '2009',
					a: 75,
					b: 65
				}, {
					y: '2010',
					a: 50,
					b: 40
				}, {
					y: '2011',
					a: 75,
					b: 65
				}, {
					y: '2012',
					a: 100,
					b: 90
				}],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B'],
				hideHover: 'auto',
				resize: true
			});
		
		});


        $('#dataTables-example').dataTable();
		$( "#datepicker" ).datepicker();
    });
    </script>
    

</body>

</html>