<!-- Header include css/ en andere belangrijke resources als javascript -->
<?php include("includes/header.php")?>
<body>
<div class="wrapper">
    <header class="header">
        <!-- navigation include navigatie bar/links en logo -->
        <?php include("includes/navigation.php")?>
    </header>
    <!-- Center content, die je ophaalt met een include per var pagina111111111 -->
        <article class="main">
            <h1 class= "center"></h1>
            <!-- Content per page id -->
            <?php
              if (isset ($_GET["page"])) {
                // code...
                $p = $_GET["page"];
                $page = "includes/".$p.".php";

                  if (file_exists($page))
                    // code...
                    include($page);
                      else
                        // code...
                        echo "Sorry wij kunnen de pagina niet vinden.";
              }
              //Als je index.php ophaaalt. wil je altijd de homepagina zien.
              else {
                // code...
                $p = 'home';
                $page = "includes/".$p.".php";

                  if (file_exists($page))
                    // code...
                    include($page);
              }
            ?>
        </article>
    <!-- Links content content -->
            <aside class="aside aside-1">
                <div class= "Left">
                    <h1>LINKS</h1>
                </div>
            </aside>
    <!-- Rechts content -->
            <aside class="aside aside-2">
                <div class= "Right">
                    <h1>RECHTS</h1>
                    <!-- Inhoudelijk pas te zien, nadat je op de link inloggen hebt gedrukt -->
                    <div class="modal">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                                <div class="login-wrapper">
                                    <form action="" class="form">
                                        <h2>Inloggen</h2>
                                        <div class="input-group">
                                            <input type="text" name="loginUser"id="loginUser" required>
                                            <label for="user">Gebruikersnaam</label>
                                        </div>

                                        <div class="input-group">
                                            <input type="password" name="loginPassword" id="loginPassword" required>
                                            <label for="pass">Wachtwoord</label>
                                        </div>

                                        <input type="submit" value="Login" class="submit-btn">
                                        <a href="#forgot-pw" class="forgot-pw">Wachtwoord vergeten?</a> </form>

                                    <div id="forgot-pw">
                                        <form action="" class="form">
                                            <a href="#" class="close">&times;</a>
                                            <h2>Reset wachtwoord</h2>
                                            <div class="input-group">
                                                <input type="email" name="email" id="email" required>
                                                <label for="email">Email</label>
                                            </div>
                                            <input type="submit" value="Submit" class="submit-btn">
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- Script direct onder de code, anders krijg je een foutcode: myFunction can't be Null -->
                        <script>
                            var modal = document.querySelector(".modal"); //Selecteer modal
                            var trigger = document.querySelector(".trigger"); // actie na link
                            var closeButton = document.querySelector(".close-button"); //aflsuiten content

                            function toggleModal() {
                                modal.classList.toggle("show-modal"); // het tonen van de class modal
                            }

                            function windowOnClick(event) {
                                if (event.target === modal) {
                                    toggleModal();
                                }
                            }

                            trigger.addEventListener("click", toggleModal); //clickevents
                            closeButton.addEventListener("click", toggleModal); //clickevents
                            window.addEventListener("click", windowOnClick); //clickevents
                        </script>
                </div>
            </aside>
    <footer class="footer">Footer
        <?php include("includes/footer.php")?>
    </footer>

    <!--start*chatbot-->
    <div id="msg">
        <div id="header" onclick="closeMsg()">
            <img src="img/customer_service.jpg" width="300"> <div class="online"></div>
            <p>Daphne van Boven</p>
        </div>
        <div id="text">
            <input type="text" name="" placeholder="Vraag maar raak..." id="input">
            <img id="btnEnter" src="https://www.transparentpng.com/thumb/send-email-button/zfOVUL-send-email-button-cut-out.png" class="sent" onclick="sentMsg()">
        </div>
        <div id="msg-sec"></div>
    </div>
    <div id="hide" onclick="showMsg()">
        <img src="img/customer_service.jpg" width="300"> <div class="online"></div>
        <p>Chatten</p>
    </div>
    <!--eind*chatbot-->
</div>
</body>
