<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <title>VeeGan</title>
    </head>
    <body>
        <!------------ Primeiro Manu!------------>
        <div class="noselect" id="navbar">
            <a href="../index.php" id="logo">&nbsp;VeeGan&nbsp;</a>
            <div id="navbar-right">
                <a id="textmenu1" href="veganismoUser.php">Veganismo</a>
                <a id="textmenu2" href="vegetarianismoUser.php">Vegetarianismo</a>
                <a id="textmenu4" href="../IndexUser.php"><?php echo $_SESSION['nome'];?></a>
            </div>
        </div>
        <!------------ Banner !------------>
        <!-- Alteração da Imagem na Url do CSS !-->
        <div class="banner6 noselect container">
            <h4>Mitos</h4>
        </div>
        <!------------ Segundo Menu !------------>
        <div class="topnav noselect">
            <ul class="nav main">
                <li>
                    <a href="dicasUser.php">Dicas</a>
                </li>
                <li>
                    <a href="mitosUser.php">Mitos</a>
                </li>
                <li>
                    <a href="documentarioUser.php">Documentários</a>
                </li>
            </ul>
        </div>
        <!-- Conteudo !-->
        <div class="conteudo">
            <br />
            <a class="Ancora"></a>
            <h1>Mitos</h1>
            <p>
                Com isso, estabelece que a pessoa que pratica o veganismo – vegano ou vegana-, tem motivações muito além de exclusivamente uma dieta alimentar. Portanto, pode-se tratar o veganismo como uma forma de ação social e política, onde seus principais pensamentos estão no contexto ambiental e sustentável.   
            </p>
            <br>
            <h1>"Os alimentos de origem vegetal não possuem boas quantidades de proteína".</h1>
            <p>
                Isto é mentira, pois os micronutrientes que não estão disponíveis em vegetais seria a vitamina B12, que pode ser substituída por suplementação. Os micros nutrientes podem ser encontrados nos vegetais, em quantidade suficiente para viver uma vida saudável.
            </p>
            <br>
            <h1>"Veganos têm deficiência de cálcio?".</h1>
            <p>
                Sabemos que o leite de vaca é uma grande fonte de cálcio de extrema relevância, mas existem outras maneiras de se obtê-lo. Existem os leites de vegetais que possuem um alto teor de cálcio e nutrientes equivalentes ao leite de vaca.
            </p>
            <br>
            <h1>"Veganos perdem peso com facilidade?".</h1>
            <p>
                A dieta vegana é uma boa maneira de perder peso de uma maneira saudável, mas é necessária uma rotina regular de exercícios físicos e acompanhamento de um profissional. A dieta vegana possui um baixo teor de gordura, por conta disso não é garantido a perda de peso com maior facilidade.
            </p>
            <br>
            <h1>"Veganos têm mais dificuldade em ganhar massa muscular?".</h1>
            <p>
                Muitas pessoas acreditam que veganos têm mais dificuldades em ganhar massa muscular, porém, não é verdade. A combinação de cereais (como arroz, milho, aveia e outros) com leguminosas (como feijão, soja etc.) já garante a quantidade de proteína encontrada em carnes e ovos.
            </p>
            <br>
            <h1>"Dieta vegana é mais cara?"</h1>
            <p>
                Atualmente existem muitos produtos disponíveis no mercado em uma variedade de preços e marcas, o que facilita para o adepto a dieta escolher qual é o mais acessível para ele. Além disso, armazenando de forma correta grãos, cereais, legumes e outros, é possível criar uma dieta mais barata e acessível.
            </p>
            
        </div>
        <br />
        <br />
        <br />
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
        </div>
        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
        <script type="text/javascript">
            // Sempre q o usuário scrollar X pixeis acontece... Animação da Navbar
            window.onscroll = function () {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 570 || document.documentElement.scrollTop > 570) {
                    //NavbarGeneral
                    document.getElementById("navbar").style.padding = "10px 10px 10px 15px;"; //Tamanho do background
                    document.getElementById("navbar").style.backgroundColor = "#78ED6F"; //Cor de Fundo do Background
                    //Mudança na Logo
                    document.getElementById("logo").style.fontSize = "25pt";
                    document.getElementById("logo").style.color = "black";
                    document.getElementById("logo").style.borderRight = "5px solid black";
                    document.getElementById("logo").style.borderBottom = "5px solid black";
                    document.getElementById("logo").style.borderTop = "2px solid white";
                    document.getElementById("logo").style.borderLeft = "2px solid white";
                    //Mudança no Texto
                    document.getElementById("textmenu1").style.fontSize = "13pt";
                    document.getElementById("textmenu2").style.fontSize = "13pt";
                    document.getElementById("textmenu3").style.fontSize = "13pt";
                    document.getElementById("textmenu4").style.fontSize = "13pt";
                    document.getElementById("textmenu1").style.color = "black";
                    document.getElementById("textmenu2").style.color = "black";
                    document.getElementById("textmenu3").style.color = "black";
                    document.getElementById("textmenu4").style.color = "black";
                } else {
                    //NavbarGeneral
                    document.getElementById("navbar").style.padding = "10px 15px 10px 15px;"; //Tamanho do Background
                    document.getElementById("navbar").style.backgroundColor = "rgba(0, 0, 0, 0)"; //Cor de Fundo do Background
                    //Mudança na Logo
                    document.getElementById("logo").style.fontSize = "30pt";
                    document.getElementById("logo").style.color = "white";
                    document.getElementById("logo").style.borderRight = "5px solid white";
                    document.getElementById("logo").style.borderBottom = "5px solid white";
                    document.getElementById("logo").style.borderTop = "2px solid rgba(0,0,0,0)";
                    document.getElementById("logo").style.borderLeft = "2px solid rgba(0,0,0,0)";
                    //Mudança no Texto
                    document.getElementById("textmenu1").style.fontSize = "19pt";
                    document.getElementById("textmenu2").style.fontSize = "19pt";
                    document.getElementById("textmenu3").style.fontSize = "19pt";
                    document.getElementById("textmenu4").style.fontSize = "19pt";
                    document.getElementById("textmenu1").style.color = "white";
                    document.getElementById("textmenu2").style.color = "white";
                    document.getElementById("textmenu3").style.color = "white";
                    document.getElementById("textmenu4").style.color = "white";
                }
            }
        </script>
    </body>
</html>
