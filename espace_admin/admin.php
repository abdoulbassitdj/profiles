<?php

require_once "../auto/config-2.php";

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/fonts/icofont/icofont.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="calendar.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>
<body>
    
    <header>
        <h3>Bon retour parmis nous !</h3>
        <a href="#"><i class="icofont-notification" title="notifications"></i></a>
        <img src="../images/doctors/doctor4.jpg" alt="">
        <h3><?php echo $_SESSION['nom'] ?></h3>
    </header>

    <main>

        <aside class="items">

            <div class="group">
                <div class="logo"><p>FS</p></div>
                <h5>FACULTY OF SCIENCES</h5>
            </div>

            <div class="group item active" data-service="etudiants">
                <p><i class="icofont-crutch"></i> etudiants</p>
            </div>

            <div class="group item" data-service="departements">
                <p><i class="icofont-ui-calendar"></i> departements</p>
            </div>

            <div class="group item" data-service="filiere">
                <p><i class="icofont-ui-calendar"></i> filiere</p>
            </div>
            
        </aside>

        <section class="service etudiants show" data-service="etudiants">

            <?php

                $req="SELECT COUNT(matricule) as nbr_etudiants FROM `etudiant`";
                $result=mysqli_query($con,$req);

                if (mysqli_num_rows($result)>0) {

                    while($num_etudiants = mysqli_fetch_array($result)){ ?>
                        <h4><span><?php echo $num_etudiants['nbr_etudiants'] ?></span> Etudiants sont preinscrits dans votre faculte.</h4>
                    <?php }
                    
                }

            ?>

            <div class="etudiants_list">

                <div class="list scroll">

                
                    <div class="list_head">
                        <div>nom complet</div>
                        <div>matricule</div>
                        <div>niveau</div>
                        <div>parcours</div>
                        <div>voir</div>
                    </div>

                    <div class="list_infos">

                        <?php

                            $req="SELECT * FROM `etudiant` INNER JOIN filiere WHERE etudiant.id_filiere = filiere.id_filiere";
                            $result=mysqli_query($con,$req);

                            if (mysqli_num_rows($result)>0) {
                                while($etudiant=mysqli_fetch_array($result)){ ?>
                                    
                                    <div class="list_info toprint" data-service="1" data-print="<?php echo $etudiant['matricule'] ?>"> 
                                        <div><?php echo $etudiant['nom']." ".$etudiant['prenom'] ?></div>
                                        <div><?php echo $etudiant['matricule'] ?></div>
                                        <div><?php echo $etudiant['cycle']." ".$etudiant['niveau'] ?></div>
                                        <div><?php echo $etudiant['nom_filiere'] ?></div>
                                        <div><i class="icofont-eye toggle_info" data-service="<?php echo $etudiant['matricule'] ?>"></i></div>
                                    </div>

                                    <div class="infos_detail" data-service="<?php echo $etudiant['matricule'] ?>">
                                
                                        <div class="info_identification">

                                            <div class="photo"><img src="<?php echo $etudiant['photo'] ?>" alt=""></div>

                                            <div class="info_id">
                                                <div>
                                                    <span>date de naissance</span>
                                                    <p><?php echo $etudiant['date_naissance'] ?></p>
                                                </div>

                                                <div>
                                                    <span>lieu de naissance</span>
                                                    <p><?php echo $etudiant['lieu_naissance'] ?></p>
                                                </div>

                                                <div>
                                                    <span>genre</span>
                                                    <p><?php echo $etudiant['genre'] ?></p>
                                                </div>

                                                <div>
                                                    <span>nationalite</span>
                                                    <p><?php echo $etudiant['nationalite'] ?></p>
                                                </div>
                                                <div>
                                                    <span>email</span>
                                                    <p><?php echo $etudiant['email'] ?></p>
                                                </div>

                                                <div>
                                                    <span>telephone</span>
                                                    <p><?php echo $etudiant['tel'] ?></p>
                                                </div>

                                                <div>
                                                    <span>fixe</span>
                                                    <p><?php echo $etudiant['fixe'] ?></p>
                                                </div>

                                                <div>
                                                    <span>ville</span>
                                                    <p><?php echo $etudiant['ville'] ?></p>
                                                </div>

                                                <div>
                                                    <span>quartier</span>
                                                    <p><?php echo $etudiant['quartier'] ?></p>
                                                </div>

                                                <div>
                                                    <span>residence</span>
                                                    <p><?php echo $etudiant['residence'] ?></p>
                                                </div>
                                            </div>

                                        </div>

                                        <button class="impr" onclick="print()">imprimer</button>

                                        <div class="ajout_notes">

                                            <h3>ajoutez des notes</h3>

                                            <div class="entete">
                                                <div class="unite">unite</div>
                                                <div class="code">code</div>
                                                <div class="credit">credit</div>
                                                <div class="note">note</div>
                                            </div>

                                            <?php

                                                // echo $etudiant['id_filiere']."\n";
                                                // echo $etudiant['cycle']."\n";
                                                // echo $etudiant['niveau']."\n";
                                            
                                                
                                                $requete="SELECT * FROM `unite` WHERE unite.id_filiere = $etudiant[id_filiere] AND unite.cycle = '$etudiant[cycle]' AND unite.niveau = $etudiant[niveau]";
                                                $a=mysqli_query($con,$requete);
                                            
                                            ?>

                                            <div class="formul">
                                                    <?php
                                                        if (mysqli_num_rows($a)>0) {
                                                            while($ue=mysqli_fetch_array($a)){ ?>

                                                                <div class="entete ue">
                                                                    <div class="unite"><?php echo $ue['libelle']?></div>
                                                                    <div class="code"><?php echo $ue['code_ue']?></div>
                                                                    <div class="credit"><?php echo $ue['nbr_credit']?></div>
                                                                    <div class="note">
                                                                        <form action="ajout_notes.php?matri=<?php echo $etudiant['matricule']; ?>" method="post">
                                                
                                                                            <input type="number" placeholder="Entrez la note ici" name="note">
                                                                            <input type="text" name="ue" value="<?php echo $ue['libelle']?>" class="hide">
                                                                            <input type="text" name="credit" value="<?php echo $ue['nbr_credit']?>" class="hide">
                                                                            <button>valider</button>

                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            <?php }
                                                        }
                                                    ?>

                                            </div>

                                        </div>

                                        <?php
                                            
                                                
                                            $requete2="SELECT * FROM `note` WHERE note.id_etudiant = '$etudiant[matricule]'";
                                            $notes=mysqli_query($con,$requete2);
                                            
                                        ?>

                                        <table>

                                            <tr class="head">
                                                <th>Unite d'enseigement</th>
                                                <th>Nombre de credit</th>
                                                <th>Note</th>
                                            </tr>

                                            <?php
                                                    if (mysqli_num_rows($notes)>0) {

                                                        while($note=mysqli_fetch_array($notes)){ ?>

                                                            <tr>
                                                                <td><?php echo $note['ue'] ?></td>
                                                                <td><?php echo $note['nbr_credit'] ?></td>
                                                                <td><?php echo $note['note'] ?></td>
                                                            </tr>

                                                        <?php }

                                                    }
                                            ?>

                                        </table>

                                        <?php
                                            
                                                
                                            $requete3="SELECT AVG(note) FROM `note` WHERE note.id_etudiant = '$etudiant[matricule]'";
                                            $moyenne=mysqli_query($con,$requete3);

                                            if (mysqli_num_rows($moyenne)>0) {
                                                $moy = mysqli_fetch_array($moyenne);
                                            }
                                            
                                        ?>

                                        <p class="moy">Moyenne : <?php echo round($moy[0],2); ?></p>

                                    </div>

                                <?php }
                            }
                            
                        ?>

                    </div>

                </div>

            </div>
        </section>
 
        <section class="service departements" data-service="departements">

            <?php

                $departements="SELECT * FROM `departement`";
                $result=mysqli_query($con,$departements);

            ?>

            <h4><span>6</span>departements sont actifs</h4>

            <div class="add_depart">

                <div>
                    <div>
                        <h2>Ajoutez Un departement</h2>
                        <p>Les departements...</p>
                    </div>
                    <a href="#liste_depart"><i class="icofont-curved-down" title="liste des departements"></i></a>
                </div>

                <form action="add.php" method="post">
                    <input type="text" name="code" placeholder="code du departement">
                    <input type="text" name="nom" placeholder="nom du departement">
                    <input type="text" name="admin" placeholder="identifiant administrateur du departement">
                    <div class="addingbtn">
                        <input type="submit" value="Ajouter">
                        <input type="reset" value="Annuler">
                    </div>
                </form>

            </div>

            <div class="liste_depart" id="liste_depart">

                <div class="depart">
                    <div class="img"><img src="../images/un/Une-vue-de-lUniversite-de-Ngaoundere.webp" alt=""></div>
                    <p class="purchaser"><strong>Departement 1</strong></p>
                    <p>Nombre des fillieres : <strong>00</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Gerer</a>
                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="depart">
                    <div class="img"><img src="../images/un/Une-vue-de-lUniversite-de-Ngaoundere.webp" alt=""></div>
                    <p class="purchaser"><strong>Departement 2</strong></p>
                    <p>Nombre des fillieres : <strong>00</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Gerer</a>
                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

            </div>

        </section>

        <section class="service filiere" data-service="filiere">

            <?php

                $departements="SELECT * FROM `departement`";
                $result=mysqli_query($con,$departements);

            ?>

            <h4><span>6</span>filiere sont fonctionnelles</h4>

            <div class="add_depart">
                <div>
                    <div>
                        <h2>Ajoutez une filiere</h2>
                        <p>Les filiere sont...</p>
                    </div>
                    <a href="#liste_depart"><i class="icofont-curved-down" title="liste des filiere"></i></a>
                </div>
                <form action="addF.php" method="post">
                    <select name="code_dep" id="">
                        <?php

                            if(mysqli_num_rows($result)>0) {

                                while($depart=mysqli_fetch_array($result)){?>
                                    <option value="<?php echo $depart['code_dpt']; ?>"><?php echo $depart['nom_dpt']; ?></option>
                                <?php }
                            }

                        ?>
                    </select>
                    <input type="text" name="code" placeholder="code de la filiere">
                    <input type="text" name="nom" placeholder="nom de la filiere">
                    <div class="addingbtn">
                        <input type="submit" value="Ajouter">
                        <input type="reset" value="Annuler">
                    </div>
                </form>
            </div>

            <div class="liste_depart" id="liste_depart">

                <div class="depart">
                    <div class="img"><img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt=""></div>
                    <p class="purchaser"><strong>Filiere 1</strong></p>
                    <p>Nombre etudiant <strong>9</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Gerer</a>
                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="depart">
                    <div class="img"><img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt=""></div>
                    <p class="purchaser"><strong>Filiere 1</strong></p>
                    <p>Nombre etudiant <strong>7</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Gerer</a>
                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

            </div>

            <!-- <div class="appointPlan">

                <div class="calendrier">
                    <div class="calendar">
                        <div class="month">
                            <i class="icon-chevron-thin-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="icon-chevron-thin-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Lun</div>
                            <div>Mar</div>
                            <div>Mer</div>
                            <div>Jeu</div>
                            <div>Ven</div>
                            <div>Sam</div>
                            <div>Dim</div>
                        </div>
                        <div class="days">
                        </div>
                    </div>
                </div>

                <div class="programme">

                    <div class="month">
                        <i class="icon-chevron-thin-left prev"></i>
                        <div class="date">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class="icon-chevron-thin-right next"></i>
                    </div>

                    <div class="monthdepart">
                        <h2>rendez-vous du jour</h2>
                        <div class="departList">
                            <ul>
                                <li>Amra <span>16h00 - 17h30</span></li>
                                <li>Ali Abdalla <span>01h00 - 02h30</span></li>
                                <li>Sara Sophia <span>20h00 - 22h00</span></li>
                                <li>Amra <span>toute la journee</span></li>
                                <li>Ali Abdalla <span>16h00 - 17h30</span></li>
                                <li>Sara Sophia <span>16h00 - 17h30</span></li>
                                <li>Amra <span>16h00 - 17h30</span></li>
                                <li>Ali Abdalla <span>16h00 - 17h30</span></li>
                                <li>Sara Sophia <span>16h00 - 17h30</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div> -->

        </section>

    </main>

    <footer></footer>


<script src="../assets/js/menu.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/list.js"></script>
<script src="calendar.js"></script>
<script src="script.js"></script>
<script src="toggle_info.js"></script>
<script src="../assets/js/print.js"></script>
</body>
</html>