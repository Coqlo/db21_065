<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <div class="card shadow" style="width: 100%;
  max-width: 600px;
  padding: 15px;
  margin: auto;">
            <h5 class="card-header">ลบโรงพยาบาล</h5>
            <div class="card-body">
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ID </label> <input type="int" name="hospital_id"
        value="<?php echo $hospital->hospital_id; ?>"class="form-control" readonly="true"/>   
                </div>
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ชื่อโรงพยาบาล </label> <input type="text" name="hospital_name"
        value="<?php echo $hospital->hospital_name; ?>" class="form-control" readonly="true"/>
                </div>
                <div class="mb-3">
                    <label>ที่อยู่ </label><input type="text" name="hospital_address"
        value="<?php echo $hospital->hospital_address; ?>" class="form-control" readonly="true"/>
                </div>
				<div class="mb-3">
                    <label>แขวง/ตำบล  </label><input type="text" name="hospital_subArea"
        value="<?php echo $hospital->hospital_subArea; ?>" class="form-control" readonly="true"/>
                </div>
				<div class="mb-3">
                    <label>เขต/อำเภอ </label><input type="text" name="hospital_area"
        value="<?php echo $hospital->hospital_area; ?>" class="form-control" readonly="true"/>
                </div>
				<div class="mb-3">
                    <label>จังหวัด </label><input type="text" name="hospital_province"
        value="<?php echo $hospital->hospital_province; ?>" class="form-control" readonly="true"/>
                </div>
                <div class="mb-3">
                    <label>รหัสไปษณีย์ </label><input type="text" name="hospital_postalCode"
        value="<?php echo $hospital->hospital_postalCode; ?>" class="form-control" readonly="true"/>
                </div>
					
				
				<div class="row">
                    <div class="col-sm">
                        <input type="hidden" name="controller" value="hospital"/>
                        <input type="hidden" name="hospital_id" value="<?php echo $hospital->hospital_id;?>"/>
                    </div>
					<div class="col-sm">
                    <a href="./?controller=hospital&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">ยกเลิก</a>
                    </div>

                    <div class="col-sm">
                        <button class="btn btn-outline-success btn-lg btn-block" type="submit" name="action" value="delete"> ลบ</button>
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








