<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miles Feedback | </title>
  <?php include("common/header.php") ?>
</head>
<style type="text/css" media="screen">
.headerimage{width: 200px;border-radius: 100%;box-shadow:0px 20px 20px -20px #000000;}
.tdText{vertical-align: middle;width:100%;font-weight: 800;font-size: 16px;letter-spacing: 0.5px;text-align: left;}
.tdRadio{vertical-align: middle;}

input[type=date]::-webkit-inner-spin-button, 
input[type=date]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
input[type=search],input[type=date],input[type=text]{
  font-size: 1em;
}
#example1_filter label, #example1_length label{
    font-size: 1em;
    font-weight: normal;
}

.myDatePicker,input[type=text]
{
  padding-right: 0px !important;
    padding-left: 4px !important;
}
</style>
<body>
  <div class="container-fluid">
    <img src="assets/images/miles-edu-logo.png" alt="" style="padding: 2em 0em 2em 2em">
    <section class="pricing-section">
      <div class="pricing pricing--palden">
        <div class="pricing__item" style="min-width: 100%;">
          <div class="pricing__deco" style="padding-top: 2em">
            <?php include("common/svg_Design.php") ?>
            <h3 style="color:#fff;">FeedBack URL Generation</h3>
      
          </div>
          <div style="z-index: 2;">
      <!-- // Heading For Wizard -->
      <!-- Heading For Wizard // -->
      <div class="col-md-12">
      <div class = "panel panel-primary">
   <div class = "panel-heading text-left">
      <h3 class = "panel-title">Generator Panel</h3>
   </div>
   <?php include ('common/connection.php');
   $sql_cat="SELECT * FROM tbl_catagory";
   $result_cat=$mysqli->query($sql_cat);
   $result2_cat=$mysqli->query($sql_cat);

   $sql_course="SELECT * FROM tbl_course WHERE int_course_id != 3";
   $result_course=$mysqli->query($sql_course);
   $result2_course=$mysqli->query($sql_course);

   $sql_f1="SELECT * FROM tbl_faculty WHERE txt_fal_role='NI'";
   $result_f1=$mysqli->query($sql_f1);
   $result2_f1=$mysqli->query($sql_f1);

   $sql_f2="SELECT * FROM tbl_faculty WHERE txt_fal_role='IH'";
   $result_f2=$mysqli->query($sql_f2);
   $result2_f2=$mysqli->query($sql_f2);

   $sql_f3="SELECT * FROM tbl_faculty WHERE txt_fal_role='VF'";
   $result_f3=$mysqli->query($sql_f3);
   $result2_f3=$mysqli->query($sql_f3);
   ?>
   <div class = "panel-body">
   	<!-- <form action="action_pages/dataCapture.php" method="POST"> -->
     <table id="example1" class="table-bordered table-striped display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Enter Batch Date</th>
                <th>Catagory for Url</th>
                <th>Select City/Univ/Comp</th>
                <th>Select Course</th>
                <th>Co-ordinator 1</th>
                <th>Co-ordinator 2</th>
                <th>Co-ordinator 3</th>
                <th>Primary Faculty</th>
                <th>Faculty 2</th>
                <th>Faculty 3</th>
                <th>Action</th>
                <th>Batch Url</th>

            </tr>
        </thead>
        
        <tbody>
          <!-- ############################### URL-1 Content Begin ############################### -->
	          <tr>
	            <td> 
	              <input id="input-date url_date" type="date" name="input-date1" class="form-control myDatePicker" placeholder="Batch date" style="border-bottom:0px !important">
	            </td>
	            <td>
	              <select class="form-control urlcat" id="url1_cat" name="url1_cat" required="" style="padding: 0">
	                <option value="">Select Catagory</option>
	                <?php while($row_cat=$result_cat->fetch_assoc()){?>
	                <option value="<?php echo $row_cat['int_cat_id'];?>"><?php echo $row_cat['txt_cat'];?></option>
	                <?php }?>
	              </select>
	            </td>

	            <td>
	             	<select class="form-control urlCity" id="url1_city" name="url1_city" required="" style="padding: 0">
	              	<option value="">Select City/Univ/Corporate</option>
	              </select>
	            </td>
	          	<td>
		            <select class="form-control user_data" id="url1_course" name="url1_course" required="" style="padding: 0">
		              <option value="">Select Course</option>
		              <?php while($row_course=$result_course->fetch_assoc()){?>
		              <option value="<?php echo $row_course['int_course_id'];?>"><?php echo $row_course['txt_course'];?></option>
		              <?php }?>
		            </select>
	          	</td>
	          	<td>
		            <select class="form-control user_data" id="url1_cod_1" name="url1_cod_1" required="" style="padding: 0">
		              <option value="">Select Coordinator</option>
		              <?php
		              $sql_cord="SELECT * FROM tbl_SPOC";
		              $result_cord=$mysqli->query($sql_cord);
		              while($row_cod1=$result_cord->fetch_assoc()){?>
		              <option value="<?php echo $row_cod1['int_cord_id'];?>"><?php echo $row_cod1['txt_cord'];?></option>
		              <?php }?>
		            </select>
	          	</td>
		          <td>
		            <select class="form-control user_data" id="url1_cod_2" name="url1_cod_2" style="padding: 0">
		              <option value="">Select Coordinator</option>
		              <?php
		              $sql_cord="SELECT * FROM tbl_SPOC";
		              $result_cord=$mysqli->query($sql_cord);
		              while($row_cod2=$result_cord->fetch_assoc()){?>
		              <option value="<?php echo $row_cod2['int_cord_id'];?>"><?php echo $row_cod2['txt_cord'];?></option>
		              <?php }?>
		            </select>
		          </td>
		          <td>
		            <select class="form-control user_data" id="url1_cod_3" name="url1_cod_3" style="padding: 0">
		              <option value="">Select Coordinator</option>
		              <?php
		              $sql_cord="SELECT * FROM tbl_SPOC";
		              $result_cord=$mysqli->query($sql_cord);
		              while($row_cod3=$result_cord->fetch_assoc()){?>
		              <option value="<?php echo $row_cod3['int_cord_id'];?>"><?php echo $row_cod3['txt_cord'];?></option>
		              <?php }?>
		            </select>
		          </td>
		          <td>
		            <select class="form-control user_data" id="url1_fac_1" name="url1_fac_1" required="" style="padding: 0">
		              <option value="">Select Faculty</option>
		              <?php
		              while($row_f1=$result_f1->fetch_assoc()){?>
		              <option value="<?php echo $row_f1['int_fal_id'];?>"><?php echo $row_f1['txt_fal_fname'].' '.$row_f1['txt_fal_lname'];?></option>
		              <?php }?>
		            </select>
		          </td>
		          <td>
		          	<select class="form-control user_data" id="url1_fac_2" name="url1_fac_2" required="" style="padding: 0">
			            <option value="">Select Faculty</option>
			            <?php
			            while($row_f2=$result_f2->fetch_assoc()){?>
			            <option value="<?php echo $row_f2['int_fal_id'];?>"><?php echo $row_f2['txt_fal_fname'].' '.$row_f2['txt_fal_lname'];?></option>
			            <?php }?>
		          	</select>
		        	</td>
	          	<td>
	          		<select class="form-control user_data" id="url1_fac_3" name="url_fac_3" required="" style="padding: 0">
		            <option value="">Select Faculty</option>
		            <?php
		            while($row_f3=$result_f3->fetch_assoc()){?>
		            <option value="<?php echo $row_f3['int_fal_id'];?>"><?php echo $row_f3['txt_fal_fname'].' '.$row_f3['txt_fal_lname'];?></option>
		            <?php }?>
	          		</select>
	          	</td>
		          <td>
		            <button type="submit" class="btn btn-purple generateUrl" id="generateUrl1" data-value="1">Generate URL</button>
		          </td>
		          <td>
		            <input type="text" id="url1" class="form-control user_data" name="url1" required>
		          </td>
	        	</tr>
      		<!-- ############################### URL-1 Content Begin ############################### -->
      		<!-- ############################### URL-2 Content Begin ############################### -->
	          <tr>
	            <td> 
	              <input id="input-date url_date" type="date" name="input-date2" class="form-control myDatePicker" placeholder="Batch date" style="border-bottom:0px !important">
	            </td>
	            <td>
	              <select class="form-control urlcat" id="url2_cat" name="url2_cat" required="" style="padding: 0">
	                <option value="">Select Catagory</option>
	                <?php while($row_cat2=$result2_cat->fetch_assoc()){?>
	                <option value="<?php echo $row_cat2['int_cat_id'];?>"><?php echo $row_cat2['txt_cat'];?></option>
	                <?php }?>
	              </select>
	            </td>

	            <td>
	             	<select class="form-control urlCity" id="url2_city" name="url2_city" required="" style="padding: 0">
	              	<option value="">Select City/Univ/Corporate</option>
	              </select>
	            </td>
	          	<td>
		            <select class="form-control user_data" id="url2_course" name="url2_course" required="" style="padding: 0">
		              <option value="">Select Course</option>
		              <?php while($row_course2=$result2_course->fetch_assoc()){?>
		              <option value="<?php echo $row_course2['int_course_id'];?>"><?php echo $row_course2['txt_course'];?></option>
		              <?php }?>
		            </select>
	          	</td>
	          	<td>
		            <select class="form-control user_data" id="url2_cod_1" name="url2_cod_1" required="" style="padding: 0">
		              <option value="">Select Coordinator</option>
		              <?php
		              $sql_cord="SELECT * FROM tbl_SPOC";
		              $result_cord=$mysqli->query($sql_cord);
		              while($row2_cod1=$result_cord->fetch_assoc()){?>
		              <option value="<?php echo $row2_cod1['int_cord_id'];?>"><?php echo $row2_cod1['txt_cord'];?></option>
		              <?php }?>
		            </select>
	          	</td>
		          <td>
		            <select class="form-control user_data" id="url2_cod_2" name="url2_cod_2" style="padding: 0">
		              <option value="">Select Coordinator</option>
		              <?php
		              $sql_cord="SELECT * FROM tbl_SPOC";
		              $result_cord=$mysqli->query($sql_cord);
		              while($row2_cod2=$result_cord->fetch_assoc()){?>
		              <option value="<?php echo $row2_cod2['int_cord_id'];?>"><?php echo $row2_cod2['txt_cord'];?></option>
		              <?php }?>
		            </select>
		          </td>
		          <td>
		            <select class="form-control user_data" id="url2_cod_3" name="url2_cod_3" style="padding: 0">
		              <option value="">Select Coordinator</option>
		              <?php
		              $sql_cord="SELECT * FROM tbl_SPOC";
		              $result_cord=$mysqli->query($sql_cord);
		              while($row2_cod3=$result_cord->fetch_assoc()){?>
		              <option value="<?php echo $row2_cod3['int_cord_id'];?>"><?php echo $row2_cod3['txt_cord'];?></option>
		              <?php }?>
		            </select>
		          </td>
		          <td>
		            <select class="form-control user_data" id="url2_fac_1" name="url2_fac_1" required="" style="padding: 0">
		              <option value="">Select Faculty</option>
		              <?php
		              while($row2_f1=$result2_f1->fetch_assoc()){?>
		              <option value="<?php echo $row2_f1['int_fal_id'];?>"><?php echo $row2_f1['txt_fal_fname'];?></option>
		              <?php }?>
		            </select>
		          </td>
		          <td>
		          	<select class="form-control user_data" id="url2_fac_2" name="url2_fac_2" required="" style="padding: 0">
			            <option value="">Select Faculty</option>
			            <?php
			            while($row2_f2=$result2_f2->fetch_assoc()){?>
			            <option value="<?php echo $row2_f2['int_fal_id'];?>"><?php echo $row2_f2['txt_fal_fname'];?></option>
			            <?php }?>
		          	</select>
		        	</td>
	          	<td>
	          		<select class="form-control user_data" id="url2_fac_3" name="url2_fac_3" required="" style="padding: 0">
		            <option value="">Select Faculty</option>
		            <?php
		            while($row3_f3=$result2_f3->fetch_assoc()){?>
		            <option value="<?php echo $row3_f3['int_fal_id'];?>"><?php echo $row3_f3['txt_fal_fname'];?></option>
		            <?php }?>
	          		</select>
	          	</td>
		          <td>
		            <button type="submit" class="btn btn-purple generateUrl" id="generateUrl2" data-value="1">Generate URL</button>
		          </td>
		          <td>
		            <input type="text" id="url2" class="form-control user_data" name="url2" required>
		          </td>
	        	</tr>
      		<!-- ############################### URL-2 Content Begin ############################### -->
        </tbody>
      </table>
    <!-- </form> -->
   </div>
