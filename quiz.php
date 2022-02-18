<!DOCTYPE html>
<html>

	<head>
		<title>Ce animăluț de companie ți se potrivește?</title>
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
h1 {
  padding-top: 10px;
  padding-bottom: 5px;
  font-size: 50px;
  font-weight: 100;
  text-align: center;
  font-family: "Georgia";
  color: #3c3c7b;
}

ul {
width: 620px;
margin-left: 570px;
margin-top: 40px;
  
  li {
    float: left;
    list-style: none;
    margin-right: 10px;
    position: relative;
    } 
    
  }
.decoration:hover {
 background-color: #3c447c;
 color: white;
}
.decoration {
    max-weight:100px;
	border-width:5px;  
    border-style:groove;
	border-radius: 25px;
    border: 2px solid #c2186e;
    padding:1px;
    width: 150px;;
    height: 35px;
}
.txt {
 font-family: "Georgia"
 padding-top: 100px; 
}
body {
  background-color: #dbcbcb;
}
p{
	font-align: center;
	font-family: Georgia;
}
.fresult {
 font-size:50px;
 padding-left:440px;
 font-family:"Copperplate"
}
.dbutton {
 background: #c2186e;
 margin-left:600px;
 border-radius: 20px;
 height: 50px;
 margin-bottom: 30px; 
}
.dbutton:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.aa {
margin-bottom :20px;
}
</style>
			</head>

	<body>
	<div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a">
			<h1 class="titlu"> Speranța </h1>
			<h2>Din dragoste pentru animale</h2>
		</span>
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark" id="navbar">
        <a class="navbar-brand" href="pagina-acasa.php">Acasă</a>   
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
	<br>
	<h1 >Ce animăluț ți se potrivește?</h1>
<ul>

		<div class ="aa">
		<p id="result" class="txt">Ce activități preferi?</p>
		 <select id="activity" class="decoration">
		<li><option value="a1">Jogging</option></li>
		<li><option value="a1" selected>Bicicleta de slăbit</option></li>
		<li><option value="a3">Înotul</option></li>
		<li><option value="a4">Dansul</option></li>
		</select>
		</div>
		
		<div class ="aa">
		<p id="result2" class="txt">Care tip de personalitate te caracterizează cel mai bine?</p>
		<select id="personality" class="decoration">
			<option value="p1">Introvertită</option>
			<option value="p2" selected>Extrovertită</option>
		</select>
		</div>
		
		<div class ="aa">
		<p id="hoursresult" class="txt">Câte ore lipsești de acasă?</p>
		
		<select id="hours" class="decoration">
			<option value="h1">2-4</option>
			<option value="h2" selected>5-7</option>
			<option value="h3">7-9</option>
			<option value="h4">mai mult de 10 ore</option>
		</select>
		</div>
		
		<div class ="aa">
		<p id="relaxresult" class="txt">Ce modalitate de relaxare preferi?</p>
		
		<select id="relax" class="decoration">
			<option value="r1">O plimbare în parc</option>
			<option value="r2" selected>Un film/o carte</option>
			<option value="r3">Să ascult muzică</option>
			<option value="r4">Să stau pur și simplu</option>
		</select>
		</div>
		
	</ul>	
		<p id="finalresult" class="fresult"><p>
	
		<script>

			

	    function GetSelectedText(){
	    var e = document.getElementById("activity");
		var result = e.options[e.selectedIndex].text;
		var e2 = document.getElementById("personality")
		var result2 = e2.options[e2.selectedIndex].text;
		var e3 = document.getElementById("hours")
		var result3 = e3.options[e3.selectedIndex].text;
		var e4 = document.getElementById("relax")
		var result4 = e4.options[e4.selectedIndex].text;
		if (result.localeCompare("Jogging")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("O plimbare in parc")==0 
		   ) 
				{document.getElementById("finalresult").innerHTML = 'Animalul tau de suflet este catelul!';}
		   
		   else {
				   if(result.localeCompare("Dansul")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Un film/o carte")==0
					   )
							{document.getElementById("finalresult").innerHTML = 'Animalul tau de suflet este pisica!';   
							}
					
				 else {
						if( result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa stau pur si simplu")==0
						)
								{document.getElementById("finalresult").innerHTML = 'Animalul tau de suflet este hamsterul';  }
						else {
						if( result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa ascult muzica")==0
						)
							{document.getElementById("finalresult").innerHTML = 'Animalul tau de suflet este chinchilla!';  }
						else {document.getElementById("finalresult").innerHTML = 'Animalul tau de suflet este pestele!';}
						}
					}
				}
		
				
			}
$("li").mouseover(function(){
 $(this).find('.drop-down').slideDown(300);
 $(this).find(".accent").addClass("animate");
 $(this).find(".item").css("color","#FFF");
}).mouseleave(function(){
  $(this).find(".drop-down").slideUp(300);
   $(this).find(".accent").removeClass("animate");
   $(this).find(".item").css("color","#000");
});
		</script>

		<br/>
		<button type="button" onclick="GetSelectedText()" class="dbutton">Află ce animal ți se potrivește</button>
</body>
<html>