<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Fórum - VeeGan</title>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="../css/StyleForum.css">
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <div class="wrapper">
        <!------------- Navbar !----------------->
        <div class="navbaruser">
          <div class="left">
            <ul>
              <li>
                <a href="../painel.php"id="logo" class="noselect" >&nbsp;VeeGan&nbsp;</a>
              </li>  
          </div>
          <div class="right">
            <ul>
              <li>
                <a href="#">
                  <p>Bem vindo,
                    <br>
                      <span><?php echo $_SESSION['nome'];?></span>&nbsp;
                    </p>
                      <i class="fas fa-angle-down"></i>
                    </a>
                    <!-- Menu Dropdown !-->
                    <div class="dropdown">
                      <ul>
                        <li>
                          <a href="../IndexUser.html">
                            <i class="fas fa-user"></i> Perfil
                          
                          </a>
                        </li>
                        <li>
                          <a href="../logout.php">
                            <i class="fas fa-sign-out-alt"></i> Sair
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
            <!-------------- Navbar3 !----------------->

              <div class="topnav2">
                  <a class="" href="../IndexForum.php">Voltar</a>
             <div class="search-container"></div>
               <div class="search-container">
              </div>
            </div>
                      <!-- Conteudo !-->
                            <div class="conteudo"><br>
                                <a class="Ancora"></a>
                                <h1 style="margin-bottom: 40px;">Queria um sub do Veegan no Reddit.</h1>

                                <h2>Autor: <a class="link"style="text-decoration: none;">Ulazaki0129</a>
                                  <br><br>
                                <p>Olá Veegan! Você já ouviu falar na rede social Reddit? É um site ainda mais conhecido no exterior, mas que vem se popularizando no Brasil. Ele lembra um pouco o formato do Orkut, mas as comunidades são chamadas Subreddits ou apenas “subs”. Já pensou em criar um do Vista-se? Eu uso muito pra discutir sobre veganismo, mas os subs mais movimentados ainda são de fora, como o /r/vegan e o /r/veganrecipes. Tem também o /r/BrasilVegan, com conteúdo em português, mas ainda não tem muitas postagens.
                                E aí, já conhecia? Espero que se empolgue e crie um sub do Veegan por lá!
                                Abraço!
                                </div><br><br><br><br><br><br><br><br><br><br>
                                        <!------------ Rodapé !------------>
                                        <div class="espaco">
            <footer class="footer">
                <br />
                <div class="grid-container">
                    <br />
                    <div class="grid-item">
                        <br />
                        <ul>
                            <li>
                                <a href="https://www.facebook.com" target="self"><img class="imagemrodape" src="../imgs/facebook.png" /></a>&nbsp;&nbsp;
                                <a href="https://www.twitter.com" target="self"><img class="imagemrodape" src="../imgs/twitter.png" /></a>&nbsp;&nbsp;
                                <a href="https://www.instagram.com" target="self"><img class="imagemrodape" src="../imgs/instagram.png" /></a><br />
                                <br />
                            </li>
                            <li><a href="#sobreveegan">Info</a>&nbsp;&nbsp;&nbsp;<a href="ajuda.html">Suporte</a>&nbsp;&nbsp;&nbsp;<a href="#">Telefone</a>&nbsp;&nbsp;&nbsp;<a href="#">Email</a><br /></li>
                            <li><a href="#">Termos de Uso</a>&nbsp;&nbsp;&nbsp;<a href="#">Política de Privacidade</a></li>
                        </ul>
                    </div>
                    <br />
                    <br />
                    <h7>&copy; 2020 VeeGan</h7>
                </div>
            </footer>


<script type="text/javascript">
  document.querySelector(".right ul li").addEventListener("click", function () {
  this.classList.toggle("active");
});
</script>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">
  //Codigo do botão do Upvote
  var i = 0

function Count() {
    document.getElementById("output").innerHTML = i++ + 1;
}
</script>
        </body>
      </html>