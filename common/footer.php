<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-ui-1.11.1/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/mdb.js"></script>
<script type="text/javascript" src="assets/js/tether.js"></script>
<script type="text/javascript" src="assets/js/fileinput.js"></script>
<script type="text/javascript" src="assets/js/panzoom.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.star').on('click',function(){
		$('#N_block').show();
	});
	 $('#example').DataTable( {
          "scrollY": 200,
        "scrollX": true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data export'
            },
            {
                extend: 'pdfHtml5',
                title: 'Data export'
            }
        ]
    } );


      $('#example1').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
})
</script>

<script type="text/javascript">
// 	$(function() {
//     $('input[name="birthdate"]').daterangepicker({
//         singleDatePicker: true,
//         showDropdowns: true
//     }, 
//     function(start, end, label) {
//         var years = moment().diff(start, 'years');
//         alert("You are " + years + " years old.");
//     });
// });
</script>

<!-- <script type="text/javascript" src="js/feedback.js"></script> -->