<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body class="sidebar-mini wrapper">
    <?php include("./navbar.php") ?>


    <?php include("./sidebar.php") ?>
<div class="content-wrapper">
    <div class="table">
        <section class="content-header container-fluid row mb-2">
            <h1 class="col-sm-6">Arbre De Competence</h1>
            <div class="col-sm-6">
                <a class="btn btn-success float-right" href="./ajouter.php">
                    <i class="fa-regular fa-plus">
                    </i> Ajouter
                </a>
            </div>
        </section>
        <table class="table table-striped projects">
        <thead>
            <tr>
                <th>
                    Code
                </th>
                <th>
                    Références
                </th>
                <th>
                    Nom
                </th>
                <th>
                    Descripion
                </th>
                <th>
                    Actions
                </th>
                    
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Maquettae
                </td>
                <td>
                    C1
                </td>
                <td>
                    Maquetter une application mobile.
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    base de donnees
                </td>
                <td>
                    C2
                </td>
                <td>
                    Manipuler une base de donnees - perfectionnement.
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    back-end
                </td>
                <td>
                    C3
                </td>
                <td>
                    Developper la gestion dun projet primaryrmation .
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    gestion
                </td>
                <td>
                    C4
                </td>
                <td>
                    Collaborer a la gestion dun projet primaryrmatique.
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    Mobile Native
                </td>
                <td>
                    C5
                </td>
                <td>
                    Developper une application mobile native.
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    Tests
                </td>
                <td>
                    C6
                </td>
                <td>
                    Preparer et exceter les plans da tests dune appl.
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    Deploiement
                </td>
                <td>
                    C7
                </td>
                <td>
                    preparer et executer le deploiement dune applicat.
                </td>
                <td>
                    Descripion
                </td>
                <td>
                    <a class="btn btn-primary btn-sm " href="./Modifier.php">
                        <i class="fas fa-pencil-alt">
                        </i> Modifier
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
            </tr>

        </tbody>
        </table>
    </div>
</div>


</body>
</html>

<?php include("./links.php");?>






