
<?php require_once "include/header.php"; ?>


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

            <form action="islem/islem.php" method="post" class="form-horizontal form-label-left" novalidate>
              <span class="section">About Us Add Form</span>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Filmin Adı 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="filminadi"  required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Filmin Konusu
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="email" name="filminkonusu" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Filmin Türü
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="filminturu" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Yönetmen
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="yonetmen" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Puan
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="textarea" required="required" name="puan" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
              </div>


            

             



              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button name="filmBtn" id="send" type="submit" class="btn btn-success">Submit</button>
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