</div>
      </div>
<div class="col-md-12">

</div>
      <!-- // Hidden Form Revils -->
            
      <!-- Hidden Form Revils // -->
          </div>
          <button class="pricing__action">Submit &amp; Next</button>
        </div>
      </div>
    </section>
    <p style="color:#fff; text-align: center;"> Only For Enroll Candidates<br>Copyright &copy; 2017 | Miles Professional Exam Review (I) Pvt. Ltd.</p>
  </div>
</body>
<?php include('common/footer.php');?>
<script type="text/javascript">
$(document).ready(function(){

  var url_cat;
  var url_cat_id;
  var click_val;
  $('.urlcat').on('change',function(){
    url_cat=$(this).val();
    url_cat_id=$(this).attr('id');
    // alert(url_cat_id);
      $.ajax({
                    type: "POST",
                    url: "action_pages/ajax/url_content_ajax.php",
                    data:{url_cat:url_cat},
                    success: function(response){
                        console.log(response);
                        $('#'+url_cat_id).parent('td').siblings('td').children('.urlCity').html(response);
                       //$('#url1_city').html(response);

                    }
                });
  });
  $('.generateUrl').on('click',function(){
  	click_val=$(this).attr('data-value');
  	var date_val;
  	date_val=$(".myDatePicker[name=input-date"+click_val+"]").val();
  	alert(date_val);
  	// $.ajax({
   //                  type: "POST",
   //                  url: "action_pages/ajax/url_content_ajax.php",
   //                  data:{url_cat:url_cat},
   //                  success: function(response){
   //                      console.log(response);
   //                     $('#url1_city').html(response);

   //                  }
   //              });
  	});

})
</script>
</html>