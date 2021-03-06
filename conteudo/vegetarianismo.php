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
                <a id="textmenu1" href="veganismo.php">Veganismo</a>
                <a id="textmenu2" href="vegetarianismo.php">Vegetarianismo</a>
                <a id="textmenu3" href="../login.php">Login</a>
                <!--[Ajuste]<a class="Usuario" id="textmenu4" href="../User/IndexUser.html">Usuário</a>-->
            </div>
        </div>
        <!------------ Banner !------------>
        <!-- Alteração da Imagem na Url do CSS !-->
        <div class="bannerxd noselect container">
            <h4>Vegetarianismo</h4>
        </div>
        <!------------ Segundo Menu !------------>
        <div class="topnav noselect">
            <ul class="nav main">
                <li>
                    <a href="dicas.php">Dicas</a>
                </li>
                <li>
                    <a href="mitos.php">Mitos</a>
                </li>
                <li>
                    <a href="documentario.php">Documentários</a>
                </li>
            </ul>
        </div>
        <!-- Conteudo !-->
        <div class="conteudo">
            <br />
            <a class="Ancora"></a>
            <h1>Vegetarianismo</h1>
            <p>
                O vegetarianismo é o hábito alimentar que visa a restrição de carnes em geral, motivada pela filosofia que é o veganismo. Os vegetarianos de acordo são, de acordo com a Sociedade Vegetaria Brasileira (SVB), divididos em 4 categorias: ovolactovegetarianismo (não consome nenhum tipo de carne, mas consomem derivados de leite e ovos), lactovegetarianismo (não consome carne, apenas derivados de leite), ovovegetarianismo (não consome carne, apenas ovos), vegetarianismo estrito (não consome carne e derivados em geral).
            </p>
            <br />
            <p>
                
                Para o cultivo de gado e os derivados de leite, é necessário o desgaste ambiental de diversas vertentes, desde a preparação da terra, onde é realizada uma queimada (como as queimadas realizadas na região amazônica em 2019) até a produção dos derivados de leite onde estimam-se cerca de 5000 litros de água a cada 1kg de queijo ou manteiga. Problemas estes que seriam contornados com a orientação alimentar vegetariana.

            </p>
            <br>
            <p>
                Vale destacar também que, para contradizer o senso comum de que uma dieta exclusa de carnes é prejudicial à saúde, o médico e ex-diretor do Departamento de Medicina e Nutrição da Sociedade Vegetariana Eric Slywitch, estudou e investigou tal afirmação concluindo que, as pessoas que adotaram o movimento não sofreram falta de nutrientes e podem, portanto, promover o crescimento e desenvolvimento à qualquer a pessoa e independentemente da idade. E, de acordo com o pesquisador George Guimarães, à medida que as pessoas se alimentam cada vez mais de carnes, ovos, laticínios, produtos processados, óleos e gorduras isoladas, tem uma maior tendência de desenvolver doenças cardiovasculares e câncer, entrando em contraste completamente ao que dizem vulgarmente.
            </p>
        </div>
        <br />
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
