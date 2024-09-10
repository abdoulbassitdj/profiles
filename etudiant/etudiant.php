<?php

include "../auto/config-2.php";

session_start();

$req = "SELECT * FROM `filiere` WHERE id_filiere = '$_SESSION[id_filiere]'";
$result = mysqli_query($con, $req);

if (mysqli_num_rows($result) > 0) {

    $filiere = mysqli_fetch_array($result);
    $_SESSION['filiere'] = $filiere['nom_filiere'];
} else {
    echo "marche pas";
}

$req = "SELECT * FROM `departement` WHERE code_dpt = '$filiere[id_depart]'";
$result = mysqli_query($con, $req);

if (mysqli_num_rows($result) > 0) {

    $departement = mysqli_fetch_array($result);
    $_SESSION['departement'] = $departement['nom_dpt'];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Etudiant</title>
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/fonts/icofont/icofont.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>

<body>

    <header>

        <h3>Bon retour parmis nous !</h3>
        <a href="#"><i class="icofont-notification" title="notifications"></i></a>
        <img src="<?php echo $_SESSION['photo'] ?>" alt="">
        <h3><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></h3>

    </header>

    <main>


        <section class="left items">

            <div class="group">
                <div class="logo">
                    <p>FS</p>
                </div>
                <h5>FACULTY OF SCIENCES</h5>
            </div>

            <div class="group item" data-service="profile">
                <i class="icofont-graduate-alt"></i>
                <div>profile</div>
            </div>

            <div class="group item" data-service="dashboard">
                <i class="icofont-dashboard-web"></i>
                <div>dashboard</div>
            </div>

            <div class="group item active" data-service="notes">
                <i class="icofont-graduate"></i>
                <div>notes</div>
            </div>

            <div class="group item" data-service="payements">
                <i class="icofont-pay"></i>
                <div>payements</div>
            </div>

        </section>

        <section class="bord">

            <div class="profile service" data-service="profile">

                <div class="presentation">
                    <div class="text">
                        <h2>Hello, <span> <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?> !</span></h2>
                        <p>Bon retour parmi nous. Vous pouvez consulter vos informations et les mettre a jour en cliquant sur update.</p>
                        <button><a href="profile.php">update profile</a></button>
                    </div>
                    <!-- <div class="pic"><img src="../images/e8ad1e743e0c08974529fe8101eeef4a.jpg" alt=""></div> -->
                </div>

                <div class="infos">

                    <div class="info1">

                        <div class="photo"><img src="<?php echo $_SESSION['photo'] ?>" alt=""></div>

                        <div class="identite">

                            <div>
                                <span>nom et prenom</span>
                                <p><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></p>
                            </div>

                            <div>
                                <span>date de naissance</span>
                                <p><?php echo $_SESSION['date'] ?></p>
                            </div>

                            <div>
                                <span>lieu de naissance</span>
                                <p><?php echo $_SESSION['lieu'] ?></p>
                            </div>

                            <div>
                                <span>genre</span>
                                <p><?php echo $_SESSION['sexe'] ?></p>
                            </div>

                            <div>
                                <span>nationalite</span>
                                <p><?php echo $_SESSION['nationalite'] ?></p>
                            </div>

                        </div>

                    </div>

                    <div class="info2">

                        <div class="parcours">
                            <p>parcours academique</p>
                        </div>

                        <div class="matricule">
                            <span>matricule</span>
                            <p><?php echo $_SESSION['id'] ?></p>
                            <i class="icofont-copy" title="copier"></i>
                        </div>
                        <div>
                            <span>departement</span>
                            <p><?php echo $_SESSION['departement'] ?></p>
                        </div>
                        <div class="filiere">
                            <span>filiere</span>
                            <p><?php echo $_SESSION['filiere'] ?></p>
                        </div>
                        <div>
                            <span>cycle</span>
                            <p><?php echo $_SESSION['cycle'] ?></p>
                        </div>
                        <div>
                            <span>niveau</span>
                            <p>niveau <?php echo $_SESSION['niveau'] ?></p>
                        </div>

                        <div class="contact">
                            <p>contact et addresse</p>
                        </div>

                        <div>
                            <span>email</span>
                            <p><?php echo $_SESSION['email'] ?></p>
                        </div>
                        <div>
                            <span>telephone</span>
                            <p><?php echo $_SESSION['tel'] ?></p>
                        </div>
                        <div>
                            <span>fixe</span>
                            <p><?php echo $_SESSION['fixe'] ?></p>
                        </div>
                        <div>
                            <span>ville</span>
                            <p><?php echo $_SESSION['ville'] ?></p>
                        </div>
                        <div>
                            <span>quartier</span>
                            <p><?php echo $_SESSION['quartier'] ?></p>
                        </div>
                        <div>
                            <span>residence</span>
                            <p><?php echo $_SESSION['residence'] ?></p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="dashboard service" data-service="dashboard"></div>

            <div class="notes service show" data-service="notes">
                
                <?php


                    $requete2 = "SELECT * FROM `note` WHERE note.id_etudiant = '$_SESSION[id]'";
                    $notes = mysqli_query($con, $requete2);

                ?>

                <table>

                    <h3>Hystorique de vos notes</h3>

                    <tr class="head">
                        <th>Unite d'enseigement</th>
                        <th>Nombre de credit</th>
                        <th>Note</th>
                    </tr>

                    <?php
                        if (mysqli_num_rows($notes) > 0) {

                            while ($note = mysqli_fetch_array($notes)) { ?>

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


                    $requete3 = "SELECT AVG(note) FROM `note` WHERE note.id_etudiant = '$_SESSION[id]'";
                    $moyenne = mysqli_query($con, $requete3);

                    if (mysqli_num_rows($moyenne) > 0) {
                        $moy = mysqli_fetch_array($moyenne);
                    }

                    ?>

                <p class="moy">Moyenne : <?php echo round($moy[0], 2); ?></p>

            </div>

            <div class="payements service" data-service="payements">

                <h3>payement des frais academiques</h3>

                <form action="pay.php" method="post">

                    <div class="infos_paye">
                        <label for="matricule">matricule</label>
                        <input type="text" value="<?php echo $_SESSION['id'] ?>" name="matricule" readonly>
                    </div>

                    <div class="infos_paye">
                        <label for="nom">nom et prenom</label>
                        <input type="text" value="<?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?>" readonly disabled>
                    </div>

                    <div class="infos_paye">
                        <label for="date_naiss">date de naissance</label>
                        <input type="text" value="<?php echo $_SESSION['date'] ?>" readonly disabled>
                    </div>

                    <div class="infos_paye">
                        <label for="lieu_naiss">lieu de naissance</label>
                        <input type="text" value="<?php echo $_SESSION['lieu'] ?>" readonly disabled>
                    </div>

                    <div class="infos_paye">
                        <label for="sexe">sexe</label>
                        <input type="text" value="<?php echo $_SESSION['sexe'] ?>" readonly disabled>
                    </div>

                    <div class="infos_paye">
                        <label for="parcours">parcours</label>
                        <input type="text" value="<?php echo $_SESSION['filiere'] ?>" readonly disabled>
                    </div>

                    <div class="infos_paye">
                        <label for="cycle_niveau">cycle et niveau</label>
                        <input type="text" value="<?php echo $_SESSION['cycle'] . " " . $_SESSION['niveau'] ?>" readonly disabled>
                    </div>

                    <div class="infos_paye">
                        <label for="montant">montant</label>
                        <input type="text" name="montant">
                    </div>

                    <div class="infos_paye">
                        <label for="date">date de payement</label>
                        <input type="text" name="date">
                    </div>

                    <div class="infos_paye num_comptes">
                        <label for="receveur">No compte receveur</label>
                        <input type="text">
                    </div>

                    <div class="infos_paye num_comptes">
                        <label for="payeur">No compte payeur</label>
                        <input type="text">
                    </div>

                    <div class="infos_paye">
                        <div class="tranches">
                            <div class="tranche1"><input type="checkbox" name="tranche[]" id="" value="tranche 1"><span>tranche 1</span></div>
                            <div class="tranche2"><input type="checkbox" name="tranche[]" id="" value="tranche 2"><span>tranche 2</span></div>
                        </div>
                    </div>

                    <div class="validation">
                        <button>confirmer le payement</button>
                        <button type="reset">annuler</button>
                    </div>

                </form>

            </div>

        </section>

    </main>

    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/list.js"></script>

</body>

</html>