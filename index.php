<?php
	require_once("mpdf60/mpdf.php");
	require_once("blank.php");
	if(isset($_POST['send']))
	{
		$blank = new Blank();
		$blank -> setSurname($_POST['surname']);
		$blank -> setName($_POST['name']);
		$blank -> setPatron($_POST['patron']);
		$blank -> setAddress($_POST['address']);
		$blank -> setSeries($_POST['series']);
		$blank -> setNumber($_POST['number']);
		$blank -> setPhoneNumber($_POST['phoneNumber']);
		$blank -> setEmail($_POST['email']);
		if($check = $_POST['check'] == 1)
		{
			$blank -> declaration();
			$blank ->destroy();
		} 
		else
		{
			$blank -> declaration2();
			$blank ->destroy();
		}

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Анкета</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<body>




		<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
			    <label for="surname" class="col-sm-1 control-label">Фамилия</label>
			    <div class="col-sm-4">
				    <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия">
			    </div>
			</div>
			<div class="form-group">
			    <label for="name" class="col-sm-1 control-label">Имя</label>
		    	<div class="col-sm-4">
		   			<input type="text" class="form-control" id="name" name="name" placeholder="Имя">
		   		</div>
			</div>
			<div class="form-group">
			    <label for="patron" class="col-sm-1 control-label">Отчество</label>
		    	<div class="col-sm-4">
		   			<input type="text" class="form-control" id="patron" name="patron" placeholder="Отчество">
		   		</div>
			</div>
			<div class="form-group">
			    <label for="address" class="col-sm-1 control-label">Адрес</label>
		    	<div class="col-sm-4">
		   			<input type="text" class="form-control" id="address" name="address" placeholder="Город, улица, дом-корпус-квартира">
		   		</div>
			</div>
			<div class="form-group">
			    <label for="series" class="col-sm-1 control-label">Серия</label>
		    	<div class="col-sm-4">
		   			<input type="number" maxlength="4" class="form-control" id="series" name="series" placeholder="Серия паспорта">
		   		</div>
			</div>
			<div class="form-group">
			    <label for="number" class="col-sm-1 control-label">Номер</label>
		    	<div class="col-sm-4">
		   			<input type="number" maxlength="4" class="form-control" id="number" name="number" placeholder="Номер паспорта">
		   		</div>
			</div>
			<div class="form-group">
			    <label for="phoneNumber" class="col-sm-1 control-label">Телефон</label>
		    	<div class="col-sm-4">
		   			<input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+79xxxxxxxxx">
		   		</div>
			</div>
			<div class="form-group">
			    <label for="email" class="col-sm-1 control-label">Email</label>
		    	<div class="col-sm-4">
		   			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
		   		</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<div class="radio">
						<label for="check"><input type="radio" id="check" name="check" value="1">Заявление</label>
						<label for="check"><input type="radio" id="check" name="check" value="2">Счет за заявление</label>		
					</div>	
				</div>
			</div>	
			<div class="form-group">
			    <div class="col-sm-offset-1 col-sm-10">
				    <input class="btn btn-default" type="submit" name="send" value="Отправить">
			    </div>
			</div>
		</form>
	</body>
</html>