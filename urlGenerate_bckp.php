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
   
   <div class = "panel-body">
     <table id="example1" class="table-bordered table-striped display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>

                <th>Select City of Batch</th>
                <th>Enter Batch Date</th>
                <th>Catagory for Url</th>
                <th>Custom Heading</th>
                <th>Co-ordinator 1</th>
                <th>Co-ordinator 2</th>
                <th>Co-ordinator 3</th>
                <th>Primary Faculty</th>
                <th>Faculty 2</th>
                <th>Faculty 3</th>
                <th>Academic Co-ordinator</th>
                <th>Batch Url</th>

            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>
                  <select class="form-control user_data" id="user_email" name="user_email" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select>
                </td>
                <td> <input id="input-date" type="date"  class="form-control myDatePicker" placeholder="Batch date" style="border-bottom:0px !important"></td>
                <td>
                  <select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select Catagory</option>
                <option value="Retail">Retail</option>
                <option value="BD">Business Development</option>
                <option value="CR">Corporate Relation</option>
              </select>
                </td>
                <td>
                 <select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select>
              </td>
                <td>
                  <select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select>
                </td>
                <td>
                <select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select>
                </td>
                <td>
                  <select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select>
                </td>
                <td>
                <select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select>
              </td>
                <td><select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select></td>
                <td><select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select></td>
                <td><select class="form-control user_data" id="user_city" name="user_city" required="" style="padding: 0">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kochi">Kochi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="All India">All India</option>
              </select></td>
                <td>
                <input type="text" id="user_pwd" class="form-control user_data" name="user_pwd" required>
            </td>
            </tr>
            </tbody>
            </table>
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
</html>