    <?php 
    session_start();
    ?>
        <!DOCTYPE html>
        <html lang="en" class="en bg-dark text-light ">

        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Login</title>
        </head>

        <body class="en bg-dark text-light ">
            <h3 class="text-light text-center">Sign Up Here!</h3>


        <!-- ERROR! -->
             <?php
                           if(isset($_SESSION['error']))
                            {
                                ?>
                             <h2 class="text-warning text-center font-weight-bold"><?php
                                echo $_SESSION['error']; 
                                session_destroy();
                                ?></h2>
                                <?php
                            }

    //  <!-- uppercase! -->

                        if(isset($_SESSION['u']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['u']; 
                            session_destroy();
                            ?></h6>
                            <?php
                        }

    // <!-- lowercase! -->

                        if(isset($_SESSION['l']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['l'];
                            session_destroy(); ?></h6>
                            <?php
                        }

    // <!-- number! -->

                       if(isset($_SESSION['n']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['n']; 
                            session_destroy();?></h6>
                            <?php
                        }

    // <!-- specialchars! -->

                        if(isset($_SESSION['s']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['s']; 
                            session_destroy();?></h6>
                            <?php
                        }

    // <!-- pass! -->

                        if(isset($_SESSION['p']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['p'];
                            session_destroy(); ?></h6>
                            <?php
                        }

    // <!--  uppercase & lowercase! -->
                    if(isset($_SESSION['ul']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ul'];
                            session_destroy(); ?></h6>
                            <?php
                        }

    // <!-- uppercase & number! -->

                        if(isset($_SESSION['un']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['un'];
                            session_destroy(); ?></h6>
                            <?php
                        }

    // <!-- uppercase & specialchars! -->

                        if(isset($_SESSION['us']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['us'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!--  uppercase & pass! -->
     <?php
                        if(isset($_SESSION['up']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['up'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- lowercase & number! -->
     <?php
                        if(isset($_SESSION['ln']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ln'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- lowercase & specialchars! -->
     <?php
                        if(isset($_SESSION['ls']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ls'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- lowercase & pass! -->
     <?php
                        if(isset($_SESSION['lp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['lp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- number & specialchars! -->
     <?php
                        if(isset($_SESSION['ns']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ns'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- number & pass! -->
     <?php
                        if(isset($_SESSION['np']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['np'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- specialchars & pass! -->
     <?php
                        if(isset($_SESSION['sp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['sp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & lowercase & number! -->
     <?php
                        if(isset($_SESSION['uln']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['uln'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- upppercase & lowercase & specialchars! -->
     <?php
                        if(isset($_SESSION['uls']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['uls'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercae & lowercase & pass! -->
     <?php
                        if(isset($_SESSION['ulp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ulp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & number & specialchars! -->
     <?php
                        if(isset($_SESSION['uns']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['uns'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & number & pass! -->
     <?php
                        if(isset($_SESSION['unp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['unp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & specialchars & pass! -->
     <?php
                        if(isset($_SESSION['usp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['usp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!--  lowercase & number & specialchars! -->
     <?php
                        if(isset($_SESSION['lns']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['lns'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!--  lowercase & number & pass! -->
     <?php
                        if(isset($_SESSION['lnp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['lnp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!--  lowercase & specialchars & pass! -->
    <?php
                        if(isset($_SESSION['lsp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['lsp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- number & specialchars & pass! -->
     <?php
                        if(isset($_SESSION['nsp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['nsp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!--  uppercase & lowercase & number & specialchars! -->
     <?php
                        if(isset($_SESSION['ulns']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ulns'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & lowercase & number & pass! -->
     <?php
                        if(isset($_SESSION['ulnp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ulnp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & lowercase & specialchars & pass! -->
    <?php
                        if(isset($_SESSION['ulsp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['ulsp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- uppercase & number & specialchars & pass! -->
     <?php
                        if(isset($_SESSION['unsp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['unsp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>
    <!-- lowercase & number & specialchars & pass! -->
     <?php
                        if(isset($_SESSION['lnsp']))
                        {
                            ?>
                            <h6 class="text-warning text-center font-weight-bold"><?php echo $_SESSION['lnsp'];
                            session_destroy(); ?></h6>
                            <?php
                        }
    ?>


            <form class="container w-50" id="frm" action="main.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                    <small id="nameHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>

                <button type="submit" class="btn btn-secondary">Add</button>
            </form>

            <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
            <script src="/__/firebase/8.1.1/firebase-analytics.js"></script>

            <!-- Initialize Firebase -->
            <script src="/__/firebase/init.js">
                console.log('Hello');
            </script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script type='text/javascript'>
                // $(document).ready(function() {
                //     $('#example').load(datatable.php);
                // });
            </script>

        </body>

        </html>