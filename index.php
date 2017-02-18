<?php
// include configuration file
include 'config/core.php';
 
// include the head template
include_once "layout_head.php";?>
 
                   <div class="container-fluid">        <form action="php/authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">  
                                  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
                                  <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
                                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                             </form>
                        </div> 
<?php

// page footer
include_once "layout_foot.php";
?>