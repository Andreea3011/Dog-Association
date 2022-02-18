

<?php
include("Conectare.php");
$error='';
if (isset($_POST['submit']))
{
	$nume = htmlentities($_POST['nume'], ENT_QUOTES);
	$email= htmlentities($_POST['email'], ENT_QUOTES);
	$telefon = htmlentities($_POST['telefon'], ENT_QUOTES);
	$mesaj = htmlentities($_POST['mesaj'], ENT_QUOTES);
	if ($nume == '' || $email == ''|| $telefon == '' || $mesaj == '')
	{
		$error = 'ERROR: Campuri goale!';
	} else {
		if ($stmt = $mysqli->prepare("INSERT into mesaje (nume, email, telefon, mesaj) VALUES (?, ?, ?, ?)"))
		{
			$stmt->bind_param("ssss", $nume, $email, $telefon, $mesaj);
			$stmt->execute();
			$stmt->close();
		}
		else
		{
			echo "ERROR: Nu se poate executa insert.";
		}
	}
}
	$mysqli->close();
?>


<html>
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
<style>
.contact h1{
	margin-bottom: 50px;
	font-family: "Copperplate";
}

.contact{
	text-align: center;
	padding-bottom: 50px;
	padding-top: 50px;
	background-color: #5d649c;
}

.contact input[type=submit]{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 20px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}

.contact .buton{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 10px;
	width: 400px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}


.contact .buton:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.contact .mesaj{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 10px;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	height: 150px;
	width: 400px;
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}
.contact input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.contact textarea:hover{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
footer {
    padding: 100px 20px;
    color: #fff;
    background: #6cacbc;
   }

   footer p {
    color: #fffff;
    text-align: left;
	font-family: Georgia;
   }

   footer p.titlu {
      color: #fffff;
      font-weight: 600;
      font-size: 25px;
	  font-family: Georgia;
   }
   footer p.titlu:after {
    content: '';
    display: block;
    width: 100%;
    border-bottom: 2px solid #5d649c;
    padding-bottom: 25px;
    max-width: 130px;
    margin-bottom: 30px;
   }
   .{
    text-align: center;
   }
   footer{
	   height: 400px;
   }
</style>
</head>

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
				    <a class="nav-link" href="quiz.html">Quiz</a>
			    </a>
		<a class="nav-item">
			<a class="nav-link" href="pagina-login.php"><i class="far fa-user"></i></a>
		</a>
		
    </nav>
<div class="contact">
<h1>Contact</h1>
<?php if ($error != '') {
			echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
			<input type="text" name="nume" placeholder="Nume" id="nume" required class="buton" value=""></br>
			<br>
			<input type="email" name="email" placeholder="Email" id="email" required class="buton" value=""></br>
			<br>
			<input type="text" name="telefon" placeholder="Telefon" id="telefon" required class="buton" value=""></br>
			<br>
			<textarea name="mesaj" placeholder="Mesaj" id="mesaj" required class="mesaj" rows="10" cols="30" value=""></textarea></br>
			<br><input type="submit" name="submit" value="Trimite"/></br>
</form>
</div>
<footer>


<script>
function myFunction() {
  alert("HELP! \n 1. Pagina Acasă afișează ultimele noutăți legate de centrul nostru de adopție. \n 2. Pagina Despre noi” conține informații despre istoricul și misiunea noastră. \n 3. Dacă doriți să ne ajutați o puteți face prin două metode: donând bani pentru a putea acoperi diferite costuri pentru întreținerea animalelor sau implicându-vă chiar dumneavoastră și devenind voluntar. \n a) pentru a putea dona trebuie să faceți click pe ,,Cum pot să ajut?”, iar din meniul apărut faceți click pe ,,Donează”, acest lucru va deschide pagina donează, care conține toate informațiile necesare pentru a face o donație. \n b) pentru a deveni voluntar, din același meniu, selectați ,,Alătură-te voluntarilor” care va deschide pagina pentru voluntari. \n Această pagină cuprinde toate informațiile legate de completarea cererilorde voluntariat, precum și responsabilitățile ce revin voluntarilor. \n 4. Dacă doriți să vedeți ce animăluțe se află în grija noastră, selectați ,,Adoptă” din bara de meniu. Aici puteți selecta dintre categoriile de animale pe care le adăpostim făcând un click pe numele categoriei. \n 5. Dacă doriți să adoptați un animăluț, tot din pagina de vizualizare faceți click pe butonul ,,Adoptă”, care va merge pe formularul ce trebuie completat pentru a începe procesul de adopție. \n 6.	Dacă aveți alte întrebări sau nelămuriri, ne puteți contacta prin intermediul numărului de telefon din subsolul paginii ,,Contact” sau completând formularul de pe aceeași pagina. Echipa noastră va citi mesajele și vă va răspunde cât de repede se poate. \n 7.	Există și posibilitatea de logare sau creare cont, accesând iconița de pe bara de meniu. Astfel, vă putem ține la curent cu activitatea noastră.");
}
</script>
<div class="container" id="subsol">
    <div class="row">
        <div class="col-lg-4">
            <p class="titlu">Date contact</p1>
            <p>Calea Moților nr.1-3, Cluj, 400001</p>
            <p>Email: speranta.cj@gmail.com</p>
            <p>Telefon: 0761 617 716</p>
        </div>
        <div class="col-lg-4">
            <p class="titlu">Orar</p>
            <p>Luni - Vineri: 8 am - 8 pm</p>
            <p>Sâmbătă: 10 am - 4 pm</p>
            <p>Duminică: 10 am - 2 pm</p>
        </div>
        <div class="col-lg-4">
            <p class="titlu">Social Media</p>
            <p>Facebook</p>
			<p>Instagram</p>
        </div>
    </div>
</div>
</footer>
</html>
