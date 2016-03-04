<!-- <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/pages-calendar.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/table-data.js"></script>

<script>
        $(window).load(function() {
            if($(".panel-scroll").length && $body.hasClass("isMobile") == false) {
                setTimeout(function(){
                    $('.panel-scroll').perfectScrollbar('destroy'); 
                    $('.panel-scroll').perfectScrollbar({
                        wheelSpeed: 50,
                        minScrollbarLength: 20,
                        suppressScrollX: true
                    });
                },1000);
            }
        });
        
	jQuery(document).ready(function() {
                //Calendar.init();  
                TableData.init();
                //SVExamples.init();
                
                /*$('#new_customer_list').dataTable({
			"aoColumnDefs" : [{
				"aTargets" : [0]
			}],
			"oLanguage" : {
				"sLengthMenu" : "Show _MENU_ Rows",
				"sSearch" : "",
				"oPaginate" : {
					"sPrevious" : "",
					"sNext" : ""
				}
			},
			"aaSorting" : [[0, 'asc']],
			"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
			],
			// set the initial value
			"iDisplayLength" : 10,
		});*/
                
	});        
</script>