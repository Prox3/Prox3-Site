<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="description" content="Desenvolva seus projetos online com a Prox3 de forma rápida, criativa e de qualidade." />
    <link rel="SHORTCUT ICON" href="http://www.prox3.com.br/V2/images/favicon.png">
    <meta name="keywords" content="Prox3, produtora, produtora digital,sites, sistemas web, desenvolvimento web">
    <meta name="organization name" content="Prox3" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="language" content="portuguese" />
    <meta name="location" content="Brazil" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="expires" content="-1" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta http-equiv="imagetoolbar" content="no" />
    <title>Prox3 - Home</title>
    <link href="css/css.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/ie.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link rel="stylesheet" type="text/css" href="css/jquery.qtip.css"/>
    
    <script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script>
    <script type="text/javascript" src="js/jquery.ScrollTo-min.js" ></script>
    
    <script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/jquery.qtip.js"></script>
	
    <script type="text/javascript" src="js/commons/common.js"></script>
    <!-- noty -->
    <script type="text/javascript" src="js/noty/jquery.noty.js"></script>
    
    <!-- layouts -->
    <script type="text/javascript" src="js/noty/layouts/bottom.js"></script>
    <script type="text/javascript" src="js/noty/layouts/bottomCenter.js"></script>
    <script type="text/javascript" src="js/noty/layouts/bottomLeft.js"></script>
    <script type="text/javascript" src="js/noty/layouts/bottomRight.js"></script>
    <script type="text/javascript" src="js/noty/layouts/center.js"></script>
    <script type="text/javascript" src="js/noty/layouts/centerLeft.js"></script>
    <script type="text/javascript" src="js/noty/layouts/centerRight.js"></script>
    <script type="text/javascript" src="js/noty/layouts/inline.js"></script>
    <script type="text/javascript" src="js/noty/layouts/top.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
    
    <!-- themes -->
    <script type="text/javascript" src="js/noty/themes/default.js"></script>
    
    <script src="js/index.js" type="text/javascript"></script>
</head>
<body>
	<!-- Header -->
    <!-- Fim header -->
    <div id="tudo">
    	<!-- Como Pensamos -->
    	<!-- Fim Como Pensamos -->
        
        <!-- Serviços -->
    	<!-- Fim Serviços -->
        
        <!-- Clientes -->
        <?php require("clientes.php")?>
        <!-- Fim Clientes -->
        
        <!-- Contatos -->
        <?php require("contato.php")?>
        <!-- Fim Contatos -->
    </div>
    <!-- Footer -->
    <?php require("footer.php")?>
    <!-- Fim Footer --> 
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-38821032-1']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>
</html>
