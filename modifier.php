<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="sidebar-mini wrapper">
    <?php include("./navbar.php") ?>
    <?php include("./sidebar.php"); ?>


<div class="content-wrapper">
    <div class="container ">
        <div class="card-header">
            <h3>Modifier le Compétence</h3>
        </div>
        <form class="w-100">
            <div class="card-body w-100">
                <div class="form-group">
                    <label for="exampleInputEmail1">Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Code">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Références*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Références">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nom*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripion</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripion"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</div>

</body>

</html>
<?php include("./links.php"); ?>