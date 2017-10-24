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
</style>
<body>
  <div class="container">
    <img src="assets/images/miles-edu-logo.png" alt="">
    <section class="pricing-section">
      <div class="pricing pricing--palden">
        <div class="pricing__item" style="min-width: 100%;">
          <div class="pricing__deco">
            <?php include("common/svg_Design.php") ?>

      <!-- // Image & Name -->
            <div class="pricing__price"><img class="headerimage" src="assets/images/VarunJain.jpg"></div>
            <h3 style="color:#fff;">Varun Jain</h3>
      <!-- Image & Name // -->

      <!-- // Stars -->
            <div class="stars">
              <input class="star star-5 star_click starN" id="star-5" type="radio" name="q_star" value="5" data-value="S5" data-id="N">
              <label class="star star-5" for="star-5"></label>
              <input class="star star-4 star_click starN" id="star-4" type="radio" name="q_star" value="4" data-value="S4" data-id="N">
              <label class="star star-4" for="star-4"></label>
              <input class="star star-3 star_click starN" id="star-3" type="radio" name="q_star" value="3" data-value="S3" data-id="N">
              <label class="star star-3" for="star-3"></label>
              <input class="star star-2 star_click starN" id="star-2" type="radio" name="q_star" value="2" data-value="S2" data-id="N">
              <label class="star star-2" for="star-2"></label>
              <input class="star star-1 star_click starN" id="star-1" type="radio" name="q_star" value="1" data-value="S1" data-id="N">
              <label class="star star-1" for="star-1"></label>
            </div>
      <!-- Stars // -->
          </div>
          <div style="z-index: 2;">
      <!-- // Heading For Wizard -->
            <p class="pricing__feature" style="margin-top: -80px;font-size: 20px;">How would you rate our Centre Manager / University Coordinator?</p>
      <!-- Heading For Wizard // -->

      <!-- // Hidden Form Revils -->
            <form class="form-horizontal">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h4 class="text-center"><span></span></h4>
                    <input type="hidden" value="2" name="question" class="question">
                    <input type="hidden" value="cm" name="cat_val" class="cat_val">
                </div>

                <div id="N_block" style="display: none;">
                  <div class="from-group">
                      <div class="col-md-10 col-md-offset-1"><table><tbody><tr>
                        <td class="tdText">Better organization of content</td>
                        <td class="tdRadio"><input type="checkbox" class="form-control faChkRnd check_status31" name="option[]" style="color: #3360af;" value="Better organization of content"></td>
                      </tr></tbody></table></div>
                  </div>
                  <div class="from-group">
                      <div class="col-md-10 col-md-offset-1"><table><tbody><tr>
                        <td class="tdText">Better organization of content</td>
                        <td class="tdRadio"><input type="checkbox" class="form-control faChkRnd check_status31" name="option[]" style="color: #3360af;" value="Better organization of content"></td>
                      </tr></tbody></table></div>
                  </div>
                  <div class="col-md-10 col-md-offset-1">
                      <div class="form-group">
                          <textarea type="text" class="form-control" id="form8" placeholder="  Leave a Message"></textarea>
                      </div>
                  </div>
                </div>

                <input type="hidden" name="star_val" id="star_val" class="star_val">
              </div>
            </form>
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