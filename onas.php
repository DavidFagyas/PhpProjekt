<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style1.css">
    <title>Dostupné autá</title>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <div id="goToTop" class="hore" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div>
      
<header>
    
    <a href="index.php">
        <img src="logo .jpg"  height="75px" width="105px" >
      </a>
    <h1 >Autobazár Dávid</h1>
    <nav style="top: auto;">
        <ul class="navbar-nav">
            <a class="nav-link" href="index.php">Domov</a></li>
            <a class="nav-link" href="dostupne-auta.php">Dostupné autá</a></li>
            <a class="nav-link" href="onas.php">O nás</a></li>
            <a class="nav-link" href="kontakt.php">KONTAKT</a></li>
        </ul>
    </nav>
</header>
 <div class="stplce"><h3>Otváracie hodiny</h3> <br>
 Pondelok: 9:00-17:00 <br>
   Utorok: 9:00-17:00 <br>
   Streda: 9:00-17:00 <br>
   Štvrtok 9:00-17:00 <br>
   Piatok: 9:00-17:00<br>
   Sobota: 9:00-13:00<br>
   Nedeľa: Zatvorená<br> </div>
</div> 
   <div class="stplce"></div><h3>Kontakt onás</h3> <br>
     Tel.č: +421 956 569 585 <br>
     Email: autobazardavid@bazar.sk<br>
     ičo:5415315131 <br>
     Dič:5534533331 <br>
     Ulica akademicak 15115<br></div>
    <br>
    <br>
    <div class="stplce"></div><h3>Kontakt o Servise</h3> <br>
    <a class="nav-link" href="https://auto-motiv.sk/?gad_source=1&gclid=CjwKCAiA-P-rBhBEEiwAQEXhHzYm8YyoK5lbYrCMgQOhcuDS58c5Dbx03FEqy7-D8rAbBWwgC5_R3RoCfo8QAvD_BwE">BMW</a></li><br>
    <a class="nav-link" href="https://www.galimex.sk/servis/?gclid=CjwKCAiA-P-rBhBEEiwAQEXhH-sjZRqV7R1o5vgENSfZPkeqUxAWZFzMshsEf3ZvnckxPjEUV1obNRoCH3wQAvD_BwE">AUDI</a></li><br>  
    <a class="nav-link" href="https://borsauto.sk/?gclid=CjwKCAiA-P-rBhBEEiwAQEXhH7PLeTnAcyU8rtmxqs_pyxTU0EfVI1DgdufakFT9NzuYIrP4SuwgWhoCSbAQAvD_BwE">ŠKODA</a></li><br>  
</div> 


<div class="accordion">
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion('section1')">Section 1</div>
      <div class="accordion-content" id="section1">This is the content for Section 1.</div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion('section2')">Section2</div>
      <div class="accordion-content" id="section2">This is the content for Section 2.</div>
    </div>
  
  </div>
    <br>
    <br>
    <br>

    
     
    
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
    
    <script>showSlides();
        document.getElementById('goToTop').addEventListener('click', scrollToTop);
    function scrollToTop() {
        window.scroll({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
     } 
     function toggleAccordion(sectionId) {
    var content = document.getElementById(sectionId);
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  }
     </script>
    
    
</body>
</html>
