<html>
<style>
</style>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta  name="viewport"  content="width=device-width,  intial-scale=1">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://cdn.shopify.com/s/files/1/0004/4600/5305/files/sweetalert.min.js?1359"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            <link rel="stylesheet" href="stil.css"/>
			<div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a">
			<h1 class="titlu"> Speranța </h1>
			<h2>Din dragoste pentru animale</h2>
		</span>
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark" id="navbar">
        <a class="navbar-brand" href="pagina-acasa.html">Acasă</a>   
        <a class="nav-item">
			<a class="nav-link" href="pagina-despre.php">Despre noi</a>
        </a>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cum pot să ajut?
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="pagina-voluntari.php">Alătură-te voluntarilor</a>
                <a class="dropdown-item" href="pagina-doneaza.php">Donează</a>
            </div>
        </div>
		<a class="nav-item">
			<a class="nav-link" href="categorii.php">Adoptă</a>
        </a>
        <a class="nav-item">
			<a class="nav-link" href="pagina-contact.php">Contact</a>
        </a>
		<a class="nav-item">
			<a class="nav-link" href="pagina-login.php"><i class="far fa-user"></i></a>
		</a>
    </nav>
</head>


<?php

class Animale
{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "adapost";
	private $conn; 

	
function __construct()
{
		$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
	 }
	 
function getDataResult($query)
{
		 $sql_statement = $this->conn->prepare($query);
		 $sql_statement->execute();
		 $result = $sql_statement->get_result();

		 if ($result->num_rows > 0) 
		 {
			 while ($row = $result->fetch_assoc()) 
			 {
				$resultset[] = $row;
			 }
		 }

		 if (! empty($resultset)) 
		 {
			return $resultset;
		 }
	 }
	 
//lista cu toate animalele
function getAnimale($tab_animal)
{
		 $query = "SELECT * FROM ".$tab_animal;
		 $result = $this->getDataResult($query);
		 return $result;
	 }
	 
}
?>