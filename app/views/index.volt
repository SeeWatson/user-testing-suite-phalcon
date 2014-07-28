<?php use Phalcon\Tag; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
    {{ assets.outputCss() }}
    {{ assets.outputJs() }}
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
            {{ link_to("", "Home",'class':'navbar-brand') }}
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">          
              <li>{{ link_to("user", "Sign In") }}</li>
              <li>{{ link_to("user/register", "Register") }}</li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main role="main">
      {{ content() }}
    </main>
    <footer>
    </footer>
	</body>
</html>