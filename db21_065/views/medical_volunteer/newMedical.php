
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
<div><br></div>
    <div class="container">

        <div class="card shadow" style="width: 100%;
  max-width: 600px;
  padding: 15px;
  margin: auto;">
            <h5 class="card-header">เพิ่มแพทย์อาสา</h5>
            <div class="card-body">
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ชื่อแพทย์อาสา </label> <input type="text" name="mv_name" class="form-control" required/>   
                </div>
                <div class="mb-3">
                    <label>โรงพยาบาล </label><select name="hospital_id" class="form-control" required>
                        <?php foreach($hospital_list as $hospital){

                            $hospital_id = $hospital->hospital_id;
                            $hospital_name = $hospital->hospital_name;
                            echo "<option value='$hospital_id'> $hospital_name </option>";       
                        } ?>
                    </select>
                </div>
				<div class="row">
                    <div class="col-sm">
                        <input type="hidden" name="controller" value="medical" />
                    </div>
					<div class="col-sm">
                    <a href="./?controller=medical&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">ยกเลิก</a>
                    </div>
                    <div class="col-sm">
                        <button class="btn btn-outline-success btn-lg btn-block" type="submit" name="action" value="addMedical">เพิ่ม</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <div>
        <br>
    </div>

</body>

</html>








