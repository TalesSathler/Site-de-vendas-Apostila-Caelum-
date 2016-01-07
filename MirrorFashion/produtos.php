      		<?php
                //die(var_dump($_GET['categoria'])); 
                $cabecalho_title = "Produtos";
                include('header.php');
                $recebe = $_GET['categoria'];

                /*CONEXAO*/
                $conexaoBuscar = mysqli_connect('localhost', 'tales', 'nomoresorow', 'mirrorfashion');
                $dados = mysqli_query($conexaoBuscar, "SELECT * FROM produtos WHERE categoria = '$recebe'");
                //$dados = mysqli_query($conexaoBuscar, "SELECT * FROM produtos");
                //SELECT * FROM produtos WHERE id = $_GET[ id] 
                $produto = mysqli_fetch_array($dados);
                //echo '$produto';
                /****************/
            ?>
            <?php
                for($i=0;$i<$produto.length;i++){
                    //arrumar um jeito de sincronizar o nome dos arquivos com o banco de dados
                    echo "
                        <div role='main'>
                            <div class='col-md-4'>
                                <div class='thumbnail'>
                                    <img src='img/produtos/miniatura1.png' alt='1'>
                                    <div class='caption'>
                                        <h4>Fuzz Cardigan por R$ 129,90</h4>
                                        <p><a href='#' class='btn btn-primary' role='button'>Veja mais</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        	<div role="main">  
        		
                <!-- INICIO Thumbnail-->
                <div class="row">
                    <div class=" col-md-4">
                        <div class="thumbnail">
                        <img src="img/produtos/miniatura1.png" alt="1">
                            <div class="caption">
                                <h4>Fuzz Cardigan por R$ 129,90</h4>
                                <p><a href="#" class="btn btn-primary" role="button">Veja mais</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="thumbnail">
                        <img src="img/produtos/miniatura2.png" alt="2">
                            <div class="caption">
                                <h4>Blusa por R$ 59,90</h4>
                                <p><a href="#" class="btn btn-primary" role="button">Veja mais</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="thumbnail">
                        <img src="img/produtos/miniatura3.png" alt="3">
                            <div class="caption">
                                <h4>Conjunto por R$ 129,90</h4>
                                <p><a href="#" class="btn btn-primary" role="button">Veja mais</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="thumbnail">
                        <img src="img/produtos/miniatura4.png" alt="4">
                            <div class="caption">
                                <h4>Jaqueta por R$ 159,90</h4>
                                <p><a href="#" class="btn btn-primary" role="button">Veja mais</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="thumbnail">
                        <img src="img/produtos/miniatura5.png" alt="5">
                            <div class="caption">
                                <h4>Camiseta por R$ 39,90</h4>
                                <p><a href="#" class="btn btn-primary" role="button">Veja mais</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="thumbnail">
                        <img src="img/produtos/miniatura6.png" alt="6">
                            <div class="caption">
                                <h4>Camiseta Sport por R$ 39,90</h4>
                                <p><a href="#" class="btn btn-primary" role="button">Veja mais</a> </p>
                            </div>
                        </div>
                    </div>
                
            
                </div>
                <!-- FIM Thumbnail-->
            </div>
            <!-- FIM main-->
                <?php
                    include('footer.php');
                ?>
        
            
        </div>
    </body>
</html> 