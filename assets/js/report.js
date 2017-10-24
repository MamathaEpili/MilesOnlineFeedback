$(document).ready(function(){

		var sel_fac_data_val;
		var fac_val;
		var fac_star_val;
		var F1_val;
		var F2_val;
		var F3_val;
		var F1_comment;
		var F2_comment;
		var F3_comment;
		var F1_star;
		var F2_star;
		var F3_star;
		var fac_city;
		var fac_cand;
		var comment;

$(document).on('click','.Question_Click_Q1',function(){
$('.Q1_option_main_block').load( 'questions/Q1_page.php' );
$(document).on('change','.fac_data', function(){
sel_fac_data_val = $(this).val();
fac_val = $(this).attr('data-value');
$('#'+fac_val+'_val').val(sel_fac_data_val);
	$('#Q1_'+fac_val+'_block').load('questions/faculty/Q1_'+fac_val+'.php');


	$(document).on('change','.Q1_'+fac_val,function(){
		fac_star_val=$(this).attr('data-value');
		var star_q;
		if(fac_star_val=='S1'){
	star_q=1;
}
else if(fac_star_val=='S2'){
	star_q=2;
}
else if(fac_star_val=='S3')
{
	star_q=3;
}
else if(fac_star_val=='S4') {
	star_q=4;
}
else{
	star_q=5;
}
		//$('#Q1_'+fac_val+'_AnsStar').val(fac_star_val);
		$('#Q1_'+fac_val+'_AnsStar').val(star_q);
		$('.Q1_'+fac_val+'_star_Options').hide();
		$('#Q1_'+fac_val+'_'+fac_star_val+'_optBlock').show();
$(document).on('change','.Q1_S_'+fac_val+'_Opt',function(){
	
		comment=$(this).val();
		$('#'+fac_val+'_comment').val(comment);

	});

	});
	





	});

	$(document).on('click','#Q1_Click',function(){

		F1_star=$('#Q1_F1_AnsStar').val();
		F2_star=$('#Q1_F2_AnsStar').val();
		F3_star=$('#Q1_F3_AnsStar').val();

		F1_val=$('#F1_val').val();
		F2_val=$('#F2_val').val();
		F3_val=$('#F3_val').val();

		F1_comment=$('#F1_comment').val();
		F2_comment=$('#F2_comment').val();
		F3_comment=$('#F3_comment').val();

		fac_city=$('#city_id').val();
		fac_cand=$('#candidate_id').val();

		if((F1_val=='')||(F2_val=='')||(F3_val=='')||(F1_star=='')||(F2_star=='')||(F3_star=='')||(F1_comment=='')||(F2_comment=='')||(F3_comment=='')||(F1_val==F2_val)||(F1_val==F3_val)||(F2_val==F3_val)){
			// $(this).removeAttr('data-toggle');
			$('#error_fac').html('<label class="col-md-12 control-label"  style="margin-bottom: 10px;color:red"><center>Please check the data you have filled , also note Faculty should not be repeated</center></label>');
			$(this).attr('disabled','disabled');
			//$('#collapseOne').collapse('hide');
		}
else
{
	$('#error_fac').html('');
		$('#Q1_Click').attr('data-toggle','collapse');

		$.ajax({
                        type: "POST",
                        url: "action_pages/ajax/ajax_faculty.php",
                        data:{
                        		F1_val:F1_val,
                        		F2_val:F2_val,
                        		F3_val:F3_val,
                        		F1_star:F1_star,
                        		F2_star:F2_star,
                        		F3_star:F3_star,
                        		F1_comment:F1_comment,
                        		F2_comment:F2_comment,
                        		F3_comment:F3_comment,
                        		fac_city:fac_city,
                        		fac_cand:fac_cand
                        	},
                        success: function(response){
                        	//console.log(response);

                        	var status=response;
                            	if(status=="success"){
                            		$('.error_message').html('').show();
                            		$('.Q1_collapse').removeAttr('data-toggle').css('cursor','text').parent('h4').parent('div').css('background-color','#ddd').click(function(){
                            			$('.error_message').css('color','red').text('Rating already submitted');
                            		});
                            		$('.error_message').css('color','green').text('Rating successfully submitted');
                            		$('#collapseOne').collapse('hide');
                          	}
                            	else{
                            		$('.error_message').html('').show();
                            		$('.Q1_collapse').attr('data-toggle','collapse');

                            		$('.error_message').css('color','red').text('please check the option you have selected');
                            	}
                            		if((($('.Q1_collapse').attr('data-toggle'))=='collapse')||(($('.Q2_collapse').attr('data-toggle'))=='collapse')||(($('.Q3_collapse').attr('data-toggle'))=='collapse')||(($('.Q4_collapse').attr('data-toggle'))=='collapse')||(($('.Q5_collapse').attr('data-toggle'))=='collapse')){
				$('.feedDone').attr('disabled','disabled');
				$('#collapseOne').collapse('show');
			}
			else{
				$('.feedDone').removeAttr('disabled');
				$('.feedDone').on('click',function(){
			window.location.href ='http://52.66.108.174/MilesFeedback/thankyou.php';
		});
			}

                        }   
});
	}


	});
		

	});

})