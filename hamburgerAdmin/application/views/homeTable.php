



<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Admin
      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
      <table id="hamburgerek">
        <thead>
          <tr>
            <th>Id</th>
            <th>Név</th>
            <th>Rövid leírás</th>
            <th>Törlés</th>
            <th>Módosítás</th>
            <th>Bevitel</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($hamburgerek)) {
            foreach($hamburgerek as $key => $hamburger){

           ?>
          <tr>
            <td><?php print($hamburger['id']); ?></td>
            <td><?php print($hamburger['nev']); ?></td>
            <td><?php print($hamburger['rovid_leiras']); ?></td>
            <td><a href="index.php/Home/deleteQuestion?id=<?php print($hamburger['id']);?>" class="btn btn-sm btn-danger">Törlés</a></td>
            <td><a href="index.php/Home/editData?id=<?php print($hamburger['id']);?>" class="btn btn-sm btn-warning">Módosít</a></td>
            <td><a href="index.php/Home/insertDataTable" class="btn btn-sm btn-success">Új recept felvétele</a></td>
          </tr>
          <?php
          }
        }
           ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
