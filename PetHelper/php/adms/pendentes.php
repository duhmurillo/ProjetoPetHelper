<?php
    session_start();
    include_once '../classes/conexao.class.php';
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
                
                <section id="two" class="wrapper alt style5" style="margin-left: 1%;">
                    <p><h3>Solicitações a serem aceitas:</h3></p>
                    <div class="table-wrapper">
                        <table class="alt1">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>CNPJ</th>
                                    <th>Descrição</th>
                                    <th>Animais D.</th>
                                    <th>Animais S.</th>
                                </tr>
                            </thead>
                            
                            <?php 
                                $contagem = "Select Count(pen_id) from pendentes";
                                $contador = mysqli_query($conn, $contagem);
                                $resultados_contador = mysqli_fetch_assoc($contador);
                                $i = 1;
                                $n = 1;
                                while($i <= $resultados_contador['Count(pen_id)']){
                                    $select_pendentes = "Select * from pendentes where pen_id = $n";
                                    $pendentes = mysqli_query($conn, $select_pendentes); // or die(mysqli_error($conn))
                                    $resultado_pendentes = mysqli_fetch_assoc($pendentes);
                                    if(isset($resultado_pendentes['pen_id'])){
                                        $i++;
                                        //pen_nome	pen_email	pen_telefone	pen_CNPJ	pen_descricao	pen_animais_domesticos	pen_animais_silvestres
                                        if($resultado_pendentes['pen_animais_domesticos'] == 1){
                                            $animaisD = "Sim";
                                        }else{
                                            $animaisD = "Não";
                                        }

                                        if($resultado_pendentes['pen_animais_silvestres'] == 1){
                                            $animaisS = "Sim";
                                        }else{
                                            $animaisS = "Não";
                                        }
                                        
                                        echo  "<tr>
                                                <th>".$resultado_pendentes['pen_nome']."</th>
                                                <th>".$resultado_pendentes['pen_email']."</th>
                                                <th>".$resultado_pendentes['pen_telefone']."</th>
                                                <th>".$resultado_pendentes['pen_CNPJ']."</th>
                                                <th>".$resultado_pendentes['pen_descricao']."</th>
                                                <th>".$animaisD."</th>
                                                <th>".$animaisS."</th>
                                                <form method='POST' action='php/adms/transferir.php'>
                                                    <input type='hidden' name='pen_id' value='".$resultado_pendentes['pen_id']."'>
                                                    <th><button class='button' name='submit' onclick='submit()'>Aceitar</button></th>
                                                </form>
                                               </tr>";
                                    }else{
                                    }
                                    $n++;
                                }
                                mysqli_close($conn);
                            ?>
                        </table>
                    </div>
                </section>
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