<?php
template::set('title','404 Not Found');
template::set('page','404');
include('core/tmpl/home/header.php');
?>
    <div class="container">
    <br>
        <div class="jumbotron">
          <h1>404 - Not Found</h1>
          <p>We've looked all around and couldn't find you that page <b>:(</b>!</p>
          <p><a class="btn btn-primary btn-lg" role="button" href="./home">Click your Heels &raquo;</a></p>
        </div>
<?php
include('core/tmpl/home/footer.php');
?>