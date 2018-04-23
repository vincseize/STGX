<?php
// Start the session
// session_start();
// require_once('../inc/inc.php');
// require_once('../inc/define.php');
// require_once('../inc/fcts.php');
?>

<!-- 	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>

<script type="text/javascript" src="../js/assets.js"  type="text/javascript"></script>


<link rel="stylesheet" href="../css/bootstrap.min.css">
 <script src="../js/bootstrap.min.js"></script> -->

<!-- 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<style>

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 0;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 5px;
    left: 5px;
    font-size: 60px;
    z-index:9999;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 5px;
    left: 5px;
    z-index:9999;
  }
}
</style>


					NEED HELP ?
					<br><br>




<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>



					<li><span  onclick="openNav()">Menu 1</span></li>
					<li><span><a href="#">	Menu 2 </a></span></li>
					<li><span><a href="#">	Menu 3 </a></span></li>
					<li><span><a href="#">	Menu 4 </a></span></li>

						<p>Drag and Drop element on screen</p>


						<ul>
							<b>Zoom</b> : <li>Molette souris</li>
							<b>Pano</b> : <li>Click+drag sur le fond</li>
							<b>Sélection</b> :
								<li>Box-select -> SHIFT + click + drag</li>
								<li>Multiple -> SHIFT + click sur les nodes</li>
							<b>Menu contextuel</b> :
								<li>Clic-droit sur node -> actions du node</li>
								<li>Clic-droit sur fond -> actions génériques</li>
							<b>Connexions Manuelles</b> :
								<li>Sélectionner des nodes (avec SHIFT+clic ou le box-select), puis
								CRTL+click sur un node pour les connecter à ce dernier.</li>
								<li><b>Directions autorisées :</b></li>
								<li>&nbsp;&nbsp;&nbsp; -> Asset vers Asset(s)</li>
								<li>&nbsp;&nbsp;&nbsp; -> Asset vers Sequence(s)</li>
								<li>&nbsp;&nbsp;&nbsp; -> Sequence vers Sequence(s)</li>
							<b>Mémoire :</b>
								<li>
									Bouton "Charger" : charge un graphe depuis la mémoire
									du navigateur si présente, sinon charge depuis un fichier json sur le serveur.
								</li>
								<li>Bouton "Mémoriser" : mémorise le graphe courant dans la mémoire du navigateur.</li>
								<li>Bouton "Oublier" : Vide la mémoire du navigateur</li>
						</ul>

<script type="text/javascript">



						</script>