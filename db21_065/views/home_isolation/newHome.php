
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
            <h5 class="card-header">เพิ่ม Home Isolation</h5>
            <div class="card-body">
                <div class="mb-3">
                    <form method="get" action="">
                        <label>วันที่(ปี-เดือน-วัน) </label> <input type="text" name="$hi_date," class="form-control" required/>   
                </div>
                <div class="mb-3">
                    <label>แพทย์อาสา </label><select name="mv_id" class="form-control" required>
                        <?php foreach($medical_list as $medical){

                            $mv_id = $medical->mv_id;
                            $mv_name = $medical->mv_name;
                            echo "<option value='$mv_id'> $mv_name </option>";       
                        } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>ผลการตรวจATK </label><select name="atk_id" class="form-control" required>
                        <?php foreach($atk_list as $atk){

                            $atk_id = $atk->atk_id;
                            echo "<option value='$atk_id'> $atk_id </option>";       
                        } ?>
                    </select>
                </div>
				<div class="row">
                    <div class="col-sm">
                        <input type="hidden" name="controller" value="home" />
                    </div>
					<div class="col-sm">
                    <a href="./?controller=home&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">ยกเลิก</a>
                    </div>
                    <div class="col-sm">
                        <button class="btn btn-outline-success btn-lg btn-block" type="submit" name="action" value="addHome">เพิ่ม</button>
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








