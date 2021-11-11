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
            <h5 class="card-header">อัพเดทโรงพยาบาล</h5>
            <div class="card-body">
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ID </label> <input type="text" name="hospital_id" class="form-control" readonly="true"
                        value="<?php echo $hospital->hospital_id; ?>" required/>   
                </div>
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ชื่อโรงพยาบาล </label> <input type="text" name="hospital_name" class="form-control" 
                        value="<?php echo $hospital->hospital_name; ?>" required/>   
                </div>
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ที่อยู่ </label> <input type="text" name="hospital_address" class="form-control" 
                        value="<?php echo $hospital->hospital_address; ?>"required/>
                </div>
                <div class="mb-3">
                    <label>แขวง/ตำบล </label><input type="text" name="hospital_subArea" class="form-control"
                    value="<?php echo $hospital->hospital_subArea; ?>" required/>
                </div>
				<div class="mb-3">
                    <label>เขต/อำเภอ </label><input type="text" name="hospital_area" class="form-control"
                    value="<?php echo $hospital->hospital_area; ?>" required/>
                </div>
				<div class="mb-3">
                    <label>จังหวัด </label><input type="text" name="hospital_province" class="form-control"
                    value="<?php echo $hospital->hospital_province; ?>" required/>
                </div>
				<div class="mb-3">
                    <label>รหัสไปษณีย์ </label><input type="int" name="hospital_postalCode" class="form-control"
                    value="<?php echo $hospital->hospital_postalCode; ?>" required/>
                </div>
					
					
				
				<div class="row">
                    <div class="col-sm">
                        <input type="hidden" name="controller" value="hospital" />
                    </div>
					<div class="col-sm">
                    <a href="./?controller=hospital&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">ยกเลิก</a>
                    </div>

                    <div class="col-sm">
                        <button class="btn btn-outline-success btn-lg btn-block" type="submit" name="action" value="update"> อัพเดท</button>
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








