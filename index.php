<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milele</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <form class="container" method="get" action="filterPage.php">
      <div class="form-group">
        <label for="supplier">Supplier</label>
        <select class="form-control" id="supplier" name="supplier">
          <option value="" selected>Select one</option>
          <option value="Supplier One">Supplier One</option>
          <option value="Supplier Two">Supplier Two</option>
          <option value="Supplier Three">Supplier Three</option>
        </select>
      </div>
      <div class="form-group">
        <label for="wholeSeller">Whole Seller</label>
        <select class="form-control" id="wholeSeller" name="wholeSeller" disabled="true">
          <option value="" selected>Select one</option>
          <option value="Whole Seller One">Whole Seller One</option>
          <option value="Whole Seller Two">Whole Seller Two</option>
          <option value="Whole Seller Three">Whole Seller Three</option>
        </select>
      </div>
      <div class="form-group">
        <label for="steeringType">Steering Type</label>
        <select class="form-control" id="steeringType" name="steeringType" disabled="true">
          <option value="" selected>Select one</option>
          <option value="Left Hand Driven (LHD)">Left Hand Driven (LHD)</option>
          <option value="Right Hand Driven (RHD)">Right Hand Driven (RHD)</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" id="submit" disabled="true">Submit</button>
    </form>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($){
        var supplier, wholeSeller, steeringType;
        $('#supplier').on('change', function(){
          supplier = $(this).val();
          //checking the selected field value
          if(supplier != ""){
            $('#wholeSeller').val('');
            $('#steeringType').val('');
            $('#wholeSeller').attr('disabled', false);

            $('#steeringType').attr('disabled', true);
            $('#submit').attr('disabled', true);
          }else{
            $('#wholeSeller').val('');
            $('#wholeSeller').attr('disabled', true);
          }
        });
        $('#wholeSeller').on('change', function(){
          wholeSeller = $(this).val();
          //checking the selected field value
          if(wholeSeller != ""){
            $('#steeringType').val('');
            $('#submit').attr('disabled', true);
            $('#steeringType').attr('disabled', false);
          }else{
            $('#steeringType').val('');
            $('#steeringType').attr('disabled', true);
          }
        });
        $('#steeringType').on('change', function(){
          steeringType = $(this).val();
          //checking the selected field value
          if(steeringType != ""){
            $('#submit').attr('disabled', false);
          }else{
            $('#submit').attr('disabled', true);
          }
        });
      });
    </script>
  </body>
</html>
