<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style1.css">

    <title>Autobazár Dávid</title>
</head>


<body>
<header>
    <a href="index.php">
        <img src="logo .jpg"  height="75px" width="105px" >
      </a>
    <h1 >Autobazár Dávid</h1>
    <div class="header">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</div>
    <nav style="top: auto;">
        <ul class="navbar-nav">
            <a class="nav-link" href="index.php">Domov</a></li>
            <a class="nav-link" href="dostupne-auta.php">Dostupné autá</a></li>
            <a class="nav-link" href="onas.php">O nás</a></li>
            <a class="nav-link" href="kontakt.php">KONTAKT</a></li>
        </ul>
    </nav>
</head>

<body>
    <div id="cookies">
        <div class="containter">
            <div class="subcontainer">
                <div class="cookies">
                    <p>Tento web používa na poskytovanie služieb a analýzu návštevnosti súbory cookie. Jeho používaním bez zmeny nastavenia vášho webového prehliadača pre súbory cookie súhlasíte s používaním cookies
                        <a href="">Dozvedieť sa viac</a>
                        <button id="cookies-btn">Rozumiem</button>
                    </p>
                </div>
            </div>
        </div>
    </div>

<sectiona>
    Riadenie vzťahov so zákazníkmi: predajcovia automobilov musia rozvíjať úzke vzťahy so zákazníkmi.<br> Pomáhajú im vybrať si správne auto na základe ich potrieb a rozpočtu.<br>

    Riadenie procesu predaja: predajcovia sú zodpovední za celkové riadenie procesu predaja.<br> To zahŕňa informovanie zákazníkov, prezentáciu automobilov, riadenie predajného procesu a vypracovanie predajných zmlúv.<br>
    
    Analýza trhu: sledujú trendy na trhu s automobilmi a sú informovaní o aktuálnych cenách, modeloch a ďalších relevantných informáciách.<br>


</sectiona>
<div class="slideshow-container">
    
    <div class="mySlides">
        <img src="autoslideshow/car1_show.webp" style="width:100%">
    </div>

    <div class="mySlides" >
    
        <img src="autoslideshow/car2_show.jpeg" style="width:100%" >
    </div>
    <div class="mySlides" >
    
        <img src="autoslideshow/car4_show.jpg" style="width:100%" >
    </div>
    </div>  
    <sectiona>

    <script>
        /**slideshow automata*/
        let slideIndex = 0;
        function showSlides() {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); 
        }
    
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
    
       //sipka hora*/
        showSlides();
        document.getElementById('goToTop').addEventListener('click', scrollToTop);
    function scrollToTop() {
        window.scroll({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    }
    //cookies*/
  setCookie =(cName,cValue,expDays)=>{
  let date = new Date();
  date.setTime(date.getTime()+(expDays2460601000));
  const expires="expires="+date.toUTCString();
  document.cookie = cName +"=" + cValue +";" + expires + "; path=/";
}

getCookie = (cName)=>{
  const name = cName +"=";
  const cDecoded = decodeURIComponent(document.cookie);
  const cArr = cDecoded.split("; ");
  let value;
  cArr.forEach(val=>{
    if(val.indexOf(name)==0) value =val.substring(name.length);

  })

  return value;
}
document.querySelector("#cookies-btn").addEventListener("click",()=>{document.querySelector("#cookies").style.display="none";
setCookie("cookie",true,30)

})

cookieMessage=()=>{
  if(!getCookie("cookie"))
  document.querySelector("#cookies").style.display="block"
}
window.addEventListener("load",cookieMessage);
    </script>
  
    <footer>
             
    <div class="col-25">
        <h3 class="footernadpis"> Tu sa nachádzame</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10614.839764656655!2d18.0910518!3d48.3084298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba2bad032d96b960!2sFakulta%20pr%C3%ADrodn%C3%BDch%20vied%20a%20informatiky!5e0!3m2!1ssk!2ssk!4v1669307792855!5m2!1ssk!2ssk" width="650" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
      </div>
            <div class="footermenu2">
                <h3 class="footernadpis">SLEDUJTE NÁS!</h3>
                <div class="footerikony">
                    <o href="https://www.facebook.com/david.fagyas.3"><i class="fab fa-facebook-f"></i></o>
                    <o href="https://www.instagram.com/_15david_/"><i class="fab fa-instagram"></i></o>  
                    
                </div> 
            </div>
            <h3 class="footernadpis">Pripojte sa k Newsletteru</h3>  <br>
            <br>
            <br>



            <br>
                    <div class="footermail"> <br>
                        <input type="email" placeholder="ZADAJTE VÁŠ EMAIL"  class="footerinput"> <br>
                        <button class="footerbtn">ODOSLAŤ</button>
                    </div>
                </div>
                <div class="footermenu2">
        </div>
    </footer>
    <footer>
        <div class="footermenu2">
        <span class="autor">&copy;Dávid Fagyas, 2023.</span>
    </div>

    </footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <div id="goToTop" class="hore" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div>
</body>
</html>
