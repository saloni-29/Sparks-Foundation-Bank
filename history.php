<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    </head>
    
    <body>
        
        <!-- Nav bar -->
        <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>TSF BANK</h2></a>
                <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon" style="background:white;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item py-3">
                            <a href="index.php" class="nav-link text-white"><strong>About</strong></a></li>
                        <li class="nav-item py-3">
                            <a class="nav-link text-white" href="money.php"style="font-weight: bold;"><strong>Money Transfer</strong></a>
                        </li>
                        <li class="nav-item py-3">
                            <a class="nav-link text-white" href="contact.php"style="font-weight: bold;"><strong>Contact Us</strong></a>
                        </li>
                    </ul>
                 </div>
            </div>
        </nav>
        
        
        <!-- options -->
        <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
            <a href="money.php"><button type="button" class="btn btn-warning btn-lg mb-3">Click Here to Transfer Money</button></a>
        </div>
        
        <!-- Table -->
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped">
                <thead style="color : black;" class="table-danger">
                <tr>
                     <th class="text-center">S.No.</th>
                     <th class="text-center">Sender</th>
                     <th class="text-center">Receiver</th>
                     <th class="text-center">Amount</th>
                     <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
            </tbody>
            
            <?php
            
            include 'connect.php';
            
            $sql ="SELECT * FROM transaction";
            
            $query =mysqli_query($conn, $sql);
            
            while($rows = mysqli_fetch_assoc($query))
            {
                ?>
                
                <tr style="color : black;">
                <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
                <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
                <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
                <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
                <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
                <?php
                
            }
            
            ?>
            </tbody>
        </table>
    </div>
</div>

        <!-- footer -->
        <div class="foot">
          <footer class="text-center text-white bg-dark">
                
                <!-- Copyright -->
                <div class="text-center p-3"  style= "background-color: #5E11A3">
                    © 2021 Copyright - Made with 🧡 by Saloni Raorane :
                    <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks Foundation <img src="images/tsf.png" alt="" width="40" height="35"></a>
                </div>
               <!-- Copyright -->
            </footer>
        </div>
        
        
        
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
