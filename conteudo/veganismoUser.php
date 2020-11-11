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
            <a href="../painel.php" id="logo">&nbsp;VeeGan&nbsp;</a>
            <div id="navbar-right">
                <a id="textmenu1" href="veganismoUser.php">Veganismo</a>
                <a id="textmenu2" href="vegetarianismoUser.php">Vegetarianismo</a>
                <a id="textmenu4" href="../IndexUser.php"><?php echo $_SESSION['nome'];?></a>
                <!--[Ajuste]<a class="Usuario" id="textmenu4" href="../User/IndexUser.html">Usuário</a>-->
            </div>
        </div>
        <!------------ Banner !------------>
        <!-- Alteração da Imagem na Url do CSS !-->
        <div class="banner3 noselect container">
            <h4>Veganismo</h4>
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
            <h1>Veganismo</h1>
            <p>
                Com isso, estabelece que a pessoa que pratica o veganismo – vegano ou vegana-, tem motivações muito além de exclusivamente uma dieta alimentar. Portanto, pode-se tratar o veganismo como uma forma de ação social e política, onde seus principais pensamentos estão no contexto ambiental e sustentável.   
            </p>
            <br />
            <p>
                "O veganismo é uma forma de viver que busca excluir, na medida do possível e do praticável, todas as formas de exploração e de crueldade contra animais, seja para a alimentação, para o vestuário ou para qualquer outra finalidade. Dos veganos junk food aos veganos crudívoros – e todos mais entre eles – há uma versão do veganismo para todos os gostos. No entanto, uma coisa que todos nós temos em comum é uma dieta baseada em vegetais, livre de todos os alimentos de origem animal, como: carne, laticínios, ovos e mel, bem como produtos como o couro e qualquer produto testado em animais", definição criada pela <i>The Vegan Society.</i>
            </p>
            <br>
            <h1>Como praticar?</h1>
            <p> 
                A prática do veganismo para muitos pode parecer difícil, porém, a pratica do veganismo é relativamente fácil e simples, mas ao mesmo tempo, desafiadora. 
            </p>
            <br>
            <p>
                Veganos são basicamente vegetarianos, sendo assim, não consumem nenhum tipo de carne, ovos, leite, gelatina ou qualquer outro ingrediente derivado de animais. Parar de consumir derivados de animais é um grande desafio, já que a maior parte dos produtos industrializados possuem ingredientes de origem animal em sua composição. Por isso, muitos veganos procuram por não consumir produtos industrializados.
            </p>
            <p>
                Além da esfera alimentar, sempre que possível, deve evitar utilizar produtos testados em animais. Já que os testes em animais, é uma das mais cruéis formas de exploração animal. Estando presente principalmente nas indústrias farmacêuticas, de higiene e cosméticos. Sendo assim, sempre procure se informar sobre como as empresas testam produtos e se possível, opte por aquelas que não utilizam da exploração animal.
            </p>
            <p>
                Vale ressaltar, que as vacinas e alguns medicamentos são testados e feitos com produtos animais. Assim, os praticantes do veganismo não têm muito pra onde correr. Entretanto, não é considerado uma violação da ética vegana consumir esses remédios e vacinas. <b>O veganismo é vivido na medida do possível e praticável.</b>
            </p>
            <p>
                Veganos devem se atentar com o vestuário. Roupas e sapatos feitos de couro, lã, peles, seda, penas e plumas são produtos oriundos da exploração animal. Também, deve-se atentar com o entretenimento as custas dos animais, como zoológico, aquários, circos ou rodeios. No final, dá para perceber que o veganismo basicamente se opõe a todas formas de exploração animal presentes na sociedade.
            </p>
            <p>
                O veganismo é um movimento cujo objetivo é a proteção animal e do meio ambiente, contra as grandes indústrias alimentícias e entre outras. Para se interessar mais sobre o assunto, procure por filmes e documentários. E aqueles que já estão interessados e procuram dicas para aderir o veganismo, acesse aqui.
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
