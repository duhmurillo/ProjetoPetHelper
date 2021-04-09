<?php
    session_start();
    include_once 'classes/conexao.class.php';
	$conectar = new conexao;
	$conn = $conectar->getConexao();
?>

<!DOCTYPE HTML>
<html>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];
        $arquivo = $root."/ProjetoSiteFacens/PetHelper/";
        include_once($arquivo."elements/head.html");
	?>
	<body class="landing is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header" class="">
            <?php
                include_once($arquivo."elements/menu.php");
            ?>

            <!-- Page Wrapper -->
                <section class="wrapper style5">
                    <center>
                        
                        <input type="text" name="search" id="search" placeholder="Pesquisa" style="max-width: 75%;margin-bottom: 1%;">
                    </center>
                    <!-- <input type="text" name="search" id="search" placeholder="Pesquisa"> -->

                    <div class="flex-container" style="display: flex;">
                        <div class="flex-child content-to-hide" style="flex: 1; margin-left: 0.5%;">
                            <!-- <div style="display: flex; align-items: center;">
                                <i class="fas fa-search" style="display: inline-block;"></i>
                                <input type="text" class="" id="search" name="search" placeholder="" style="display: inline-block; margin-left:">
                            </div>

                            <div class="col-2 col-12-xsmall">
                                
                            </div> -->
                            <div class="">
                                <form id="" method="GET" action="">
                                    <br>
                                    <label>Emergencial:</label>
                                    <input type="checkbox" id="emergencia" name="emergencia">
                                    <label for="emergencia">Atendimento Emergencial</label><br>
                                    <br>
                                    <label>Especialidades:</label>
                                    <input type="checkbox" id="cachorro" name="cachorro" checked="">
                                    <label for="cachorro">Cachorro</label><br>
                                    <input type="checkbox" id="gato" name="gato" checked="">
                                    <label for="gato">Gato</label><br>
                                    <input type="checkbox" id="calopsita" name="calopsita" checked="">
                                    <label for="calopsita">Calopsita</label><br>
                                    <br>
                                    <label>Dias da semana:</label>
                                    <input type="checkbox" id="domingo" name="domingo" checked="">
                                    <label for="domingo">Domingo</label><br>
                                    <input type="checkbox" id="segunda" name="segunda" checked="">
                                    <label for="segunda">Segunda-Feira</label><br>
                                    <input type="checkbox" id="terca" name="terca" checked="">
                                    <label for="terca">Terça-Feira</label><br>
                                    <input type="checkbox" id="quarta" name="quarta" checked="">
                                    <label for="quarta">Quarta-Feira</label><br>
                                    <input type="checkbox" id="quinta" name="quinta" checked="">
                                    <label for="quinta">Quinta-Feira</label><br>
                                    <input type="checkbox" id="sexta" name="sexta" checked="">
                                    <label for="sexta">Sexta-Feira</label><br>
                                    <input type="checkbox" id="sabado" name="sabado" checked="">
                                    <label for="sabado">Sábado</label><br>
                                </form>
                            </div>
                        </div>
                        
                        <div class="flex-child" style="flex: 2;">
                        
                        <div>
                                
                                <span class="image left"><img src="images/medvet.jpg"/></span>
                                <p style="text-align: justify;"><h4>Centro Veterinário MEDVET</h4>
                                    Atendimento de animais domésticos e silvestres.<br>
                                    Rua Professor José Munhoz, 617 - Pte. Grande, Guarulhos - SP<br>
                                    Telefone: (11) 4020-2020<br><br>
                                <div class="content-to-hide">
                                    <center><button class="button primary fit small" onclick="sumir2(), buscar()">Saiba Mais</i></center>
                                </div>
                                <div class="content-to-hideL">
                                    <center><button class="button primary fit small" onclick="sumir2(), buscar()">Saiba Mais</i></center>
                                </div>
                                
                            </div>
                            <hr>
                            <div>
                                <span class="image left"><img src="images/univet.jpg"/></span>
                                <p style="text-align: justify;"><h4>Clínica Veterinária Univet</h4>
                                    Atendimento de animais domésticos e silvestres.<br>
                                    Rua Professor Munhoz, 717 - Indaiatuba - SP<br>
                                    Telefone: (11) 4020-7070<br><br>  
                                <div class="content-to-hide">
                                    <center><button class="button primary fit small" onclick="sumir(), buscar2()">Saiba Mais</i></center>
                                </div>
                                <div class="content-to-hideL">
                                    <center><button class="button primary fit small" onclick="sumir(), buscar2()">Saiba Mais</i></center>
                                </div>
                                
                            </div>  
                        </div>

                        <div class="flex-child content-to-hide" style="flex: 1.5;margin-left: 5%;padding-right: 1%;">
                            <div id="pesquisa" style="display: none;">
                                <i class="far fa-times-circle image right" onclick="sumir()" style="cursor: pointer;"></i>
                                <br>
                                <img src="images/medvet.jpg" class="image left" style="max-width: 50%; height: auto;"/>
                                <p style="text-align: justify;">
                                <p>No centro Veterinário MEDVET você encontrará o melhor atendimento para seu animal de estimação.</p>
                                    Atendimento de Animais Domésticos: Não<br>
                                    Atendimento de Animais Silvestres: Não<br>
                                    Endereço: Rua 0, - Bairro. Sorocaba - SP<br>
                                    Telefone: +55(11)4020-2020<br>
                                    Email: medvet@email.com<br>   
                                </p>
                            </div>
                            <div id="pesquisa2" style="display: none;">
                                <i class="far fa-times-circle image right" onclick="sumir2()" style="cursor: pointer;"></i>
                                <br>
                                <img src="images/univet.jpg" class="image left" style="max-width: 50%; height: auto;"/>
                                <p style="text-align: justify;">
                                <p>A UniVET é um centro veterinário 24 horas, com uma equipe de Veterinários altamente qualificada e colaboradores treinados na parte técnica e de atendimento ao público para melhor serví-los. Equipamentos de alta tecnologia, um Centro de Terapia Intensiva com suporte completo. Tudo o que seu pet precisa num único lugar. </p>
                                    Atendimento de Animais Domésticos: Não<br>
                                    Atendimento de Animais Silvestres: Não<br>
                                    Endereço: Rua Professor Munhoz, 717 - Indaiatuba - SP<br>
                                    Telefone: +55(11)4020-7070<br>
                                    Email: univet@email.com<br>   
                                </p>
                            </div>
                        </div>

                    
                    </div>
                </section>
            </div>

                <!-- Footer -->
                <?php
                    include_once($arquivo."elements/footer.html");
                ?>
			
        

		<!-- Scripts -->
			<?php
				include_once($arquivo."elements/scripts.html");
			?>

	</body>
</html>