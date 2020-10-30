<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <div class="container ">
    <a class="btn btn-primary" href="add.php" role="button">CREATE<img src="crud-icon/add.png" alt="create"></a>
        <?php
            try{
                require_once("db.php");
                $result = $cnx->query('SELECT * FROM posts'); 
                $rows = $result->fetchAll();
                $title = [];
                $description = [];
                $date = [];
                
                foreach ($rows as $row) {
                    $title[] = $row[1];
                }
                foreach ($rows as $row) {
                    $description[] = $row[2];
                }
                foreach ($rows as $row) {
                    $date[] = $row[3];
                }
                foreach ($rows as $row) {
                    $id[] = $row['Id'];
                }
                $result->closeCursor();
            }catch (Exception $ex) {
                // message en cas d'erreur
                die('Erreur : '.$ex->getMessage());
            }  

            $table = '<div class="container">
            <table class="table border border-secondary">';

            $table .= 
            ' <tr>
                <th scope="col "> Title </th>
                <th scope="col"> Description </th>
                <th scope="col"> Date </th>
                <th scope="col"> Action </th>
            </tr>';

            for($i=0;$i<count($rows);$i++) {
                $table .= 
                '<tr>
                    <th scope="row">'.$title[$i].'</th>
                    <td>'.$description[$i].'</td>
                    <td>'.$date[$i].'</td>
                    <td> <a href=" delete.php?id='.$id[$i].' "><img src="./crud-icon/delete.png"></a> <a href=" edit.php?id='.$id[$i].' "><img src="crud-icon/edit.png"></a> </td>
                </tr>';
            }
            $table.='</table></div>';
    
            echo $table;
        ?>
        <!-- <table class="table border border-secondary">
            <tr>
                <th scope="col"> Title </th>
                <th scope="col"> Description </th>
                <th scope="col"> Date </th>
                <th scope="col"> Action </th>
            </tr>
            <tr>
                <th scope="row">  </th>
                <td>  </td>
                <td>  </td>
                <td> <img src="crud-icon/edit.png" alt="edit"> <img src="crud-icon/delete.png" alt="delete"> </td>
            </tr>
            <tr>
                <th scope="row">  </th>
                <td>  </td>
                <td>  </td>
                <td> <img src="crud-icon/edit.png" alt="edit"> <img src="crud-icon/delete.png" alt="delete"> </td>
            </tr>

        </table> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    
</body>
</html>
  



