<?php
include 'config.php' ;

 $sql="select * from user_data_2" ;
$result=mysqli_query($conn,$sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datatable</title>
        <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
        <!-- <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css"> -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        #su{
            text-align: center;
            margin-left:906px;
        }
        #mp{
            text-align: center;
            margin-left:1000px;
            margin-top: -66px;
            width:90px;
        }
        #delete{
            margin-left:100px;
            margin-top:-66px;
        }
        #update{
            margin-right: 100px;
        }
        
    </style>
    </head>

    <body class="bg-dark text-dark">
        <table id="example" class="table table-striped table-bordered text-center text-light container  " style="width:100%">
            <thead>
                <tr class="col text-warning">
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th class="col-4">Edit</th>

                </tr>
            </thead>
            <?php 
            while($row=mysqli_fetch_assoc($result)) :
             ?>
            <tbody class="text-center">
                <tr>
                    <td class="text-success">
                        <?php echo $row['Id'] ?>
            </td>
            <td class="text-info">
                <?php echo $row['Name'] ?>
            </td>
            <td class="text-primary">-->
                <?php echo $row['Email'] ?><--
            </td>
            <td class="text-center text-danger">-->
                <?php echo $row['Password'] ?><--
            </td>
            <td><button type="submit" value="<?php echo $row['Id'] ?>" id="update" class="btn btn-primary">Update</button><button type="submit" onClick="shownmsg();" value="<?php echo $row['Id'] ?>" id="delete" class="btn btn-danger">Delete</button></td>
            <?php endwhile ?>

            </tbody>
            <!-- <tfoot class="col-12>
                <tr class="col-12">
                    <th class="col-12"></th>
                <th>Position</th>
                    <th>Office</th>
                    <th>Age</th> -->

                <!-- </tr> -->
            <!-- </tfoot>  --> -->
        </table>
        <button id="su" type="submit" href="new.php" class="btn btn-primary text-center  "><a class="text-light" href="new.php" >Signup</a></button>
        <button id="mp" type="submit" href="new.php" class="btn btn-primary text-center  "><a class="text-light" href="/basic/t.html" >MainPage</a></button>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <script src="sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
       
                    $(document).ready(function() {
                        $(document).on('click', '#delete', function(e) {
                 $id = $(this).val();
                SwalDelete();
                e.preventDefault();
            });
        });

        function SwalDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: "It will be deleted permanently!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'skyblue',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, I absolutely sure dude!',
                cancelButtonText:"'No, I don't want to!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url : 'delete.php',
                   type : "POST",
                   data : {
                       Id : $id
                   },
                            })
                            .done(function(response) {
                                Swal.fire('Deleted!', 'Your data.', 'success')
                                
                            })
                            .fail(function() {
                                Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')
                            });
                            
                    });
                    window.location.reload();  
                },
                
            });
            
        }
            
        </script>
    </body>

    </html>