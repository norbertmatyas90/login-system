



<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Admin
      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
      <table id="kategoria">
        <thead>
          <tr>
            <th>Id</th>
            <th>Név</th>
            <th>Kategória</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($kategoriak)) {
            foreach($kategoriak as $key => $kategoria){

           ?>
          <tr>
            <td><?php print($kategoria['id']); ?></td>
            <td><?php print($kategoria['nev']); ?></td>
            <td><?php print($kategoria['hamburger_tipus']); ?></td>
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
