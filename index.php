<!DOCTYPE html>
<?php $url = "http://splitr.it/?a=".$_GET['a']."&b=".$_GET['b']."&o=".$_GET['o']."&w=".$_GET['w'];?>
<html dir="ltr" lang="fr-FR">
	<head>
        <meta charset="UTF-8" />
		<meta name='robots' content='index,follow' />
		<meta property="og:type" content="website">
		<meta property="og:title" content="J'utilise splitR.it">
		<meta property="og:site_name" content="splitR.it">
		<meta property="og:description" content="Combinez et partagez simplement deux adresses web en une en les affichant côte à côte dans la même fenêtre de votre navigateur.">
		<meta property="og:url" content="<? echo $url;?>">
		<meta property="og:image" content="http://splitr.it/images/fb.jpg">
		
        <link href="css/reset.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="js/splitter.js"></script>
        <title>splitR.it</title>
        <script type="text/javascript">
	        $().ready(function(){
	        <? if ($_GET['o']=='v'){?>
				$("#wrap").splitter();
			<?}else{?>
				$("#wrap").splitter({type: "h"});
			<?}?>
			});
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-39603618-10', 'splitr.it');
          ga('send', 'pageview');
        
        </script>
    </head>
    <body>
    
    	<?if((!isset($_GET['a']))||(!isset($_GET['b']))){?>
	
	    	<div id="form">
	    	
		    	<h1 id="logo">splitR.it</h1>
		    	<p>Combinez et partagez simplement deux adresses web en une en les affichant côte à côte dans la même fenêtre de votre navigateur.
		    	<form method="get" role="form">
		    		<div class="form-group">
    					<label for="urla">Première page</label>
				    	<input class="form-control" required type="text" name="a" id="urla">
				    </div>
				    <div class="form-group">
				    	<label for="urlb">Deuxième page</label>
				    	<input class="form-control" required type="text" name="b" id="urlb">
				    </div>
				    <div class="form-group">
				    	<label for="orientation">Orientation</label>
				    	<select class="form-control input-sm" name="o" id="orientation">
				    		<option value="v">Vertical</option>	
				    		<option value="h">Horizontal</option>	
				    	</select>
				    </div>
  					<button type="submit" class="btn btn-primary btn-lg btn-block">Créer</button>
				</form>
			
			</div> 	
		
    	<?}else{?>
			<div id="wrap">
				<div id="a">
		    		<iframe src="<?php echo $_GET['a']?>" id="a-frame"></iframe>
				</div>
				
				<div id="b">
		    		<iframe src="<?php echo $_GET['b']?>" id="b-frame"></iframe>
				</div>  
			</div>
			<div class="share">
				<ul>
					<li>
						<button class="facebook" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo rawurlencode($url)	;?>', 'Partager sur Facebook', 'width=600, height=350'); return false;">Facebook</button>
					</li>
					<li>
						<button onclick="window.open('http://twitter.com/share?text=J%27utilise%20splitR%20pour%20afficher%20deux%20pages%20c%C3%B4te%20%C3%A0%20c%C3%B4te%20%21&amp;url=<?php echo rawurlencode($url)	;?>', 'Partager sur Twitter', 'width=600, height=350'); return false;" class="twitter">Twitter</a>
					</li>
					<li class="permalink">
						<?function get_isgd_url($url)  
						{  
							$ch = curl_init();  
							$timeout = 5;  
							curl_setopt($ch,CURLOPT_URL,'http://is.gd/api.php?longurl='.$url);  
							curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
							curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
							$content = curl_exec($ch);  
							curl_close($ch);
							return $content;  
						}
						$new_url = get_isgd_url(rawurlencode($url));?>
						<button class="link">Permalien</button>
						<input class="form-control" value="<? echo $new_url;?>" />
					</li>
					<!--<li>
						<button class="orientation" onclick="$().ready(function(){$('#wrap').splitter({type: 'v',sizeLeft: 150});});">Orientation</button>
					</li>-->
										
				</ul>
			</div>
  		<?}?>
  		
	</body>
</html>