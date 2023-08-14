<html>
    <head>
    </head>

<body>
    <?php
        include("functionOpts.php");
    ?>
    <center>
        <h2>
            <?php
            if(isset($_GET['op']) && $_GET['op'] == '1')
                echo "Addition";
            else if(isset($_GET['op']) && $_GET['op'] == '2')
                echo "Subtraction";
              else {
                echo "Addition";
              }
            ?>
             of two numbers</h2>
        <br/>
        <form action="" method="post">
        <table>
            <tr>
                <td>Enter no1:</td>
                <td><input type="text" name="txtno1" value="<?php if(isset($_POST['txtno1'])) echo $_POST['txtno1'];?>" required /></td>
            </tr>
            <tr>
                <td>Enter no2:</td>
                <td><input type="text" name="txtno2" value="<?php if(isset($_POST['txtno2'])) echo $_POST['txtno2'];?>" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnsubmit" value="Submit"/></td>
            </tr>
            <tr>
                <td>Result is</td>
                <td><input type="text" name="txtresult" value="<?php if(isset($_POST['btnsubmit'])){
               if(isset($_GET['op']) && $_GET['op'] == '1')
               echo sum();
        else if(isset($_GET['op']) && $_GET['op'] == '2')
              echo subtract();
        else
            echo sum();
        }?>" /></td>
            </tr>
        </table>
</form>
        <a href="index.php?op=1">Addition</a> | <a href="index.php?op=2">Subtraction</a>
    </center>
</body>
</html>