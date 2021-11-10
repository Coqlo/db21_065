<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<div class="container">
			<div><br></div>
			<form method="get" action="">
					<div class=" shadow input-group mb-3 " >
						<input type="text" name="key"class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
						<input type="hidden" name="controller" value="hospital" class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
						<div class=" input-group-append ">
							<button class="btn btn btn-secondary" type="submit" name="action" value="search" id="button-addon2"><i class="fas fa-search"></i> Search</button>
						</div>
						
						<a href=./?controller=hospital&action=newHospital type="button" class="btn btn-primary"><i class="fas fa-folder-plus"></i> เพิ่มโรงพยาบาล</a>
					
					</div>
				</form>
		<table class="shadow table table-hover">
  			<thead class="thead-dark">
    			<tr align='center' >
     			 <th scope="col">ID</th>
     			 <th scope="col">ชื่อ</th>
    			 <th scope="col">ที่อยู่</th>
    			 <th scope="col">แขวง/ตำบล</th>
		  		 <th scope="col">เขต/อำเภอ</th>
           <th scope="col">จังหวัด</th>
	 			   <th scope="col">รหัสไปษณีย์</th>
				   <th scope="col">อัพเดท</th>
				   <th scope="col">ลบ</th>
   			   </tr>
  			</thead></tr>
			<tbody style="background-color: #EFEFEF">
<?php foreach($hospital_list as $hospital)
{
	echo"<tr align='center' > 
	<td data-lable='ID'>$hospital->hospital_id</td>
	<td data-lable='ชื่อ'>$hospital->hospital_name</td> 
	<td data-lable='ที่อยู่'>$hospital->hospital_address</td>
	<td data-lable='แขวง/ตำบล'>$hospital->hospital_subArea</td> 
	<td data-lable='เขต/อำเภอ'>$hospital->hospital_area</td>
	<td data-lable='จังหวัด'>$hospital->hospital_province</td>
  <td data-lable='รหัสไปษณีย์'>$hospital->hospital_postalCode</td>
  <td data-lable='อัพเดท'><a href=?controller=hospital&action=updateForm&hospital_id=$hospital->hospital_id class='btn btn-outline-warning' role='button' ata-placement='right' title='อัพเดท'><i class='fas fa-folder-open'></i> updete</a></td>
	<td data-lable='ลบ'><a href=?controller=hospital&action=deleteConfirm&hospital_id=$hospital->hospital_id class='btn btn-outline-danger' role='button' ata-placement='right' title='ลบ'><i class='fas fa-folder-minus'></i> delete</a></td><tr>";
}
echo "</table>";
?>
				</tbody>
			</div>
	</body>

</html>
