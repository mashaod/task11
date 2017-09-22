<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title> Task4 </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
    </head>
    <body>
        <form action="index.php" method="POST">
            <div class="panel panel-default">

                <!-- Default panel contents -->
                <div class="panel-heading">
                    MySQL
                    <p><?php echo $msgMy ?></p>
                </div>

                <!-- Table -->
                <table class="table">
                        <tr>
                          <td style="width:20%">User01</td>
                          <td><?php echo $result ?></td>
                        </tr>
                 </table>
            </div>
    
            <div class="btn-group" role="group" aria-label="..." style="margin-bottom: 5%">
                <button type="submit" name="insert" value="insert" class="btn btn-default">Insert</button>
                <button type="submit" name="update" value="update" class="btn btn-default">Update</button>
                <button type="submit" name="delete" value="delete" class="btn btn-default">Delete</button>
            </div> 
                                                                         
        </form>
    </body>
</html>
