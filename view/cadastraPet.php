<?php
    //include '../model/petDao.php';
    require_once '../controller/PetController.php';
    $pet = new PetController();

?>
<!DOCTYPE html>
<html lang="pt-br" ng-app>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <!-- BootStrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            
        <!-- AngularJs -->
        <script src="http://code.angularjs.org/1.0.1/angular-1.0.1.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="#" id="formulario">
                <div class="form-group">
                    <h2 class="col-sm-offset-4">Cadastro de Pet</h2>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dataNascimento" class="col-sm-2 control-label">Data de Nascimento:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="dataNascimento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sexo" class="col-sm-2 control-label">Sexo:</label>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option value="f">Fêmea</option>
                            <option value="m">Macho</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-sm-2 control-label">Foto:</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control" id="foto">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </form>
            
            <!-- Listagem de Pets-->
            <?php
                $listaPets = $pet->listarTodos();
                echo '<br>Número de linhas retornadas: '.mysql_num_rows($listaPets).'<br>';
            ?>
            <div class="table-responsive" ng-controller="">
              <table class="table">
                <thead>
                    <tr>
                        <td class="col-sm-2">Código</td>
                        <td class="col-sm-4">Nome</td>
                        <td class="col-sm-2">Sexo</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while($myPet = mysql_fetch_array($listaPets)){?>
                    <tr>
                        <td><?php echo $myPet['codigo'];?></td>
                        <td><?php echo $myPet['nome'];?> </td>
                        <td><?php echo $myPet['sexo'];?> </td>
                    </tr>
                    <?php }?>
                </tbody>    
              </table>
            </div>
        </div>
    </body>
</html>
