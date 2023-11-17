<?php
include "guardar_carrito.php"
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Tienda</title>
	<link rel="stylesheet" href="/Arqui/tienda.css">
</head>

<body>
	<header>
		<h1>Tienda</h1>
		<a href="./index.html">
			<p>Volver a inicio</p>
		</a>
		<a href="/Arqui/carrito.php">
			<p>Ver Carrito</p>
		</a>
	</header>
	<div class="container-items">
		<div class="item">
			<figure>
				<img src="/media/productos/lechuga.jpeg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Lechuga</h2>	
				<p class="price">$5</p>
				<form class="add-to-cart-form" method="post">
					<input type="hidden" name="title" value="Lechuga">
					<input type="hidden" name="price" value="$5">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/papa.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Papa</h2>
				<p class="price">$2</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Papa">
					<input type="hidden" name="price" value="$2">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/tomate.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Tomate</h2>
				<p class="price">$2</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Tomate">
					<input type="hidden" name="price" value="$2">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/manzana.jpeg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Manzana</h2>
				<p class="price">$3</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Manzana">
					<input type="hidden" name="price" value="$3">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/platano.jpeg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Platano</h2>
				<p class="price">$2</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Platano">
					<input type="hidden" name="price" value="$2">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/naranja.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Naranja</h2>
				<p class="price">$2</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Naranja">
					<input type="hidden" name="price" value="$2">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/carne-res.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Carne de res</h2>
				<p class="price">$14</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Carne-Res">
					<input type="hidden" name="price" value="$14">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/carne-cerdo.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Carne de cerdo</h2>
				<p class="price">$12</p>
				<form class="add-to-cart-form" method="post">
					<input type="hidden" name="title" value="Carne-cerdo">
					<input type="hidden" name="price" value="$12">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/pollo.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Pollo</h2>
				<p class="price">$7</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Pollo">
					<input type="hidden" name="price" value="$7">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/snickers.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Snickers</h2>
				<p class="price">$2</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Snickers">
					<input type="hidden" name="price" value="$2">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/lays.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Papas Lays</h2>
				<p class="price">$1</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Lays">
					<input type="hidden" name="price" value="$1">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/rellenitas.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Rellenitas</h2>
				<p class="price">$1</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Rellenitas">
					<input type="hidden" name="price" value="$1">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/fruna.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Frunas</h2>
				<p class="price">$1</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Fruna">
					<input type="hidden" name="price" value="$1">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/vizzio.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Vizio</h2>
				<p class="price">$3</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Vizzio">
					<input type="hidden" name="price" value="$3">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/escoba.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Escoba</h2>
				<p class="price">$10</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Escoba">
					<input type="hidden" name="price" value="$10">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/recogedor.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Recogedor</h2>
				<p class="price">$8</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Recogedor">
					<input type="hidden" name="price" value="$8">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/trapeador.jpeg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Trapeador</h2>
				<p class="price">$11</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Trapeador">
					<input type="hidden" name="price" value="$11">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/trapo.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Trapo</h2>
				<p class="price">$1</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Trapo">
					<input type="hidden" name="price" value="$1">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/ruskaya.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Ruskaya</h2>
				<p class="price">$25</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Ruskaya">
					<input type="hidden" name="price" value="$25">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/ron.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Ron Cartavio</h2>
				<p class="price">$55</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Ron">
					<input type="hidden" name="price" value="$55">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="/media/productos/blue-label.jpg" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Aseo</h2>
				<p class="price">$500</p>
				<form class="add-to-cart-form"  method="post">
					<input type="hidden" name="title" value="Blue-Label">
					<input type="hidden" name="price" value="$500">
					<button class="btn-add-cart" type="submit">Añadir al carrito</button>
				</form>
			</div>
		</div>
	</div>
	<script src="tienda.js" ></script>

</body>

</html>