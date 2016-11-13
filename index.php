<?php include 'header.php' ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ben Ratliff</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
        </ul> -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <ul class="frames">
        <li class="frame tree"></li>
        <li class="frame ferns"></li>
        <li class="frame ruins"></li>
        <li class="frame flower"></li>
        <li class="frame misfits">
            <video width="180" height="190" class="ocean" loop>
              <source src="vid/sea.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <img src="img/tv.png" class="tv"/>
        </li>
        <li class="frame opus"></li>

    </ul>
        <div class="prev-x">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </div>
        <div class="button prev">
            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
        </div>
        <div class="button next">
            <span class="glyphicon glyphicon-plus" aria-hidden="true">
        </div>
        <div class="next-x">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </div>

    </div>



<?php include 'footer.php' ?>
