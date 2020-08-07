<?php
//checking if User is coming from A request
if($_SERVER['REQUEST_METHOD']=='POST')
{
    // Assigning Variables
    $User=$_POST['UserName'];
    $Mail=$_POST['Email'];
    $Phone=$_POST['Cell'];
    $Msg=$_POST['msg'];
    $formErrors=array();
    if(strlen($User)<3)
    {
        $formErrors[]='UserName Must Be Larger Than<strong> 3</strong> characters';
    }
    if(strlen($Msg)<10)
    {
        $formErrors[]='Message can\'be Less Than <strong> 10</strong>Characters';
    }
    if(empty($formErrors))
    {
      $header='From: '. $Mail.'\r\n';
      mail('yousef777906@gmail.com','Contact_Form',$Msg,$header);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Abdelrhman Contact Form</title>
        <link rel="stylesheet"href="css/bootstrap.min.css"/>
        <link rel="stylesheet"href="css/fontawesome.min.css"/>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="css/default_Theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"/>
        <link rel="stylesheet"href="css/Style.css"/>
    </head>
    <body>   
        <!-- Start Form-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Abdo<span>Inc</span></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.html" target="_blank">About</a></li>
        <li><a href="FAQ.html">FAQ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Programming</a></li>
            <li><a href="#">Web design</a></li>
            <li><a href="#">Web hosting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">SEO</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Networking</a></li>
          </ul>
        </li>
        <li><a href="#">Map</a></li>
        <li class="active"><a href="Main.php">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        <h2 class="text-center">
            Contact Me
        </h2>
        <form 
            class="Contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        
            <div class="form-group">
                <input class="form-control UserName"
                type="text"
                name="UserName" 
                placeholder="Type Your UserName"
                value="<?php if(isset($User))
                {
                    echo $User;
                } ?>"/>
                <i class="fa fa-user fa-fw"></i>
                <span class="ast">*</span>
                <div class="alert alert-danger Custom">
                UserName Must Be Larger Than<strong> 3</strong> characters
            </div>
            </div>
            <div class="form-group">
            <input class="form-control email "type="email"name="Email"
            placeholder="Type Your Email"
            value="<?php if(isset($Mail))
                {
                    echo $Mail;
                } ?>"/>
            <span class="ast">*</span>
            <i class="fa fa-envelope fa-fw"></i>
            <div class="alert alert-danger Custom">
                Mail Musn't be<strong> Empty</strong> Field</div>
            </div>
            <input class="form-control"type="text"name="Cell"
            placeholder="Type Valide Phone Number"
            value="<?php if(isset($Phone))
                {
                    echo $Phone;
                } ?>"/>
            <i class="fa fa-phone fa-fw"></i>
            
            <div class="form-group">
            <textarea class="form-control messages" placeholder="Your-Message" name="msg">
            <?php if(isset($Msg))
                {
                    echo $Msg;
                } ?>
            </textarea>
            <span class="ast">*</span>
            <div class="alert alert-danger Custom">
                Message can\'be Less Than <strong> 10</strong>Characters</div>
            </div>
            <input class="btn btn-success"type="submit"value="Send"/>
            <i class="fa fa-send fa-fw sen"></i>
        </form>
    </div>
    <!-- End Form -->
    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</body>
</html>
