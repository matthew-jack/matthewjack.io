<!-- Thanks to bookstrap, jQuery, typed.js, tweetie.js and jQueryTerminal for the great frameworks -->
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAAAVlpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KTMInWQAAAtVJREFUKBVtkl9MUlEcxw/nwgUvCIpcE5UBLSdGupBlTluTNJQ1NS3ffHGurTnfW9M1eWk9teqxHnyjJg9tPtjmYvOlkabBLPJesbn5H5PhvF5QuHA6hzTd6rddfufw+31+5/c9v0OBM5OdLQHY2dlRFxcbbrW1dR0EAh+S52IQrxHZnwLEo4mJCVoURZhIJJhPweDIbmzXQ8mpSVounx4YGOCUSqXU29u7e8IhGUJIhg2Njo5aIYQWjlu2GivLRS6yNLT4bZHSFhZmGIap1el0nLHcuPRrb+/Lx+np17gAhATEC9DU1JRZCIUfp9PHzZes1rmODnf39tbmDZ7nXDqd1oa7ic7NzvVvbWw+b26+2YWRnMzp7GTc7itt27GYY2Ntvd9kquweHx//QQpiI/qIpCzZOJ3O9zwfvcuybGh19Wc9ZNmMPRj8/GJlOfqQZQ1eAvb19VFEDs7PERBDCgKbzeZXWBrY30843B6PB1IKhYfjeKtwKGz7fL63JAlfXO5UDtnPz89LxNtsNq6ionwtlUqDrCRdg4l4wnJ8nAZJMUl7vV6KJGGQuH8MaTRSAVOQlqQMEAWxDB4dHcnJ2BQ0rcc3yhBibGzsv3QhlpHL5mSShE/OSgAWFWl5ScoCOUXpFsLhHgL7/X5c8O8bAC6XK9/Rd563x+Nxs1qtARQFv2L9cFKlosHBgYBwgQsEjkQiaezICGW4CzgzM5PXvMLzT9bX1+QajRrp9fpZkgvstbXPiopLkNV6cen27fZH7e13XATKB09+enruvayoNCGDoRRVVVX5z8fAVYfjDX7LSKFQ4qolqLq65h1JwCOjh4aHRxquN6ZsNZfTOC/a2tqa7xBX/3NCOBR6YDSWPVWr1UAQDkEqlTSRWU9NTelFQaBKWYPfYjH7KJWqMxAIxMhbyJ9+vsW6urpG/N3HQQ0JYliL4/WDg4MNdrudJv+1tLSQCwW/AXTtIYV9o8ANAAAAAElFTkSuQmCC">
  <title>tmux | matthewjack.io</title>
  <noscript>
    I need JavaScript enabled to work correctly! Here are the <a href="http://www.enable-javascript.com/" target="_blank">
    instructions how to enable JavaScript in your web browser</a>.
  </noscript>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="/css/jquery.terminal.min.css" rel="stylesheet"/>
  <link href='/css/index.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md left">

        <!-- start ssh banner -->
        <span>
          <pre>
            =========================================

                __       __             _____
               |  \     /  \           |     \
               | $$\   /  $$            \$$$$$
               | $$$\ /  $$$              | $$
               | $$$$\  $$$$         __   | $$
               | $$\$$ $$ $$        |  \  | $$
               | $$ \$$$| $$        | $$__| $$
               | $$  \$ | $$         \$$    $$
                \$$      \$$ atthew   \$$$$$$ ack

            =========================================


            -----------------------------------------
              Microbiology / Anthropology '18 UIowa
            -----------------------------------------
              Poli+Sci journalist / <a href="http://daily-iowan.com/?s=matthew+jack"><b>The Daily Iowan</b></a>
            -----------------------------------------
             Dev / <a href="https://wivr.uiowa.edu/"><b>Wynn Institute for Vision Research</b></a>
            -----------------------------------------
                        <em>PGP Fingerprint</em>
                    2B5E F866 8B0B 7E87 F962
                    5364 C851 2C83 A9C7 1979
                     <em>matthew-jack@uiowa.edu</em>
            -----------------------------------------
              type 'help' to see available commands
                     or use the links below
            -----------------------------------------
          </pre>
        </span>
        <!-- end ssh banner -->

        <!-- start terminal -->
        <span><?php echo $_SERVER['REMOTE_ADDR']."@matthewjack:~$"; ?></span>
        <span class="leftConsole"><!-- typed.js .leftConsole --></span>
        <span id="ls" style="display:none"><br>
          total 22<br>
          drwxr-xr-x   &nbsp;   6 matt  jack   323 &nbsp;<?php date_default_timezone_set('UTC'); echo date('M d H:i'); ?> .<br>
          drwxr-xr-x   &nbsp;   8 matt  jack   162 &nbsp;<?php date_default_timezone_set('UTC'); echo date('M d H:i'); ?> ..<br>
          lrw-r--r--  &nbsp;    3 matt  jack  1024 <?php date_default_timezone_set('UTC'); echo date('M d H:i'); ?> <a href="https://github.com/matthew-jack">.git -> github/matthew-jack</a><br>
          -rw-r--r--    &nbsp;  1 matt  jack   18 &nbsp;&nbsp;<?php date_default_timezone_set('UTC'); echo date('M d H:i'); ?> <a href="/assets/MatthewJackPGP.asc">.pgp_key</a><br>
          lrwxrwxrwx   &nbsp;   1 matt  jack   26 &nbsp;&nbsp;<?php date_default_timezone_set('UTC'); echo date('M d H:i'); ?> <a href="mailto:matt@matthewjack.io">contact.me -> matt@matthewjack.io</a><br>
          lrw-r--r--   &nbsp;  2 matt  jack   623 &nbsp;<?php date_default_timezone_set('UTC'); echo date('M d H:i'); ?> <a href="https://www.linkedin.com/in/matthew-jack-3801bbb2">résumé -> linkedin/matthew-jack-3801bbb2</a>
        </span>
        <div class="placeholder"><!-- jQuery.terminal --></div>
        <!-- end terminal -->

      </div> <!-- /col-md left -->

    <!-- start twitter feed -->
    <div class="col-md right">
      <span><?php echo $_SERVER['REMOTE_ADDR']."@matthewjack:~$"; ?></span>
      <span class="rightConsole"><!-- typed.js .rightConsole --></span>
      <span class="tweets"><!-- tweetie.js --></span>
    </div>
    <!-- end twitter feed -->

    <!-- start tmux footer -->
    <footer>
      <span>[0] 0:bash*</span>
      <span style="float:right;">"matthewjack.io" <?php date_default_timezone_set('UTC'); echo date('H:i e d-M-y'); ?>&nbsp;</span>
    </footer>
    <!-- end tmux footer -->

    </div> <!-- /row -->
  </div> <!-- /container-fluid-->
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.terminal/0.10.12/js/jquery.terminal.min.js"></script>
<script type="text/javascript" src="js/tweetie.min.js"></script>
<script type="text/javascript" src="js/typed.min.js"></script>
<script type="text/javascript" src="js/console.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('body').css('height',$(window).height());
});
</script>
</html>
