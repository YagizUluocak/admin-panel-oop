<footer class="footer">
	<span>Copyright &copy; 2017 <b>YÖNETİM</b>PANELİ</span>
</footer>
</section>
<!-- ============================================================== -->
<!-- 						Content End		 						-->
<!-- ============================================================== -->
<!-- Common Plugins -->
<script src="../assets/lib/jquery/dist/jquery.min.js"></script>
<script src="../assets/lib/bootstrap/js/popper.min.js"></script>
<script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/lib/pace/pace.min.js"></script>
<script src="../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="../assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
<script src="../assets/lib/metisMenu/metisMenu.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/dropzone/dropzone.js"></script>

<!--Chart Script-->
<script src="../assets/lib/chartJs/Chart.min.js"></script>


<!--Vetor Map Script-->
<script src="../assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/lib/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Datatables-->
<script src="../assets/lib/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/lib/datatables/dataTables.responsive.min.js"></script>
<script src="../assets/lib/datatables/dataTables.buttons.min.js"></script>
<script src="../assets/lib/datatables/jszip.min.js"></script>
<script src="../assets/lib/datatables/pdfmake.min.js"></script>
<script src="../assets/lib/datatables/vfs_fonts.js"></script>
<script src="../assets/lib/datatables/buttons.html5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#datatable2').DataTable({
     dom: 'Bfrtip',
     buttons: [
     'copyHtml5',
     'excelHtml5',
     'csvHtml5',
     'pdfHtml5'
     ]
   });

  });
</script>
<script>
	$(document).ready(function () {
		$('#datatable1').dataTable();
	});
</script>
<!-- Summernote -->
<script src="../assets/lib/summernote/summernote.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.summernote').summernote({
			height:'300px',
		});
	});
</script>
<script>
	CKEDITOR.replace( 'editor' );
</script>
<!--Sweet Alerts-->
<script src="../assets/lib/sweet-alerts2/sweetalert2.min.js"></script>          


</body>
</html>
