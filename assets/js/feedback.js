$(document).ready(function(){
		var value;
		var value_1;
		var ques_no;

		$('.Q_Click').attr('disabled','disabled');

		// ---- ################ Q1 Functionality block Begins ################ -----//

		$('.Q1').on('change',function(){
			$('#Q1_Click').removeAttr('disabled','disabled');
			value_1='';
			value='';
			ques_no='';
			$('#Q1_AnsStar').val('');
			value=$(this).val();
		 	$('#Q1_AnsStar').val(value);
		 	ques_no=$('#Q1_AnsStar').attr('data-value');
			if(value=='Q1_S5'){
			 	$('.Q1_star_Options').css('display','none');
			 	$('#Q1_star5_optBlock').css('display','block');
			 	$('.Q1_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
		 	else if(value=='Q1_S4'){
			 	$('.Q1_star_Options').css('display','none');
			 	$('#Q1_star4_optBlock').css('display','block');
			 	$('.Q1_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
		 	}
			else if(value=='Q1_S3'){
			 	$('.Q1_star_Options').css('display','none');
			 	$('#Q1_star3_optBlock').css('display','block');
			 	$('.Q1_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q1_S2'){
			 	$('.Q1_star_Options').css('display','none');
			 	$('#Q1_star2_optBlock').css('display','block');
			 	$('.Q1_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q1_S1'){
			 	$('.Q1_star_Options').css('display','none');
			 	$('#Q1_star1_optBlock').css('display','block');
			 	$('.Q1_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});

			}
			else{
			 	$('.Q1_star_Options').css('display','none');
			 	$('#Q1_Click').attr('disabled','disabled');
			}
		});

	// ---- ################ Q1 Functionality block Ends ################ -----//
	// ---- ################ Q2 Functionality block Begins ################ -----//

		$('.Q2').on('change',function(){
			$('#Q2_Click').removeAttr('disabled','disabled');
			value_1='';
			value='';
			ques_no='';
			$('#Q2_AnsStar').val('');
			value=$(this).val();
		 	$('#Q2_AnsStar').val(value);
		 	ques_no=$('#Q2_AnsStar').attr('data-value');
			if(value=='Q2_S5'){
			 	$('.Q2_star_Options').css('display','none');
			 	$('#Q2_star5_optBlock').css('display','block');
			 	$('.Q2_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
		 	else if(value=='Q2_S4'){
			 	$('.Q2_star_Options').css('display','none');
			 	$('#Q2_star4_optBlock').css('display','block');
			 	$('.Q2_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
		 	}
			else if(value=='Q2_S3'){
			 	$('.Q2_star_Options').css('display','none');
			 	$('#Q2_star3_optBlock').css('display','block');
			 	$('.Q2_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q2_S2'){
			 	$('.Q2_star_Options').css('display','none');
			 	$('#Q2_star2_optBlock').css('display','block');
			 	$('.Q2_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q2_S1'){
			 	$('.Q2_star_Options').css('display','none');
			 	$('#Q2_star1_optBlock').css('display','block');
			 	$('.Q2_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});

			}
			else{
			 	$('.Q2_star_Options').css('display','none');
			 	$('#Q2_Click').attr('disabled','disabled');
			}
		});

	// ---- ################ Q2 Functionality block Ends ################ -----//
	// ---- ################ Q3 Functionality block Begins ################ -----//

		$('.Q3').on('change',function(){
			$('#Q3_Click').removeAttr('disabled','disabled');
			value_1='';
			value='';
			ques_no='';
			$('#Q3_AnsStar').val('');
			value=$(this).val();
		 	$('#Q3_AnsStar').val(value);
		 	ques_no=$('#Q3_AnsStar').attr('data-value');
			if(value=='Q3_S5'){
			 	$('.Q3_star_Options').css('display','none');
			 	$('#Q3_star5_optBlock').css('display','block');
			 	$('.Q3_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
		 	else if(value=='Q3_S4'){
			 	$('.Q3_star_Options').css('display','none');
			 	$('#Q3_star4_optBlock').css('display','block');
			 	$('.Q3_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
		 	}
			else if(value=='Q3_S3'){
			 	$('.Q3_star_Options').css('display','none');
			 	$('#Q3_star3_optBlock').css('display','block');
			 	$('.Q3_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q3_S2'){
			 	$('.Q3_star_Options').css('display','none');
			 	$('#Q3_star2_optBlock').css('display','block');
			 	$('.Q3_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q3_S1'){
			 	$('.Q3_star_Options').css('display','none');
			 	$('#Q3_star1_optBlock').css('display','block');
			 	$('.Q3_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});

			}
			else{
			 	$('.Q3_star_Options').css('display','none');
			 	$('#Q3_Click').attr('disabled','disabled');
			}
		});

	// ---- ################ Q3 Functionality block Ends ################ -----//
	// ---- ################ Q4 Functionality block Begins ################ -----//

		$('.Q4').on('change',function(){
			$('#Q4_Click').removeAttr('disabled','disabled');
			value_1='';
			value='';
			ques_no='';
			$('#Q4_AnsStar').val('');
			value=$(this).val();
		 	$('#Q4_AnsStar').val(value);
		 	ques_no=$('#Q4_AnsStar').attr('data-value');
			if(value=='Q4_S5'){
			 	$('.Q4_star_Options').css('display','none');
			 	$('#Q4_star5_optBlock').css('display','block');
			 	$('.Q4_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
		 	else if(value=='Q4_S4'){
			 	$('.Q4_star_Options').css('display','none');
			 	$('#Q4_star4_optBlock').css('display','block');
			 	$('.Q4_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
		 	}
			else if(value=='Q4_S3'){
			 	$('.Q4_star_Options').css('display','none');
			 	$('#Q4_star3_optBlock').css('display','block');
			 	$('.Q4_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q4_S2'){
			 	$('.Q4_star_Options').css('display','none');
			 	$('#Q4_star2_optBlock').css('display','block');
			 	$('.Q4_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q4_S1'){
			 	$('.Q4_star_Options').css('display','none');
			 	$('#Q4_star1_optBlock').css('display','block');
			 	$('.Q4_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});

			}
			else{
			 	$('.Q4_star_Options').css('display','none');
			 	$('#Q4_Click').attr('disabled','disabled');
			}
		});

	// ---- ################ Q4 Functionality block Ends ################ -----//
	// ---- ################ Q5 Functionality block Begins ################ -----//

		$('.Q5').on('change',function(){
			$('#Q5_Click').removeAttr('disabled','disabled');
			value_1='';
			value='';
			ques_no='';
			$('#Q5_AnsStar').val('');
			value=$(this).val();
		 	$('#Q5_AnsStar').val(value);
		 	ques_no=$('#Q5_AnsStar').attr('data-value');
			if(value=='Q5_S5'){
			 	$('.Q5_star_Options').css('display','none');
			 	$('#Q5_star5_optBlock').css('display','block');
			 	$('.Q5_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
		 	else if(value=='Q5_S4'){
			 	$('.Q5_star_Options').css('display','none');
			 	$('#Q5_star4_optBlock').css('display','block');
			 	$('.Q5_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
		 	}
			else if(value=='Q5_S3'){
			 	$('.Q5_star_Options').css('display','none');
			 	$('#Q5_star3_optBlock').css('display','block');
			 	$('.Q5_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q5_S2'){
			 	$('.Q5_star_Options').css('display','none');
			 	$('#Q5_star2_optBlock').css('display','block');
			 	$('.Q5_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});
			}
			else if(value=='Q5_S1'){
			 	$('.Q5_star_Options').css('display','none');
			 	$('#Q5_star1_optBlock').css('display','block');
			 	$('.Q5_S_Opt').on('change',function(){
			 		value_1=$(this).val();
			 	});

			}
			else{
			 	$('.Q5_star_Options').css('display','none');
			 	$('#Q5_Click').attr('disabled','disabled');
			}
		});

	// ---- ################ Q5 Functionality block Ends ################ -----//


});