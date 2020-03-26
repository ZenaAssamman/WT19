<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Aufgabe 6</title>
    <?php
    require_once "./mockdataarray.php";
    ?>
</head>

<body>
    <div class="container">
        <h1>Teilnehmerinnen</h1>
         <?php
        if (isset($_GET['id'])) :
            //form

            $id = $_GET['id'];
            echo " <form action='./aufgabe6.php' methode='post'>
     <div class='form-group row'>
     <label for='vorname' class='col-2'>vorname</label>
     
      <input type='text' class='form-control col-10' name='vorname' value='" . $members[$id][0] . "'/>
      
     </div>
     <div class='form-group row'>
     <label for='nachname' class='col-2'>nachname</label>
     
      <input type='text' class='form-control col-10' name='nachname' value='" . $members[$id][1] . "'/>
      
     </div>
     <div class='form-group row'>
        <label for='email' class='col-2'>email</label>
     
      <input type='text' class='form-control col-10' name='email' value='" . $members[$id][2] . "'/>
      
     </div>
     <input type='hidden' name='id' value='" . $id . "'/>  
     <button type='submit'>Save changes </buttton>
      </form>
   ";
      
        else :
            if (isset ($_POST['id'])) :
                $id= $_POST['id'];
                $vorname= filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);  
                $nachname= filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
                $email= filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    
                $members[$id][0] =$vorname;  
                $members[$id][1] =$nachname;
                $members[$id][2] =$email;
                endif;
        ?> 
            <table class="table table-striped table-responsive">
                <thead>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>E-Mail</th>
                    <th>Edit</th>
                </thead>

                <?php
                foreach ($members as $id => $member)
                {
                    echo "<tr>";
                    echo "<td>" . $member[0] . "</td>"; 
                    echo "<td>" . $member[1] . "</td>";
                    echo "<td>" . $member[2] . "</td>";
                    echo "<td> <a href='./aufgabe6.php?id=" . $id . "'>edit</a> </td>"; 
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        <?php
        endif;
        ?>
    </div>
</body>

</html>