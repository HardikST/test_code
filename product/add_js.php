<script src="<?php echo base_url(); ?>assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/ckeditor/adapters/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form-elements.js"></script>
<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>

<script>
    jQuery(document).ready(function() {
        FormElements.init();
        FormValidator.init();
    });
        
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
                $('input.radio-callback-module').on('ifChecked', function(event) {
                    if($(this).val()==1)
                    {
                        $('.module_list').slideDown('slow');
                    }
                    else
                    {
                        $('.module_list').slideUp('slow');
                    }
		});
                
                /*$('input.fundraising-callback-module').on('ifChecked', function(event) {
			$('.fundraising_module_list').slideDown('slow');
		});
		$('input.fundraising-callback-module').on('ifUnchecked', function(event) {
			$('.fundraising_module_list').slideUp('slow');
		});*/
                                            
                //Calendar.init();  
                //TableData.init();
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