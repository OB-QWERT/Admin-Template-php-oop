
<?php require_once "include/header.php";




include "action/BeginnerCrud.php";



$pdo = new BeginnerCrud();


$id = $_GET["edit"];




$tableName = "about";

$rt = $pdo->valueGet($tableName,$id);


?>


<div class="right_col" role="main">
  <div class="">

    <div class="page-title">
      <div class="title_left">
        <h3>Form Validation</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <form action="action/master.php" method="post" class="form-horizontal form-label-left" novalidate>
              <span class="section">About Us Update Form</span>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title"  required="required" value="<?php echo $rt['title']; ?>" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Detail 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="email" name="detail" value="<?php echo $rt['detail']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Vision 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="vision" class="form-control col-md-7 col-xs-12"><?php echo $rt['vision'] ?></textarea>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Mission 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="mission" class="form-control col-md-7 col-xs-12"><?php echo $rt['mission'] ?></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Privacy Policy
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="privacy"  class="form-control col-md-7 col-xs-12"><?php echo $rt['privacy_policy'] ?></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Advertisement
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="advertisement" class="form-control col-md-7 col-xs-12"><?php echo $rt['advertisement'] ?></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Terms of Use 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="terms_of_use" class="form-control col-md-7 col-xs-12"><?php echo $rt['terms_of_use'] ?></textarea>
                </div>
              </div>

              <input type="hidden" name="id" value="<?php echo $rt["id"]; ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button name="aboutUpdateBtn" id="send" type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>





            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once "include/footer.php"; ?>