<!doctype html>
<html> <!--lang="en"-->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

    <title>Acasa</title>
  </head>
  <body>
    <style>
      .carousel-item{
        height: 32rem;
        background: #777;
        color:white;
        position:relative;
      }
      .container{
        position:absolute;
        bottom:0;
        right:0;
        left:0;
        padding-bottom: 60px;
        padding-left: 50px;
      }
      .bubble{
        position:static;
        text-align: center;
        margin-top: 30px;
        padding-top: 10px;
        padding-bottom: 10px;
      }
      .divider{
        margin-left:10rem;
        margin-right: 10rem;
      }
      .row{
        --bs-gutter-x:1.5rem;
        --bs-gutter-y:0;
        display:flex;
        flex-wrap:wrap;
        margin-top: calc(var(--bs-gutter-y)*-1);
        margin-right: calc(var(--bs-gutter-x)*-.5);
        margin-left: calc(var(--bs-gutter-x)*-.5);
      }
      .description{
        flex: 0 0 auto;
        width:58.33333333%;
      }
      .desctitle{
        font-weight: 400;
        margin-top: 7rem;
        font-size: 50px;
        line-height: 1;
        letter-spacing: -.05rem;
        font-family: var(--bs-font-sans-serif);
        text-align: center;
        padding-bottom: 30px;
      }
      .text-muted{
        color:lightslategray;
      }
     .descdesc{
      font-size: 1.25rem;
      font-weight: 300;
      text-align:center;
     }
     .overlay-image {
       position:absolute;
       bottom:0;
        right:0;
        left:0;
        top:0;
        background-position: center;
        background-size: cover;
     }

    </style>
<div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a">
			<h1 class="titlu"> Speran??a </h1>
			<h2>Din dragoste pentru animale</h2>
		</span>
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark" id="navbar">
        <a class="navbar-brand" href="pagina-acasa.php">Acas??</a>   
        <a class="nav-item">
			<a class="nav-link" href="pagina-despre.php">Despre noi</a>
        </a>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cum pot s?? ajut?
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="pagina-voluntari.php">Al??tur??-te voluntarilor</a>
                <a class="dropdown-item" href="pagina-doneaza.php">Doneaz??</a>
            </div>
        </div>
		<a class="nav-item">
			<a class="nav-link" href="categorii.php">Adopt??</a>
        </a>
        <a class="nav-item">
			<a class="nav-link" href="pagina-contact.php">Contact</a>
        </a>
		<a class="nav-item">
				    <a class="nav-link" href="quiz.php">Quiz</a>
			    </a>
		<a class="nav-item">
			<a class="nav-link" href="pagina-login.php"><i class="far fa-user"></i></a>
		</a>
		<a class="nav-item">
			<i class="fas fa-question" onclick="myFunction()"></i></a>
		</a>
    </nav>
    <div id = "myCarousel" class = "carousel slide" data-bs-ride = "carousel">
      <ol class = "carousel-indicators">
        <li data-bs-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
        <li data-bs-target = "#myCarousel" data-slide-to = "0"></li>
      </ol>
      <div class = "carousel-inner">
        <div class = "carousel-item active">
          <div class="overlay-image" style="background-image:url(slide-1.webp);"></div>
          <div class = "container">
            <h1 style="text-shadow: 2px 2px black; font-family: 'Georgia',Serif;color:#dbcbcb ">Cine suntem noi?</h1>
            <p style="text-shadow: 2px 0px black;font-family: 'Copperplate',Fantasy; ">O asocia??ie care salveaz?? ??i preg??te??te spre adop??ie o mul??ime de anim??lu??e f??r?? st??p??n.</p>
            <a href = "pagina-despre.php" class = "btn btn-lg btn-primary">
              Afl?? mai multe
            </a> 
          </div>
        </div>
        <div class = "carousel-item">
          <div class="overlay-image" style="background-image:url(slide-2.jpg);"></div>
          <div class = "container">
            <h1 style="text-shadow: 2px 2px black;font-family: 'Georgia',Serif;color:#dbcbcb">Cum ne g??se??ti?</h1>
            <p style="text-shadow: 2px 0px black;font-family: 'Copperplate',Fantasy; ">Dac?? ai anumite ??ntreb??ri, ????i vom r??spunde cu drag!</p>
            <a href = "#" class = "btn btn-lg btn-primary">
              Click aici
            </a> 
          </div>
        </div>
      </div>
      <a href = "#myCarousel" class = "carousel-control-prev" role = "button" data-slide = "prev">
        
        <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
      </a>
      <a href = "#myCarousel" class = "carousel-control-next" role = "button" data-slide = "next">
        
        <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
      </a>
    </div>
    <div class = "container bubble">
      <div class = "row">
        <div class = "col-lg-4">
          <!--
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
        -->
        <img style="border-radius: 50%; width:140px; height:140px" src="dog.jpg">
          <h2 style="font-family: 'Georgia',Serif; color:#6cacbc">Doneaz??!</h2>
          <p style="font-family: 'Copperplate',Fantasy;">Ajut??-ne s?? hr??nim anim??lu??ele!</p>
          <p>
            <a class = "btn btn-secondary" href = "pagina-doneaza.php" style="font-family: 'Copperplate',Fantasy;">Vreau s?? donez!</a>
          </p>
        </div>
        <div class = "col-lg-4">
          <!--
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
        -->
        <img style="border-radius: 50%; width:140px; height:140px" src="rabbit.jpg">
          <h2 style="font-family: 'Georgia',Serif; color:#6cacbc">Adopt??!</h2>
          <p style="font-family: 'Copperplate',Fantasy;">Ofer?? unui suflet o via???? mai bun??!</p>
          <p>
            <a class = "btn btn-secondary" href = "categorii.php" style="font-family: 'Copperplate',Fantasy;">Vreau s?? adopt!</a>
          </p>
        </div>
        <div class = "col-lg-4">
          <!--
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
        -->
        <img style="border-radius: 50%; width:140px; height:140px" src="cat.jpg">
          <h2 style="font-family: 'Georgia',Serif; color:#6cacbc">Fii voluntar!</h2>
          <p style="font-family: 'Copperplate',Fantasy;">O plimbare cu un anim??lu?? nu stric??!</p>
          <p>
            <a class = "btn btn-secondary" href = "pagina-voluntari.php" style="font-family: 'Copperplate',Fantasy;">Vreau s?? devin voluntar!</a>
          </p>
        </div>
      </div>
    </div>
    <hr class = "divider">
    <div class = "content row">
      <div class = "description">
        <h2 class = "desctitle" style="font-family: 'Georgia',Serif;color:#c2186e">Robi
        <span class = "text-muted" style="font-family: 'Georgia',Serif;">, uria??ul bl??nd</span>
        </h2>
        <p class = "descdesc" style="margin-left: 10px; margin-right: 10px; font-family: 'Copperplate',Fantasy;color:#3c3c7b;">Robi este un iepure de talie mare, abandonat de familia sa care s-a mutat la ora??. Datorit?? unor persoane cu suflet mare, Robi a ajuns la noi, 
          iar dup?? scurt timp ??i-a g??sit o nou?? familie care ??l r??sfa????. Cu ajutorul nostru, acesta ??i-a g??sit un c??min potrivit unde poate duce o via???? lini??tit?? ??i unde 
          are parte de iubire necondi??ionat??.
        </p>
      </div>
      <div class = "image">
        <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee"></rect>
          <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>
      -->
      <img style=" width:500px; height:500px" src="robi.jpg">
      </div>
    </div>
    <hr class = "divider">
    <div class = "content row">
      <div class = "description">
        <h2 class = "desctitle" style="font-family: 'Georgia',Serif;color:#c2186e">Lola
        <span class = "text-muted" style="font-family: 'Georgia',Serif;">,bunicu??a</span>
        </h2>
        <p class = "descdesc" style="margin-left: 10px; margin-right: 10px; font-family: 'Copperplate',Fantasy; color:#3c3c7b;">Lola este un meti?? care a fost loial?? st??p??nului p??n?? la sf??r??itul vie??ii acestuia. Dup?? acel moment tragic, Lola a fost adus?? la adapostul nostru
          unde a avut parte de mult?? aten??ie ??i iubire. ??n prezent, este adoptat?? de o voluntar?? de-a noastr?? care are grij?? ca ultimii ani de via???? ai Lolei s?? fie cei mai buni.
        </p>
      </div>
      <div class = "image">
        <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee"></rect>
          <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>
      -->
      <img style=" width:500px; height:500px" src="lola.webp">
      </div>
    </div>
    <hr class = "divider">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
	<script>
