<!DOCTYPE html>
<html dir="ltr" lang="fr-FR">
	<head>
        <meta charset="UTF-8" />
		<meta name='robots' content='index,follow' />
		<link rel="canonical" href="http://assembleenationale.eelv.fr/" />
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
        <link href="css/reset.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="css/themes/base/jquery.ui.all.css">
		<link href='http://fonts.googleapis.com/css?family=Chivo|Pacifico' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript" src="js/custom-form-element.js"></script>
        <script type="text/javascript" src="js/splitter.js"></script>
        <title>splitR.it</title>
        <script type="text/javascript">
        
	        $().ready(function(){
//			   $("#wrap").splitter();
//				if(frames['a-frame'].history.length){
//			        $("#a .nav").append('<input type="button" onclick="contenu_precedent()" value="back"/>');
//			    }
//				function contenu_precedent() {
//			        frames['a-frame'].history.back();
//				}
			 });
            
        </script>
    </head>
    <body>
    
    
    	<?if((!isset($_GET['a']))||(!isset($_GET['b']))){?>
	
	    	<div id="form">
	    	
		    	<div id="logo"></div>
		    	
		    	<form method="get">
		    		<h3>Url Panneau A</h3>
				    <input type="text" name="a">
		    		
		    		<h3>Url Panneau B</h3>
				    <input type="text" name="b">
				    
				    <h3>Configuration</h3>
				   <!--<select id="select" name="configuration" onchange="change();">
						<option style="background:url('images/vertical.png') no-repeat; width:30px; height:30px;">Verticale</option>
						<option style="background:url('images/asymetrique.png') no-repeat; width:30px; height:30px;">Asymétrique</option>
						<option style="background:url('images/horizontal.png') no-repeat; width:30px; height:30px;">Horizontale</option>
					</select>-->
					<div class="configuration">
				    	<p class="radio verticale" >
				    		<input type="radio" value="Verticale" name="configuration"/>
				    		<span class="hidden">
				    			Verticale
				    		</span>
				    	</p>
				    	<p class="radio asymetrique" >
							<input type="radio" value="Asymetrique" name="configuration"/>
							<span class="hidden">
								Asymetrique
							</span>
						</p>
						<p class="radio horizontale" >
							<input type="radio" value="Horizontale" name="configuration"/>
							<span class="hidden">
								Horizontale
							</span>
						</p>
					</div>
					
					<input type="submit" value="Générer" />
				</form>
			
			</div> 	
		
    	<?}else{?>
			<div id="wrap" class="<?php echo $_GET['configuration']?>" >
				<div id="a">
					<div class="nav">
						
					</div>
		    		<iframe width="100%" height="100%" src="<?php echo $_GET['a']?>" id="a-frame"></iframe>
				</div>
				
				<div id="b">
					<div class="nav">
						<!--<input type="button" onclick="frames['b-frame'].history.go(-1)" value="back"/>-->
					</div>
		    		<iframe width="100%" height="100%" src="<?php echo $_GET['b']?>" id="b-frame"></iframe>
				</div>    
			</div>	
  		<?}?>
  		
	<div class="clear"></div>
	</body>
</html>