		<style type="text/css">
			h1
				{
					text-align: center;
				}
			/* a
 	{
 		font-size: 30px;
 	}*/

 nav{
 	display: flex;

 	justify-content: flex-end;
 	text-align: center;
 	background-color: #00000010;
 }

 ul{
 	background-color: #ff8000;
 	list-style: none;
 	display: flex;
 	flex-direction: row;
 	
 }

 li a {
 	position: relative;
 	display: block;
 	padding: 16px;
 	text-decoration: none;
 	font-size: 18px;
 	font-weight: bold;
 	color: #ffffff;
 }

 li a:hover {
 	text-decoration: none;
 	color: #ffffff;
 	background-color: #183b75;

 }

 li ul {
 	display: none;
 }
 li:hover ul {
 	position: absolute;
 	display: block;
 	padding-left: 0; 
 	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
 }
		</style>
		<header>
			<h1>Le Catalogue des 10 Objets les plus bizarres et inutiles</h1>
		</header>
		<nav>
			<ul>
				<li><a href="test.php">Acceuil</a></li>
				<li><a href="">Catalogue</a>
					<ul>
						<li><a href="html/creation.php">Création</a></li>
						<li><a href="html/supression.php"> Suppresion</a></li>
						<li><a href=""> Modification</a></li>
					</ul>
				</li>
				<li><a href="">Catégorie</a>
					<ul>
					<li><a href=""> Ennemis</a></li>
					<li><a href="">Amis</a></li>
					<li><a href="">En équipe</a></li>
				</u>
				</li>
			</ul>
		</nav>