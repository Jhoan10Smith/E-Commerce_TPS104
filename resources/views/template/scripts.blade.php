	<script src="{{ asset('href/js/jquery.js') }}"></script>
	<script src="{{ asset('href/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('href/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('href/js/price-range.js') }}"></script>
    <script src="{{ asset('href/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('href/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/8f894382e6.js" crossorigin="anonymous"></script>

	<!-- Data Tables --->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script src="{{ asset('href/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('href/plugins/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('href/plugins/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('href/plugins/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('href/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
	<script>
		$(function () {
		    $('#example1').DataTable({
		      	"responsive": true, 
		      	"lengthChange": true, 
		      	"autoWidth": true,
		      	"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		});
	</script>