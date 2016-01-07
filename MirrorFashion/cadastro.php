
           		<?php
                    $cabecalho_title = "Cadastro";
                    include('header.php');
                ?>
            
            
            	<div role="main row">  
                        

                    

                    <form data-toggle="validator" role="form" action="checkout.php" method="POST">
                        <div class="form-group">
                            <label for="inputName" class="control-label">Nome</label>
                            <input type="text" class="form-control" id="inputName" name="nome" placeholder="Cina Saffary" required>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="control-label">Password</label>
                            <div class="form-group col-sm-6">
                                <input type="password" data-minlength="6" class="form-control" id="inputPassword" name="senha" placeholder="Password" required>
                                <span class="help-block">Minimum of 6 characters</span>
                            </div>

                            <div class="form-group col-sm-6">
                                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="underwear" required>
                                    Masculino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="underwear" required>
                                    Feminino
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Finalizar</button>
                        </div>
                    </form>




                   
                </div>
                <!-- FIM main-->

                    <?php
                        include('footer.php');
                    ?>
            
                
            </div>
        </body>
</html> 