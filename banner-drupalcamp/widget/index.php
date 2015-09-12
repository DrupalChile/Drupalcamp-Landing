<?php $base_url = 'http://camp.drupalchile.org'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

            @font-face {
                font-family: 'chunkfiveroman';
                src: url('<?php print $base_url;?>/chunkfive-webfont.eot');
                src: url('<?php print $base_url;?>/chunkfive-webfont.eot?#iefix') format('embedded-opentype'),
                     url('<?php print $base_url;?>/chunkfive-webfont.woff2') format('woff2'),
                     url('<?php print $base_url;?>/chunkfive-webfont.woff') format('woff'),
                     url('<?php print $base_url;?>/chunkfive-webfont.ttf') format('truetype'),
                     url('<?php print $base_url;?>/chunkfive-webfont.svg#chunkfiveroman') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            .logo{
                width: 100%;
                text-align: center;
            }
            .logo img{
                max-width: 100%;
            }
            h1{
                text-align: center;
                font-family: "chunkfiveroman";
                color: #333;
            }
            h1 a {
                text-decoration: none;
                color: #23376B;
            }
            h1 a:visited {
                color: #23376B;
            }
            body{
                overflow: hidden;
            }
        </style>
        <script>
          var onLoadWidget = function() {
            var height = document.body.clientHeight + 30;
            var dataCamp = {drupalCamp: true, height: height};
        	  window.parent.postMessage(dataCamp, '*');
          }
        </script>
    </head>
    <body onload="onLoadWidget();">
        <div class="logo">
            <a target="_blank" href="<?php print $base_url;?>/">
              <img src="<?php print $base_url;?>/logo-camp.png" alt="Logo DrupalCamp Chile 2015" title="Ir al sitio del DrupalCamp Chile 2015." />
            </a>
        </div>

        <?php
        $msjes = array(
          "UX",
          "Programación",
          "Diseño Web",
          "HTML5",
          "JavaScript/jQuery",
          "PHP",
        );

        $msje = $msjes[rand(0, (count($msjes) - 1))];
        ?>
        <h1><a target="_blank" href="<?php print $base_url;?>"><?php print $msje ?></a></h1>
    </body>
</html>