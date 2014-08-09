<!DOCTYPE html>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <link rel='stylesheet' href='./notifier.css' type='text/css' />
        <!-- Include the php file, or put the method directly into your head.-->
        <?php include('sns.php');?>
        
    </head>
    <body>
		<!-- Call a popup like this, you can do this call on every page!-->
		<?php  popUp("notifier botright whitred edged", "Testtext");?>
		<h1>Content!</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id bibendum nisl. Integer pulvinar risus velit, at sollicitudin risus tempus id. Morbi rutrum et massa sed lobortis. Praesent ullamcorper laoreet suscipit. Donec rutrum ante sed hendrerit accumsan. Fusce blandit nunc vel diam hendrerit vehicula. Sed aliquet egestas elit at ullamcorper.
		</p>
		<p>
			Sed id felis malesuada, interdum leo vitae, consectetur turpis. Curabitur semper consectetur leo, non viverra nunc vestibulum nec. Aliquam non auctor turpis. Duis elementum libero lorem, eu pretium erat rutrum non. Duis libero urna, aliquam a tristique id, elementum in tortor. Nulla a consectetur ante. Donec convallis condimentum quam interdum tempus
		</p>
		<p>
			Pellentesque accumsan augue et lectus ullamcorper, non porttitor tortor commodo. Donec tortor nulla, fermentum quis sodales at, suscipit in enim. Aliquam erat volutpat. Nulla vitae tellus in sapien commodo tempor. Etiam dapibus fermentum nisl euismod tempor.
		</p>
		<p>
			Vivamus vel dapibus libero, ut sodales sem. Ut dignissim, nisl ut tristique blandit, est diam feugiat ante, sed scelerisque neque nulla eu odio. Nullam eu elit hendrerit, condimentum nisl sit amet, rhoncus lacus. Ut vitae sem id velit ullamcorper aliquam vitae at lorem. Duis sed ante accumsan sem elementum auctor. Donec feugiat pulvinar tellus vitae interdum. Vestibulum non felis at metus pharetra fringilla. Donec sit amet enim nibh. Nunc diam ligula, fermentum non viverra ac, eleifend ut felis.
		</p>
		<p>
			Sed accumsan porttitor ante a placerat. Donec velit nulla, luctus vitae orci et, luctus pellentesque neque. Nulla nec auctor dui. Donec quam justo, auctor in semper nec, consequat eget urna. Integer sodales, lacus a scelerisque commodo, eros metus vehicula ligula, a elementum ante massa id sapien. Aenean eu neque eros. Aenean malesuada vestibulum adipiscing. Ut posuere tortor quis euismod adipiscing.
		</p>
		
		<!--
			This line has to be added at the bottom of your site, 
			you should be using a footer include already so just put
			this into there.
		-->
		<script>$('#notifier').slideDown('slow').delay(5000).slideUp('slow');</script>
	</body>
</html>
