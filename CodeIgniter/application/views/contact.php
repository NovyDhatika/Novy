<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<ul class="nav nav-pills">
      
        <li><a href="<?php echo site_url('Novi');?>">Home</a></li>
      <li><a href="<?php echo site_url('Novi');?>/menu">About</a></li>
      <li class="active">
      <a href="<?php echo site_url('Novi');?>/menu1">Contact</a></li>
    </ul>

    <div class="jumbotron">
      <div class="container">
        <h1>My Contact</h1>
        <nav aria-label="...">

  </ul>

<style type="text/css">
  label.lb{
    display:block;
    line-height:20px;
    margin:0 0 10px 0;
  }
  h1.header{
    font:bold 20px Tahoma,Verdana;
    display:block;
    margin:0 0 20px 0;
    padding:0 0 10px 0;
    border-bottom:#cecece 1px solid;
  }
</style>
<h1 class="header">Detail  </h1>
<form method="post" name="frm" action="">
<label class="lb">Name</label>
<input type="text" name="nama" size="50" />
<br>
<label class="lb">Email</label>
<input type="text" name="email" size="100" />
</form>
<br/>
<br>
<input type="submit" name="submit" value="Send">
<input type="reset" name="reset" value="Cancel">
<br/>
</form>
  <ul class="pager">
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
  </ul>

</nav>
      </div>
    </div>
  </body>
</html>