<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
    
    <html>
        <head><meta http-equiv="Content-Language" content="th">
              <meta http-equiv="content-Type" content="text/html; charset=window-874">
              <meta http-equiv="content-Type" content="text/html; charset=tis-620">
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        </head>
            <body>
                <?php echo "controller = ".$controller.",action = ".$action;?>
                <br> 
                    [<a href="?controller=pages&action=home">หน้าแรก</a>]
                    [<a href="?controller=quotation&action=index">ใบเสนอราคา</a>]
                    [<a href="?controller=quotation_detail&action=index">รายละเอียดใบเสนอราคา</a>]
                <br>
                <?php require_once("routes.php");?>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
            </body>
    </html>