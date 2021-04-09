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
                    <br><br><br>
                        <h4>Login</h4>
                        <form method="POST" action="php/logar.php">
                            <div class="row gtr-uniform">
                                <div class="col-12">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <input type="password" name="senha" id="senha" placeholder="Senha" />
                                </div>
                                <div class="col-12">
                                    <input type="checkbox" id="demo-human" name="humano" checked>
                                    <label for="demo-human">Não sou um robô</label>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Entrar" name="submit" class="primary" /></li>
                                        <li><input type="reset" value="Resetar" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
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