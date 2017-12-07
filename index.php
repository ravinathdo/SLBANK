<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SLBANK</title>
        <meta name="description" content="Sri Lanka Bank Branch List with codes">
        <meta name="keywords" content="Ravinath Fernando,Manoj Silva,Sri Lanka Bank Branch Code List">
        <meta name="author" content="Ravinath Fernando">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#" class="active">Sri Lanka Bank Branch </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!--                        <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>-->
                        <!--                        <li><a href="#">Projects</a></li>
                                                <li><a href="#">Contact</a></li>-->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">

                    <?php
                    include './DB.php';
//                    $sqlBB = " SELECT DISTINCT BANK_CODE,BANK_NAME FROM bank_branch GROUP BY BRANCH_NAME ORDER BY BANK_NAME ASC ";
//                    $result = getData($sqlBB);
//                    while ($row = mysqli_fetch_assoc($result)) {
//                 
//                    }
                    ?>

<!--                <p><a href="#">Link</a></p>
<p><a href="#">Link</a></p>
<p><a href="#">Link</a></p>-->
                </div>
                <div class="col-sm-8 text-left"> 


                    <div class="row">
                        <div class="col-md-6">
                            <h3>Search By BANK BRANCH code</h3>

                            <form class="form-horizontal" method="post" action="index.php">
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <input type="number" name="bank" class="form-control" id="inputEmail3" placeholder="Bank Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <input type="number" name="branch" class="form-control" id="inputPassword3" placeholder="Branch Code">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="btnBankBranch">Search</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                        <div class="col-md-6">
                            <h3>View By Bank</h3>
                            <form class="form-horizontal" action="index.php" method="post">
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <input type="number" name="bank" class="form-control" id="inputEmail3" placeholder="Bank Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="btnBankOnly"> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            $sql = "";
                            $flag = FALSE;
                            if (isset($_POST['btnBankBranch'])) {
                                $sql = "SELECT * FROM bank_branch WHERE bank_code = '" . $_POST['bank'] . "' AND branch_code = '" . $_POST['branch'] . "' ";
                            }

                            if (isset($_POST['btnBankOnly'])) {
                                $sql = "SELECT * FROM bank_branch WHERE bank_code = '" . $_POST['bank'] . "'  ORDER BY BRANCH_CODE ASC  ";
                            }

                            if ($sql != "") {
                                $resultx = getData($sql);
                                ?>


                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>BANK_CODE</th>
                                            <th>BRANCH_CODE</th>
                                            <th>BANK_NAME</th>
                                            <th>BRANCH_NAME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    if ($resultx != FALSE) {
        while ($row = mysqli_fetch_assoc($resultx)) {
            $flag = TRUE;
            ?>
                                                <tr>
                                                    <td><?= $row['BANK_CODE']; ?></td>
                                                    <td><?= $row['BRANCH_CODE']; ?></td>
                                                    <td><?= $row['BANK_NAME']; ?></td>
                                                    <td><?= $row['BRANCH_NAME']; ?></td>
                                                </tr>
            <?php
        }
    }
    ?>
                                    </tbody>
                                </table>

    <?php
    if (!$flag) {
        echo 'No Data Found';
    }
}
?>
                        </div>
                    </div>


                </div>
                <div class="col-sm-2 sidenav">
                    <div class="well">
                      <!--<p>ADS</p>-->
                    </div>
                    <div class="well">
                      <!--<p>ADS</p>-->
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <p> Copyright © ravinath 2017 - 2018. All Rights Reserved.</p>
        </footer>

    </body>
</html>
