<?php 
include'datalayer.php'; 
$conn = connectie();
$result = fetchallMerk($conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toets CRUD Blok 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include'header_footer/header.php' ?>
<div class="mb-5 mt-2 ">
    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-center">
        <h1>Bekijk hier alle types</h1>
    </div>
<?php 
for ($i=0; $i < count($result); $i++) { 
    $data = $result[$i];
    createNewVehicleMerk($data["id"],$data["name"]);
}
?>
</div>
<?php include'header_footer/footer.php' ?>
</body>
</html>