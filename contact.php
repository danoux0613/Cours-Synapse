<? include_once 'template/head.php'?>

<body>
    <? include_once 'template/navbar.php'?>
    <!-- contact form start -->
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                <form action="other/sendmail.php" method="POST">
                <h3>Contactez-nous!</h3>
                <label for="input1">Nom</label>
                <br>
                <input id="input1" name="nom" type="text" required minlength="3" >
                <br><br>
                <label for="input2">Prénom</label><br>
                <input id="input2" name="prenom" type="text" required minlength="3">
                <br><br>
                <label for="input3">Adresse email</label><br>
                <input id="input3" name="mail" type="email" required minlength="3">
                <br><br>
                <label for="input4">Téléphone</label><br>
                <input id="input4" name="phone" type="tel" required minlength="10">
                <br><br>
                <label for="input5">Département</label><br>
                <input id="input5" name="codepostale" type="number" required minlength="3">
                <br><br>
                <label for="input6">Classe</label><br>
                <select name="select1" id="input6" >
                    <option value="cp">CP</option>
                    <option value="ce1">CE1</option>
                    <option value="ce2">CE2</option>
                    <option value="cm1">CM1</option>
                    <option value="cm2">CM2</option>
                    <option value="6eme">6ème</option>
                    <option value="5eme">5ème</option>
                    <option value="4eme">4ème</option>
                    <option value="3eme">3ème</option>
                    <option value="seconde">Seconde</option>
                    <option value="premiere">Première</option>
                    <option value="terminale">Terminale</option>
                </select>
                <br><br>
                <label for="input7">Quelle sont vos besoins? </label>
                <br><br>
                <textarea name="demande" id="input7" cols="30" rows="5" required minlength="3"></textarea>
                <br><br>
                <label for="input8">Comment avez vous connu Cours Synapse ?</label>
                <br><br>
                <textarea name="demande1" id="input8" cols="30" rows="10" placeholder="internet, Presse, Amis, autres.." required minlength="3"></textarea>
                <br><br>
                <input id="buton1" type="submit" value="Valider">
                <br>
            </form>
                </div>

                <div class="col-lg-5 col-sm-12">
                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <span class="text-muted">Nous sommes des professionnels</span>
                        <h2 class="mb-5 mt-2">N'hésitez pas à nous contacter pour tout type d'informations</h2>

                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>19e arrondissement
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email: contact@cours-synapse.fr
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Tél: 01 85 08 40 55
                            </li>
                        </ul>

                        <ul class="social-icons list-inline mt-5">
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <? include_once 'template/courssurmesure.php'?>

    <? include_once 'template/avis.php'?>
    <? include_once 'template/maps.php'?>
    <? include_once 'template/footer.php'?>

    </div>

    <? include_once 'template/importscripts.php'?>

</body>

</html>