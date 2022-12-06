<?php
include "db_conn.php";
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['Andi mazina/lastname'];
$ID=$_POST['Indangamuntu/ ID'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$village=$_POST['village'];
$cell=$_POST['cell'];
$sector=$_POST['umurenge/ sector'];
$district=$_POST['Akarere /district'];
$issue=$_POST['ikibazo/issue'];
$solution=$_POST['solution'];
$date=$_POST['date'];
$decider=$_POST['decider'];

$sql="INSERT INTO `crud`(`Amazina /Firstname`, `Andi mazina /Lastname`, `Indangamuntu /ID`, 
`Date /itariki`,'gender', `Umudugudu /village`,`Akagari/Ccell`, `Umurenge /Sector`, `Akarere /District`, ,
 `Issue /Ikibazo`, `Conclusion /Umwanzuro`, `Date /Itariki  wafatiweho`, `Decider /Uwafashe umwanzuro`)
  VALUES ('$firstname','$lastname',$ID,'$date','$gender','$village','$cell',
'$sector','$district','$issue','$solution','$date','$decider,)";

$result=mysqli_query($conn.sql);
if($result){
    header("location: index.php?msg=New record created successfully");
}
else{
    echo"failed:" .mysqli_error($conn);
}

}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">


    <title>Umwirondoro w'umuturage watanze ikibazo</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5"
style="background-color: #00ff5573;">
Umwirondoro w'umuturage watanze ikibazo
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3> umwirondoro w'umuturage</h3>
        <p class="text-muted"> uzuza ibi bikurikira biranga umuturage</p>


    </div>


<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row">
        <div class="col">
            <label class="form-label">Amazina /Firstname:</label>
            <input type='text' class="form-control" name="firstname"
            placeholder="silas">

</div>  
<div class="col">
            <label class="form-label">Andi mazina /lastname:</label>
            <input type='text' class="form-control" name="lastname"
            placeholder="Iradukunda">

<div class="col" >
    <label class="form-label"> Indangamuntu /ID:</label>
    <input type ='number' class ="form-control"name ="Indangamuntu"
    placeholder ="119982726"> 
</div>


</div> 
<div class="mb-3">
<label class="form-label">Itariki /Date:</label>
            <input type='date' class="form-control" name="date"
            placeholder="date/time">


</div>
<div class="form-group mb-3">
    <label> Gender:</label> &nbsp;
    <input type ='radio' class="form-check-input" name="gender"
    id="male" value ="male">
    <label for="male" class="form-input-label">Male</label>
    &nbsp;
    <input type ='radio' class="form-check-input" name="gender"
    id="female" value ="female">
    <label for="female" class="form-input-label">Female</label>


</div>

<div class="form-group mb-3">
    <label> Umudugudu /Village:</label>
    <input type ='text' class="form-control" name="Umudugudu" placeholder="kavumu">
    <label> Akagari /Cell:</label>
    <input type='text' class="form-control" name="Akagari" placeholder="muhundo">
    <label> Umurenge /Sector:</label>
    <input type='text' class="form-control" name="Umurenge" placeholder="nyamata">

    <label> Akarere /District:</label>
    <input type='text' class="form-control" name="Akarere" placeholder="Bugesera">

</div>

<div class="mb-3">
<label>Ikibazo /Issue:</label>
<textarea name="ikibazo" rows="2" cols="40"></textarea>
</div>

<div class="mb-3">
<label>Umwanzuro /Solution:</label>
<textarea name="umwanzuro" rows="2" cols="40"></textarea>

</div>

<div class="mb-3">
<label>Uwanzuye/ Decider:</label>
<input type ="text-box" class="form-control" name ="decider" placeholder="uwanzuye">
</div>

<div> 
    <button type="submit" class="btn btn-success"name="submit">save</button>
    <a href="index.php" class="btn btn-danger">cancel</a>

</div>
</form>

<!--bootsrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>
</body>
</html>