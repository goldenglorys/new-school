<?php
include 'connect.php';
?>

<style type="text/css">
	

header {
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(images/107.jpg);
  background-size: cover;
  background-position: top;
  background-attachment: fixed;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  overflow: hidden;
  background-repeat: no-repeat;
  height: 100vh;
  margin-top: -4em;
  }

.caption{
  width: 100%;
  max-width: 100;
  position: absolute;
  top: 30%;
  z-index: 1;
  text-transform: uppercase;
  justify-content: center;
 } 

.caption h1{
  /*box-shadow: 4px 6px 8px 4px rgba(0, 0, 0, 0.5);*/
  padding: 0.5em;
  font-size: 3.5em;
  font-weight: bolder;
  letter-spacing: .2.8rem;
  margin: auto;
  text-shadow: .1rem .1rem .5rem white;
  font-family: candara;
  margin-top: 9px;
  text-align: center;
}

.caption h1 strong{
animation: animates 2.5s linear infinite;
color: white
}

.caption  h1 strong:nth-child(1){
animation-delay: 0s;
}

.caption h1 strong:nth-child(2){
animation-delay: 0.25s;
}

@keyframes animates{
0%, 100%{
padding: 0.5px;
margin: auto;
justify-content: center;
color: #E18824;
text-shadow: 0 0 10px #00b3,
0 0 20px #00b3,
0 0 40px #00b3,
0 0 80px #00b3,
0 0 120px #00b3,
0 0 200px #00b3,
0 0 300px #00b3,
0 0 400px #00b3,
}

5%, 95%{
color: white;
filter: blur(0px);
text-shadow:  none;
text-align: center;    
  }
}

</style>

<header></header>

<div class="container-fluid caption text-center">
 		<h1 class="wow slideInDown" data-wow-duration="2s">
		    <strong> About </strong>
		   	<strong> Us </strong>

		</h1>  
 </div>