<?php
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style>
	.main {
margin:10% auto;
padding-left:40%;

}
	</style>
</head>
<body>
	<div class="main">


<div style="border: 1px solid #ccc; border-radius: 3px; padding: 5px; display: inline-block">
    <form method="post" action="" id="form">
	<input style="padding: 3px; margin: 0; min-height: 20px;" value="<?php echo getInputAsString($input);?>">
    <input class="form-control" type="hidden" name="input" value='<?php echo json_encode($input);?>'/>
	
    <input class="form-control" type="text" value="<?php echo $currentValue;?>"/>
    <table style="width:100%;">
        <tr>
            <td><input class="form-control" type="submit" name="c" value="C"/></td>
            <td><button type="submit" name="modulus" value="%">&#37;</button></td>
			<td><button type="submit" name="divide" value="/">&#247;</button></td>
			<td><input class="form-control" type="submit" name="squareroot" value="√"/></td>
        </tr>
        <tr>
            <td><input class="form-control" type="submit" name="7" value="7"/></td>
            <td><input class="form-control" type="submit" name="8" value="8"/></td>
			<td><input class="form-control" type="submit" name="9" value="9"/></td>
			<td><input class="form-control" type="submit" name="square" value="^"/></td>
        </tr>
        <tr>
            <td><input class="form-control" type="submit" name="4" value="4"/></td>
            <td><input class="form-control" type="submit" name="5" value="5"/></td>
            <td><input class="form-control" type="submit" name="6" value="6"/></td>        
            <td><input class="form-control" type="submit" name="multiply" value="x"/></td>
        </tr>
        <tr>
            <td><input class="form-control" type="submit" name="1" value="1"/></td>
            <td><input class="form-control" type="submit" name="2" value="2"/></td>
            <td><input class="form-control" type="submit" name="3" value="3"/></td>
			<td><input class="form-control" type="submit" name="minus" value="-"/></td>
        </tr>
        <tr>
            <!-- <td><button class="btn btn-primary" type="submit" name="plusminus" value="plusminus">&#177;</button></td> -->
            <td><input class="form-control" type="submit" name="zero" value="0"/></td>
            <td><input class="form-control" type="submit" name="." value="."/></td>
			<td><input class="form-control" type="submit" name="equal" value="="/></td>
			<td><input class="form-control" type="submit" name="add" value="+"/></td>
        </tr>
    </table>
    </form>
</div>
</div>

</body>
</html>