function myFunction() {
  alert("HELP! \n 1. Pagina Acas?? afi??eaz?? ultimele nout????i legate de centrul nostru de adop??ie. \n 2. Pagina Despre noi??? con??ine informa??ii despre istoricul ??i misiunea noastr??. \n 3. Dac?? dori??i s?? ne ajuta??i o pute??i face prin dou?? metode: don??nd bani pentru a putea acoperi diferite costuri pentru ??ntre??inerea animalelor sau implic??ndu-v?? chiar dumneavoastr?? ??i devenind voluntar. \n a) pentru a putea dona trebuie s?? face??i click pe ,,Cum pot s?? ajut????, iar din meniul ap??rut face??i click pe ,,Doneaz?????, acest lucru va deschide pagina doneaz??, care con??ine toate informa??iile necesare pentru a face o dona??ie. \n b) pentru a deveni voluntar, din acela??i meniu, selecta??i ,,Al??tur??-te voluntarilor??? care va deschide pagina pentru voluntari. \n Aceast?? pagin?? cuprinde toate informa??iile legate de completarea cererilorde voluntariat, precum ??i responsabilit????ile ce revin voluntarilor. \n 4. Dac?? dori??i s?? vede??i ce anim??lu??e se afl?? ??n grija noastr??, selecta??i ,,Adopt????? din bara de meniu. Aici pute??i selecta dintre categoriile de animale pe care le ad??postim f??c??nd un click pe numele categoriei. \n 5. Dac?? dori??i s?? adopta??i un anim??lu??, tot din pagina de vizualizare face??i click pe butonul ,,Adopt?????, care va merge pe formularul ce trebuie completat pentru a ??ncepe procesul de adop??ie. \n 6.	Dac?? ave??i alte ??ntreb??ri sau nel??muriri, ne pute??i contacta prin intermediul num??rului de telefon din subsolul paginii ,,Contact??? sau complet??nd formularul de pe aceea??i pagina. Echipa noastr?? va citi mesajele ??i v?? va r??spunde c??t de repede se poate. \n 7.	Exist?? ??i posibilitatea de logare sau creare cont, acces??nd iconi??a de pe bara de meniu. Astfel, v?? putem ??ine la curent cu activitatea noastr??.");
}
</script>
  </body>
</html>
