



<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Admin
      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
      <table id="felhasznaloRecept">
        <thead>
          <tr>
            <th>Id</th>
            <th>Kép</th>
            <th>Megnevezés</th>
            <th>Hozzávalók</th>
            <th>Recept leírása</th>
            <th>Kategória</th>
            <th>Felhasználó</th>
            <th>ervenyesseg</th>
            <th>feltöltés dátuma</th>
            <th>Törlés dátuma</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($f_receptek)) {
            foreach($f_receptek as $key => $f_recept){

           ?>
          <tr>
            <td><?php print($f_recept['id']); ?></td>
            <td><?php print($f_recept['f_kep']); ?></td>
            <td><?php print($f_recept['f_recept_neve']); ?></td>
            <td><?php print($f_recept['f_hozzavalok']); ?></td>
            <td><?php print($f_recept['f_elkeszites']); ?></td>
            <td><?php print($f_recept['hamburger_tipus']); ?></td>
            <td><?php print($f_recept['felhasznalonev']); ?></td>
            <td><?php print($f_recept['ervenyes_e']); ?></td>
            <td><?php print($f_recept['created_at']); ?></td>
            <td><?php print($f_recept['deleted_at']); ?></td>
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
