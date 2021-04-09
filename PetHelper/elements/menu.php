    <h1><a href="index.php">PetHelper</a></h1>
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Menu</span></a>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <?php
                            if(!isset($_SESSION['id'])){
                                echo "<li><a href='php/cadastro.php'>Registre-se</a></li>
                                      <li><a href='php/login.php'>Login</a></li>
                                      <li><a href='php/buscar.php'>Pesquisar</a></li>";
                            }else{
                                 
                               echo "<li><a href='php/perfil.php'>Perfil da Clínica</a></li>
                                     <li><a href='php/buscar.php'>Buscar</a></li>";
                                     
                                if($_SESSION['id'] == 157558){
                                echo "<li><a href='php/adms/pendentes.php'>Pendentes</a></li>";
                                }

                                echo "<li><a href='php/sair.php'>Sair</a></li>";
                            } 
                        ?>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>