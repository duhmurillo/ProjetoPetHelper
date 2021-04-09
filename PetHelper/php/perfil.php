<?php
    session_start();
    if($_SESSION['animaisS'] == 0){
        $_SESSION['animaisS'] = "Não";
    }else{
        $_SESSION['animaisS'] = "Sim";
    }
    if($_SESSION['animaisD'] == 0){
        $_SESSION['animaisD'] = "Não";
    }else{
        $_SESSION['animaisD'] = "Sim";
    }
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
                    <div class="inner">
                    <section id="two" class="wrapper alt style2">
						<section class="spotlight" style="background-color: #ffffff; align-items: start;">
							<div class="image"><img src="images/vet.jpg"/></div><div class="content">
                            <i class="fas fa-pen image right" style="cursor: pointer;"></i>
                            <?php   echo   "<h2>Nome: ". $_SESSION['nome']. "</h2>
                                    <p>Email: ".$_SESSION['email']."</p>
                                    <p>Telefone: ".$_SESSION['telefone']."</p>
                                    <p>CNPJ: ".$_SESSION['CNPJ']."</p>
                                    <p>Animais Domésticos: ".$_SESSION['animaisD']."</p>
                                    <p>Animais Silvestres: ".$_SESSION['animaisS']."</p>
                                    <p>Endereço: ".$_SESSION['endereco']."</p>
                                    <p>Latitude: ".$_SESSION['latitude']."</p>
                                    <p>Longitude: ".$_SESSION['longitude']."</p>
                                    <p>Descrição: ".$_SESSION['descricao']."</p>";
                            ?>
							</div>
                        </section>
                    </section>
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