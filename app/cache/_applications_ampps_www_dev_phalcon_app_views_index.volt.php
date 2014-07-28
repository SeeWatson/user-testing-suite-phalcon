<?php use Phalcon\Tag; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
    <?php echo $this->assets->outputCss(); ?>
    <?php echo $this->assets->outputJs(); ?>
	</head>
	<body>
    <header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php echo $this->tag->linkTo(array('', 'Home', 'class' => 'navbar-brand')); ?>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">          
              <li><?php echo $this->tag->linkTo(array('user', 'Sign In')); ?></li>
              <li><?php echo $this->tag->linkTo(array('user/register', 'Register')); ?></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main role="main">
      <?php echo $this->getContent(); ?>
    </main>
    <footer>
    </footer>
	</body>
</html>