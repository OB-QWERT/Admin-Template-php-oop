
<?php


 require_once "include/header.php";
require_once "islem/islem.php";




$filmsor=$db->prepare("SELECT * FROM film");
$filmsor->execute();








?>

<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Responsive example <small>Users</small></h2>
          <ul class="nav navbar-right panel_toolbox">

           <a href="filmekle.php"><button class="btn btn-success">New Add</button></a>
           
         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>id</th>
              <th>filmad</th>
              <th style="width: 50px;">filmkonu</th>
              <th>filmtur</th>
              <th>yonetmen</th>
              <th>puan</th>
              <th>durum</th>

            </tr>
          </thead>
          <tbody>
    


    <?php 

while ($filmcek=$filmsor->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                
                <td><?php echo $filmcek["id"] ?></td>
                <td><?php echo $filmcek["filmad"] ?></td>
                <td><?php echo $filmcek["filmkonu"] ?></td>
                <td><?php echo $filmcek["filmtur"] ?></td>
                <td><?php echo $filmcek["yonetmen"] ?></td>
                <td><?php echo $filmcek["puan"] ?></td>
               <td><a href="film-guncelle.php?id=<?php echo $filmcek["id"]; ?>"><button class="btn btn-primary btn-xs">Güncelle</button></a>
                <a href="islem/islem.php?id=<?php echo $filmcek["id"]; ?>"><button class="btn btn-danger btn-xs">sil</button></a></td>
             </tr>
         <?php } ?>
       </tbody>
     </table>

   </div>
 </div>
</div>

</div>
<!-- /top tiles -->

</div>


<!-- /page content -->


<?php require_once "include/footer.php"; ?>