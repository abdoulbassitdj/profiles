<?php

function menu($a,$b) {
    echo '
    <nav>
            <ul class="menu_box">

                <li class="logo_box">LOGO</li>

                <li class="hiddedMenu"> <a href="#"  class="menu">Accueil</a>
                    <!-- <ul class="sous_menu_box">
                        <li class="sous_menu">sous_menu 1</li>
                        <li class="sous_menu">sous_menu 2</li>
                        <li class="sous_menu">sous_menu 3</li>
                    </ul> -->
                </li>

                <li class="hiddedMenu"> <a href="#"  class="menu subm">A propos</a>
                    <ul class="sous_menu_box">
                        <li class="sous_menu">sous_menu 1</li>
                        <li class="sous_menu">sous_menu 2</li>
                        <li class="sous_menu">sous_menu 3</li>
                    </ul>
                </li>

                <li class="hiddedMenu"> <a href="#" class="menu subm">Etudiants</a>
                    <ul class="sous_menu_box">
                        <li class="sous_menu">sous_menu1</li>
                        <li class="sous_menu">sous_menu2</li>
                        <li class="sous_menu">sous_menu3</li>
                    </ul>
                </li>

                <li class="btn-top"><main-button></main-button></li>

            </ul>
        </nav>';
}

function footer(){
echo

'<section class="foot">

    <div class="contact reveal">
    <div>
        <i class="icon-mail"></i>
        <a href="mailto:norhealth@gmail.com">norhealth@gmail.com</a>
    </div>
    <div>
            <i class="icon-location-pin"></i>
            <address>170 , Main street Ngaoundere,Cameroon</address>
        </div>
    <div>
            <i class="icon-phone"></i>
            <a href="tel:(+237)676517669">(+237) 676517669</a>
    </div>
    </div>

    <hr>

    <div class="links reveal">
        <div class="services">
            <h3>services</h3>
            <a href="#">maternite</a>
            <a href="#">cardiologie</a>
            <a href="#">orthodontie</a>
            <a href="#">ambulance</a>
        </div>
        <div class="about">
            <h3>about</h3>
            <a href="#">maternite</a>
            <a href="#">cardiologie</a>
            <a href="#">orthodontie</a>
            <a href="#">ambulance</a>
        </div>
        <div class="usefull_links">
            <h3>links</h3>
            <a href="#">maternite</a>
            <a href="#">cardiologie</a>
            <a href="#">orthodontie</a>
            <a href="#">ambulance</a>
        </div>
        <div class="newsletter">
            <h3>suscribe</h3>
            <input type="text" placeholder="Entrez Entre Email">
            <button type="submit"><i class="icon-chevron-right"></i></button>
            <p>get health information in your mail box.</p>
        </div>
    </div>

    <div class="social reveal">
        <div class="icons">
            <div><i class="icon-facebook2"></i></div>
            <div><i class="icon-instagram2"></i></div>
            <div><i class="icon-linkedin22"></i></div>
            <div><i class="icon-twitter2"></i></div>
        </div>
        <div class="copyright">
            <p>2022 Bonita inc . All rights reserved.</p>
        </div>
    </div>

</section>'; 
}

?>