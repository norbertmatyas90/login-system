



<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Admin
      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
      <table id="hozzavalok">
        <thead>
          <tr>
            <th>Id</th>
            <th>Név</th>
            <th>hozzávaló #1</th>
            <th>hozzávaló #2</th>
            <th>hozzávaló #3</th>
            <th>hozzávaló #4</th>
            <th>hozzávaló #5</th>
            <th>hozzávaló #6</th>
            <th>hozzávaló #7</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($hozzavalok)) {
            foreach($hozzavalok as $key => $hozzavalo){

           ?>
          <tr>
            <td><?php print($hozzavalo['id']); ?></td>
            <td><?php print($hozzavalo['nev']); ?></td>
            <td><?php print($hozzavalo['hozzavalo1']); ?></td>
            <td><?php print($hozzavalo['hozzavalo2']); ?></td>
            <td><?php print($hozzavalo['hozzavalo3']); ?></td>
            <td><?php print($hozzavalo['hozzavalo4']); ?></td>
            <td><?php print($hozzavalo['hozzavalo5']); ?></td>
            <td><?php print($hozzavalo['hozzavalo6']); ?></td>
            <td><?php print($hozzavalo['hozzavalo7']); ?></td>
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
