<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Select 2 example</title>

		<!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap multiselect -->
    <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">

    <!-- select2 -->
    <link href="assets/css/select2.min.css" rel="stylesheet">



		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

    <div class="container">

      <form role="form" method="post">

        <h3 class="box-title">Select2 example</h3>

        <div class="form-group">
          <label for="countries">Country</label>
          <select class="form-control select2" name="countries" required="true">
          <option value="">Select country </option>
          <option value="Egypt" >Egypt</option>
          <option value="Saudi arabia" >Saudi arabia</option>
          <option value="England" >England</option>
          <option value="France" >France</option>
          <option value="Usa" >Usa</option>
          <option value="Moroco" >Moroco</option>
          </select>
        </div>

        <br>
        <h3 class="box-title">Select2 multi select example</h3>

        <div class="form-group">
          <label for="countries">Country</label>
          <select class="form-control select2-multiple" multiple="multiple" name="countries[]" required="true">
            <option value="">Select country </option>
            <option value="Egypt" >Egypt</option>
            <option value="Saudi arabia" >Saudi arabia</option>
            <option value="England" >England</option>
            <option value="France" >France</option>
            <option value="Usa" >Usa</option>
            <option value="Moroco" >Moroco</option>
          </select>
        </div>

        <br>
        <h3 class="box-title">Bootstrap multi select example</h3>

        <div class="form-group">
          <label for="Months">Month</label>
          <select class="form-control bootstrap-multiple" multiple="multiple" name="Months[]" required="true">
            <option value="Egypt" >Egypt</option>
            <option value="Saudi arabia" >Saudi arabia</option>
            <option value="England" >England</option>
            <option value="France" >France</option>
            <option value="Usa" >Usa</option>
            <option value="Moroco" >Moroco</option>
          </select>
        </div>

      </form>

    </div><!--container-->

    <!-- jQuery 2.1.4 -->
    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap multiselect -->
    <script src="assets/js/bootstrap-multiselect.js"></script>
    <!-- select2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- Initialize the plugins  -->
    <script type="text/javascript">
      $(document).ready(function() {

        // Select 2
  			$('.select2').select2({
  			  placeholder: "Select country"
  			});

  			//  Select 2 Multi-select
  			$(".select2-multiple").select2({
  			  placeholder: "Select country"
  			});

        // Bootstrap Multi-select
        $('.bootstrap-multiple').multiselect(
          {
            includeSelectAllOption: true,
            enableFiltering: true,
            maxHeight: 150
          }
        );

      });
    </script>

	</body>
</html>
