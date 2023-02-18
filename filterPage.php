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
            <select class="form-control selectVals" id="model" name="model">
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
            <select class="form-control selectVals" id="sfx" name="sfx" disabled="true">
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
            <select class="form-control selectVals" id="variant" name="variant" disabled="true">
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
            <select class="form-control selectVals" id="color" name="color" disabled="true">
              <option value="" disabled selected>Select one</option>
              <option value="Black">Black</option>
              <option value="White">White</option>
              <option value="Blue">Blue</option>
            </select>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="month">Month</label>
            <select class="form-control selectVals" id="month" name="month">
              <option value="" disabled selected>Select one</option>
              <option value="Jan">Jan</option>
              <option value="Feb">Feb</option>
              <option value="Mar">Mar</option>
              <option value="Apr">Apr</option>
              <option value="May">May</option>
              <option value="Jun">Jun</option>
              <option value="Jul">Jul</option>
              <option value="Aug">Aug</option>
              <option value="Sep">Sep</option>
              <option value="Oct">Oct</option>
              <option value="Nov">Nov</option>
              <option value="Dec">Dec</option>
            </select>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="year">Year</label>
            <select class="form-control selectVals" id="year" name="year">
              <option value="" disabled selected>Select one</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table" id="table">
        
        <tbody id="tableBody">
        </tbody>
      </table>
      <button class="btn btn-primary" id="addRow" disabled="true">Add Row</button>
    </div>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($){
        var model="", sfx="", variant="", color="", newRow, id_edit, parentEdit, year="", month="";
        var supplier = $('#supplier').val();
        var steeringType = $('#steeringType').val();
        var wholeSeller = $('#wholeSeller').val();
        $('#model').on('change', function(){
          model = $(this).val();
          //checking the selected field value
          if(model != ""){
            $('#sfx').attr('disabled', false);
            $('#sfx').val('');
            $('#variant').val('');
            $('#color').val('');

            $('#variant').attr('disabled', true);

            $('#color').attr('disabled', true);
          }else{
            $('#sfx').attr('disabled', true);
          }
        });
        $('#sfx').on('change', function(){
          sfx = $(this).val();
          //checking the selected field value
          if(sfx != ""){
            $('#variant').attr('disabled', false);
            $('#variant').val('');
            $('#color').val('');

            $('#color').attr('disabled', true);
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
        });
        $('#year').on('change', function(){
          year = $(this).val();
        });
        $('#month').on('change', function(){
          month = $(this).val();
        });
        $('#table').on('click', '.editablechild', function() {
            parentEdit = $(this).parent('.editable');
            id_edit = parentEdit.attr('data-id');
            value = $(this).html();
            parentEdit.html('<input type="number" class="editvalue" value="'+value+'" data-id="'+id_edit+'">');
        })
        $('#table').on('dblclick', '.editvalue', function() {
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
        $('.selectVals').on('change', function(){
          if(model != "" && color != "" && sfx != "" && variant != "" && year != "" && month != ""){
            $.ajax({
                type: 'GET',
                url: 'API/getRowsWithHeaders.php',
                data: {
                  'model': model,
                  'sfx': sfx,
                  'variant': variant,
                  'color': color,
                  'supplier': supplier,
                  'steeringType': steeringType,
                  'wholeSeller': wholeSeller,
                  'month': month,
                  'year': year
                  },
                  traditional: true,
                dataType:"json"
            }).done(function(response){
                console.log(response);
                $('#table').html("");
                $('#table').html(response.responseText);
            }).fail(function(response){
                console.log(response);
                $('#table').html("");
                $('#table').html(response.responseText);
            })
            $('#addRow').attr('disabled', false);
          }
        })
        $('#addRow').on('click', function(){
          $.ajax({
            type: 'POST',
            url: 'API/addRow.php',
            data: {
              'model': model,
              'sfx': sfx,
              'variant': variant,
              'color': color,
              'supplier': supplier,
              'steeringType': steeringType,
              'wholeSeller': wholeSeller,
              },
              traditional: true,
              dataType:"json"
            }).done(function(response){
               $.ajax({
                type: 'GET',
                url: 'API/getRowsWithHeaders.php',
                data: {
                  'model': model,
                  'sfx': sfx,
                  'variant': variant,
                  'color': color,
                  'supplier': supplier,
                  'steeringType': steeringType,
                  'wholeSeller': wholeSeller,
                  'month': month,
                  'year': year
                  },
                  traditional: true,
                dataType:"json"
            }).done(function(response){
                console.log(response);
                $('#table').html("");
                $('#table').html(response.responseText);
            }).fail(function(response){
                console.log(response);
                $('#table').html("");
                $('#table').html(response.responseText);
            })
            }).fail(function(response){
               $.ajax({
                type: 'GET',
                url: 'API/getRowsWithHeaders.php',
                data: {
                  'model': model,
                  'sfx': sfx,
                  'variant': variant,
                  'color': color,
                  'supplier': supplier,
                  'steeringType': steeringType,
                  'wholeSeller': wholeSeller,
                  'month': month,
                  'year': year
                  },
                  traditional: true,
                dataType:"json"
            }).done(function(response){
                console.log(response);
                $('#table').html("");
                $('#table').html(response.responseText);
            }).fail(function(response){
                console.log(response);
                $('#table').html("");
                $('#table').html(response.responseText);
            })
            })
        });
      });
    </script>
  </body>
</html>
