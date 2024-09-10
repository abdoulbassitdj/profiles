<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/profiles/components/menu_footer/menu.css">
    <link rel="stylesheet" href="/profiles/components/menu_footer/footer.css">
    <link rel="stylesheet" href="/profiles/assets/fonts/icon_icomoon/style.css">
    <link rel="stylesheet" href="/profiles/assets/css/animation.css">
</head>
<body>

    <header>
        <?php 
            function menu(){ ?>
                
                <nav>
                <ul class="menu_box">
    
                    <li class="logo_box">UND</li>
    
                    <li class="hiddedMenu"> <a href="/profiles/index.php"  class="menu">Accueil</a>
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
    
                    <li class="btn_top">
                        <button class="btn">
                            <p>connecter</p>
                        </button>
                        <ul class="btn_list">
                            <li class="btn-items"><a href="/profiles/etudiant/connect_student.php">Etudiants</a></li>
                            <li class="btn-items"><a href="/profiles/espace_admin/connectA.php">Administrateur</a></li>
                            <li class="btn-items"><a href="#">Tuteurs</a></li>
                            <li class="btn-items"><a href="#">Visiteurs</a></li>
                        </ul>
                    </li>
    
                </ul>
            </nav>
            <?php }
        ?>
    </header>

    <footer>

    <?php 
            function footer(){ ?>
            
                <div class="contact reveal">
           <div>
               <i class="icon-mail"></i>
               <a href="mailto:abdoulbassitdj@gmail.com">abdoulbassitdj@gmail.com</a>
           </div>
           <div>
                <i class="icon-location-pin"></i>
                <address>000 , Main street Ngaoundere,Cameroon</address>
            </div>
           <div>
                <i class="icon-phone"></i>
                <a href="tel:(+237)676517669">(+237) 678246968</a>
           </div>
        </div>

        <hr>

        <div class="links reveal">
            <div class="services">
                <h3>services</h3>
                <a href="#">preincriptions</a>
                <a href="#">notes</a>
                <a href="#">activites</a>
                <a href="#">oportunites</a>
            </div>
            <div class="about">
                <h3>about</h3>
                <a href="#">preincriptions</a>
                <a href="#">notes</a>
                <a href="#">activites</a>
                <a href="#">oportunites</a>
            </div>
            <div class="usefull_links">
                <h3>links</h3>
                <a href="#">preincriptions</a>
                <a href="#">notes</a>
                <a href="#">activites</a>
                <a href="#">oportunites</a>
            </div>
            <div class="newsletter">
                <h3>suscribe</h3>
                <input type="text" placeholder="Entrez Votre Email">
                <button type="submit"><i class="icon-chevron-right"></i></button>
                <p>get informations in your mail box.</p>
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
           <?php }
        ?>

    </footer>


    <script src="/profiles/components/menu_footer/menu.js"></script>
    <script src="/profiles/assets/js/animation.js"></script>

</body>
</html>