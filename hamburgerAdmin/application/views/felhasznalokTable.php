



<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Admin
      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
      <table id="felhasznalo">
        <thead>
          <tr>
            <th>Id</th>
            <th>Név</th>
            <th>Email cím</th>
            <th>Érvényesség</th>
            <th>Regisztráció dátuma</th>
            <th>Törlés dátuma</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($felhasznalok)) {
            foreach($felhasznalok as $key => $felhasznalo){

           ?>
          <tr>
            <td><?php print($felhasznalo['id']); ?></td>
            <td><?php print($felhasznalo['felhasznalonev']); ?></td>
            <td><?php print($felhasznalo['email']); ?></td>
            <td><?php print($felhasznalo['ervenyes_e']); ?></td>
            <td><?php print($felhasznalo['created_at']); ?></td>
            <td><?php print($felhasznalo['deleted_at']); ?></td>
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
