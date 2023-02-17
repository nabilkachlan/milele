<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milele</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm card">
          <input type="hidden" id="supplier" value="<?php print_r($_GET['supplier']); ?>">
          Supplier: <?php print_r($_GET['supplier']); ?>
        </div>
        <div class="col-sm card">
          <input type="hidden" id="wholeSeller" value="<?php print_r($_GET['wholeSeller']); ?>">
          Whole Seller: <?php print_r($_GET['wholeSeller']); ?>
        </div>
        <div class="col-sm card">
          <input type="hidden" id="steeringType" value="<?php print_r($_GET['steeringType']); ?>">
          Steering Type: <?php print_r($_GET['steeringType']); ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="model">Model</label>
            <select class="form-control" id="model" name="model">
              <option value="" disabled selected>Select one</option>
              <option value="Model One">Model One</option>
              <option value="Model Two">Model Two</option>
              <option value="Model Three">Model Three</option>
            </select>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="sfx">SFX</label>
            <select class="form-control" id="sfx" name="sfx" disabled="true">
              <option value="" disabled selected>Select one</option>
              <option value="A1">A1</option>
              <option value="B1">B1</option>
              <option value="A3">A3</option>
            </select>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="variant">Variant</label>
            <select class="form-control" id="variant" name="variant" disabled="true">
              <option value="" disabled selected>Select one</option>
              <option value="SomeCar_1">SomeCar_1</option>
              <option value="SomeCar_2">SomeCar_2</option>
              <option value="SomeCar_3">SomeCar_3</option>
            </select>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="color">Color</label>
            <select class="form-control" id="color" name="color" disabled="true">
              <option value="" disabled selected>Select one</option>
              <option value="Black">Black</option>
              <option value="White">White</option>
              <option value="Blue">Blue</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
        <tr>
          <th>Jan 2023</th>
          <th>Feb 2023</th>
          <th>Mar 2023</th>
          <th>Apr 2023</th>
          <th>May 2023</th>
          <th>Jun 2023</th>
          <th>Jul 2023</th>
          <th>Aug 2023</th>
          <th>Sep 2023</th>
          <th>Oct 2023</th>
          <th>Nov 2023</th>
          <th>Dec 2023</td>
          <th></td>
        </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
      </table>
      <button class="btn btn-primary" id="addRow">Add Row</button>
    </div>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($){
        var model, sfx, variant, color, newRow, id_edit, parentEdit;
        $('#model').on('change', function(){
          model = $(this).val();
          //checking the selected field value
          if(model != ""){
            $('#sfx').attr('disabled', false);
          }else{
            $('#sfx').attr('disabled', true);
          }
        });
        $('#sfx').on('change', function(){
          sfx = $(this).val();
          //checking the selected field value
          if(sfx != ""){
            $('#variant').attr('disabled', false);
          }else{
            $('#variant').attr('disabled', true);
          }
        });
        $('#variant').on('change', function(){
          variant = $(this).val();
          //checking the selected field value
          if(variant != ""){
            $('#color').attr('disabled', false);
          }else{
            $('#color').attr('disabled', true);
          }
        });
        $('#color').on('change', function(){
          color = $(this).val();
          //checking the selected field value
          if(color != ""){
            model = $('#model').val();
            sfx = $('#sfx').val();
            variant = $('#variant').val();
            color = $('#color').val();
            supplier = $('#supplier').val();
            wholeSeller = $('#wholeSeller').val();
            steeringType = $('#steeringType').val();
            $.ajax({
                type: 'GET',
                url: 'API/getRows.php',
                data: {
                  'model': model,
                  'sfx': sfx,
                  'variant': variant,
                  'color': color,
                  'supplier': supplier,
                  'steeringType': steeringType,
                  'wholeSeller': wholeSeller                },
                dataType:"json",
            }).done(function(response){
                console.log(response);
                $('#tableBody').html("");
                $('#tableBody').html(response.responseText);
            }).fail(function(response){
                console.log(response);
                $('#tableBody').html("");
                $('#tableBody').html(response.responseText);
            });
          }

        });
        newRow = "<tr class='removable'>";
        newRow += "<td><input type='text' id='Jan'></td>";
        newRow += "<td><input type='text' id='Feb'></td>";
        newRow += "<td><input type='text' id='Mar'></td>";
        newRow += "<td><input type='text' id='Apr'></td>";
        newRow += "<td><input type='text' id='May'></td>";
        newRow += "<td><input type='text' id='Jun'></td>";
        newRow += "<td><input type='text' id='Jul'></td>";
        newRow += "<td><input type='text' id='Aug'></td>";
        newRow += "<td><input type='text' id='Sep'></td>";
        newRow += "<td><input type='text' id='Oct'></td>";
        newRow += "<td><input type='text' id='Nov'></td>";
        newRow += "<td><input type='text' id='Dec'></td>";
        newRow += "<td><button class='btn btn-primary' id='newRowAdd'>Add Row To Database</button></td>";
        newRow += "</tr>";
        var Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec, supplier, wholeSeller, steeringType;
        $('#addRow').on('click', function(){
          $('#tableBody').append(newRow);
          $('#newRowAdd').on('click', function(){
            Jan = $('#Jan').val();
            Feb = $('#Feb').val();
            Mar = $('#Mar').val();
            Apr = $('#Apr').val();
            May = $('#May').val();
            Jun = $('#Jun').val();
            Jul = $('#Jul').val();
            Aug = $('#Aug').val();
            Aug = $('#Sep').val();
            Oct = $('#Oct').val();
            Nov = $('#Nov').val();
            Dec = $('#Dec').val();
            model = $('#model').val();
            sfx = $('#sfx').val();
            variant = $('#variant').val();
            color = $('#color').val();
            supplier = $('#supplier').val();
            wholeSeller = $('#wholeSeller').val();
            steeringType = $('#steeringType').val();
            $.ajax({
                type: 'POST',
                url: 'API/addRow.php',
                data: {
                  'Jan' : Jan,
                  'Feb' : Feb,
                  'Mar' : Mar,
                  'Apr' : Apr,
                  'May' : May,
                  'Jun' : Jun,
                  'Jul' : Jul,
                  'Aug' : Aug,
                  'Sep' : Sep,
                  'Oct' : Oct,
                  'Nov' : Nov,
                  'Dec' : Dec,
                  'model': model,
                  'sfx': sfx,
                  'variant': variant,
                  'color': color,
                  'supplier': supplier,
                  'wholeSeller': wholeSeller,
                  'steeringType': steeringType
                },
                dataType:"json",
            }).done(function(response){
            $('#color').trigger("change");
            }).fail(function(response){
            $('#color').trigger("change");
            });
            });
        });
        $('#tableBody').on('click', '.editablechild', function() {
            parentEdit = $(this).parent('.editable');
            id_edit = parentEdit.attr('data-id');
            value = $(this).html();
            parentEdit.html('<input type="number" class="editvalue" value="'+value+'" data-id="'+id_edit+'">');
        })
        $('#tableBody').on('dblclick', '.editvalue', function() {
          valueOfEdit = $(this).val();
          dataId = $(this).attr('data-id');
            $.ajax({
                type: 'POST',
                url: 'API/editValue.php',
                data: {
                  'valueOfEdit' : valueOfEdit,
                  'dataId' : dataId
                },
                dataType:"json",
            }).done(function(response){
            $('#color').trigger("change");
            }).fail(function(response){
            $('#color').trigger("change");
            });
        })
      });
    </script>
  </body>
</html>