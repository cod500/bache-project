<!DOCTYPE html>
<html lang="en" class="no-js demo-4">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookBlock: A Content Flip Plugin - Demo 4</title>
	<meta name="description" content="Bookblock: A Content Flip Plugin - Demo 4" />
	<meta name="keywords" content="javascript, jquery, plugin, css3, flip, page, 3d, booklet, book, perspective" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="css/book.css">
	<link rel="stylesheet" href="css/crop.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
	<!-- custom demo style -->
	<link rel="stylesheet" type="text/css" href="css/demo4.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="js/book.js"></script>
</head>

<body>
<div>
<div>
        <img crossorigin="Anonymous" src="" class="crop-image" alt=""/>
    </div>
    
	<nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">
		<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6">
			<div class="pl-4 flex items-center">
				<a class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
				Bache Silhouettes
				</a>
			</div>

			<div class="block lg:hidden pr-4">
				<button id="nav-toggle"
					class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
					</svg>
				</button>
			</div>

			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"
				id="nav-content">
				<ul class="list-reset lg:flex justify-end flex-1 items-center">
					<li class="mr-3">
						<a class="text-white inline-block py-2 px-4 font-bold no-underline" href="#">Active</a>
					</li>
					<li class="mr-3">
						<a class="text-white inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
							href="#">link</a>
					</li>
					<li class="mr-3">
						<a class="text-white inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
							href="#">link</a>
					</li>
				</ul>
				<button id="navAction"
					class="text-white mx-auto lg:mx-0 hover:underline  font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">
					Action
				</button>
			</div>
		</div>
	</nav>
	<div class="text-center px-3 lg:px-0">
		<h1 class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight mt-20">
			Ledger book of William Bache, with associated pieces

		</h1>
		<p class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8">
			William Bache, 22 Dec 1771 - 09 Jul 1845
		</p>
	</div>
	
		<div class="flex flex-col items-center bg-white  border shadow-md md:flex-row dark:border-gray-700 dark:bg-white-800 img-output">
			<img id="result" class="img-box object-cover w-full h-96 md:h-auto md:w-48 md:"
				src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1" alt="">
			<div class=" flex flex-col justify-between p-4 leading-normal">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">National Portrait
					Gallery, Smithsonian Institution; partial gift of Sarah Bache Bloise</h5>
				<p class="mb-3 font-normal text-gray-700 dark:text-gray-400" id="image-info">Click on a silhouette to
					see information.
				</p>
			</div>
		</div>

	<div class="bb-custom-wrapper">
			<div id="bb-bookblock" class="bb-bookblock">
				<div class="bb-item">
					<div class="bb-custom-side">
					<div class="panzoom-even page-1">
						<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_Inside_Front_Cover-000001" />
					</div>
					</div>
					<div class="bb-custom-side">
					<div class="panzoom-odd">
						<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1" usemap="#page-3" />
						</div>
						<map name="page-3">
							<area shape="rect" coords="115, 57, 378, 392" data-id="1" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="396, 59, 665, 406" data-id="2" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="682, 64, 911, 378" data-id="3" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="927, 81, 1176, 373" data-id="4" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="1194, 67, 1414, 379" data-id="5" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="116, 407, 387, 692" data-id="6" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="407, 415, 656, 700" data-id="7" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="677, 394, 909, 689" data-id="8" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="941, 388, 1182, 686" data-id="9" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="1199, 388, 1415, 686" data-id="10" data-tooltip="silhouette name" class="tooltipLink" />
							<area shape="rect" coords="117, 711, 413, 1013" data-id="11" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="419, 725, 653, 1015" data-id="12" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="671, 695, 905, 1017" data-id="13" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="924, 690, 1172, 1010" data-id="14" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="1207, 703, 1419, 999" data-id="15" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="118, 1025, 406, 1337" data-id="16" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="436, 1027, 654, 1340" data-id="17" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="682, 1021, 909, 1319" data-id="18" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="915, 1013, 1173, 1318" data-id="19" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="1195, 1016, 1416, 1307" data-id="20" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="119, 1347, 410, 1652" data-id=21 data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="415, 1351, 650, 1648" data-id="22" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="678, 1331, 916, 1634" data-id="23" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="933, 1329, 1170, 1631" data-id="24" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="1194, 1324, 1416, 1630" data-id="25" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="120, 1659, 411, 1973" data-id="26" data-tooltip="silhouette name" class="tooltipLink" />
							<area shape="rect" coords="431, 1657, 649, 1962" data-id="27" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="675, 1642, 918, 1950" data-id="28" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="931, 1641, 1174, 1943" data-id="29" data-tooltip="silhouette name" class="tooltipLink" />
							<area shape="rect" coords="1189, 1644, 1420, 1937" data-id="30" data-tooltip="silhouette name" class="tooltipLink" />
						</map>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
						<div class="panzoom-even">
							<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p2"/>
						</div>
					</div>
					<div class="bb-custom-side">
						<div class="panzoom-odd">
							<img class="fixed-height" src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p3" usemap="#page-5" />
						</div>
						<map name="page-5">
							<area shape="rect" coords="112,40,364,400"  class="tooltipLink" data-tooltip="silhouette name" data-id="31" />
							<area shape="rect" coords="404,56,628,384" class="tooltipLink" data-tooltip="Person Informaiton" data-id="32" />
							<area shape="rect" coords="672,44,900,368" class="tooltipLink" data-tooltip="silhouette name" data-id="33" />
							<area shape="rect" coords="940,52,1164,372" class="tooltipLink" data-tooltip="silhouette name" data-id="34" />
							<area shape="rect" coords="1200,48,1408,372" class="tooltipLink" data-tooltip="silhouette name" data-id="35" />
							<area shape="rect" coords="124,412,376,676" class="tooltipLink" data-tooltip="silhouette name" data-id="36" />
							<area shape="rect" coords="416,396,640,700" class="tooltipLink" data-tooltip="silhouette name"
								data-id="37" />
							<area shape="rect" coords="676,376,920,688" class="tooltipLink" data-tooltip="silhouette name"
								data-id="38" />
							<area shape="rect" coords="952,380,1160,688" class="tooltipLink" data-tooltip="silhouette name"
								data-id="39" />
							<area shape="rect" coords="1208,384,1408,684" class="tooltipLink" data-tooltip="silhouette name"
								data-id="40" />
							<area shape="rect" coords="136,692,388,976" class="tooltipLink" data-tooltip="silhouette name"
								data-id="41" />
							<area shape="rect" coords="424,708,636,992" class="tooltipLink" data-tooltip="silhouette name"
								data-id="42" />
							<area shape="rect" coords="688,688,924,992" class="tooltipLink" data-tooltip="silhouette name"
								data-id="43" />
							<area shape="rect" coords="936,700,1176,1008" class="tooltipLink" data-tooltip="silhouette name"
								data-id="44" />
							<area shape="rect" coords="1196,692,1404,996" class="tooltipLink" data-tooltip="silhouette name"
								data-id="45" />
							<area shape="rect" coords="136,992,404,1320" class="tooltipLink" data-tooltip="silhouette name"
								data-id="46" />
							<area shape="rect" coords="436,1008,640,1328" class="tooltipLink" data-tooltip="silhouette name"
								data-id="47" />
							<area shape="rect" coords="676,1000,904,1324" class="tooltipLink" data-tooltip="silhouette name"
								data-id="48" />
							<area shape="rect" coords="932,1024,1148,1308" class="tooltipLink" data-tooltip="silhouette name"
								data-id="49" />
							<area shape="rect" coords="1200,996,1436,1296" class="tooltipLink" data-tooltip="silhouette name"
								data-id="50" />
							<area shape="rect" coords="144,1320,396,1628" class="tooltipLink" data-tooltip="silhouette name"
								data-id="51" />
							<area shape="rect" coords="432,1344,640,1632" class="tooltipLink" data-tooltip="silhouette name"
								data-id="52" />
							<area shape="rect" coords="684,1340,924,1628" class="tooltipLink" data-tooltip="silhouette name"
								data-id="53" />
							<area shape="rect" coords="940,1312,1164,1620" class="tooltipLink" data-tooltip="silhouette name"
								data-id="54" />
							<area shape="rect" coords="1188,1308,1428,1636" class="tooltipLink" data-tooltip="silhouette name"
								data-id="55" />
							<area shape="rect" coords="156,1656,384,1952" class="tooltipLink" data-tooltip="silhouette name"
								data-id="56" />
							<area shape="rect" coords="440,1652,652,1948" class="tooltipLink" data-tooltip="silhouette name"
								data-id="57" />
							<area shape="rect" coords="684,1628,928,1932" class="tooltipLink" data-tooltip="silhouette name"
								data-id="58" />
						</map>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
						<div class="panzoom-even page-2">
							<img id="odd-page" class="fixed-height" src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p4" usemap="#page-6" />
						</div>
						<map name="page-6">
							<area shape="rect" coords="96,92,324,456" class="tooltipLink" data-tooltip="silhouette name - 1" data-id="59" />
							<area shape="rect" coords="344,96,568,464" class="tooltipLink" data-tooltip="silhouette name - 2" data-id="60" />
							<area shape="rect" coords="608,104,840,456" class="tooltipLink" data-tooltip="silhouette name - 3" data-id="61" />
							<area shape="rect" coords="868,112,1080,448" class="tooltipLink" data-tooltip="silhouette name - 4" data-id="62" />
							<area shape="rect" coords="1140,112,1348,456" class="tooltipLink" data-tooltip="silhouette name - 5" data-id="63" />
							<area shape="rect" coords="104,472,328,812" class="tooltipLink" data-tooltip="silhouette name - 1" data-id="64" />
							<area shape="rect" coords="352,492,572,816" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="65" />
							<area shape="rect" coords="580,476,832,828" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="66" />
							<area shape="rect" coords="844,472,1080,824" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="67" />
							<area shape="rect" coords="1096,484,1328,824" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="68" />
							<area shape="rect" coords="116,868,328,1177" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="69" />
							<area shape="rect" coords="604,872,836,1188" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="70" />
							<area shape="rect" coords="864,868,1088,1183"  class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="71" />
							<area shape="rect" coords="1108,868,1336,1205" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="72" />
							<area shape="rect" coords="88,1208,332,1560" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="73" />
							<area shape="rect" coords="360,1208,576,1567" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="74" />
							<area shape="rect" coords="820,1240,1084,1580" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="75" />
							<area shape="rect" coords="100,1588,356,1906" class="tooltipLink" data-tooltip="silhouette name - 1"
								data-id="76" />
						</map>
					</div>
					<div class="bb-custom-side">
						<div class="panzoom-odd">
							<img id="odd-page" class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p5" usemap="#page-7" />
						</div>
						<map name="page-7">
							<area shape="rect" coords="128,104,348,420" class="tooltipLink" data-tooltip="first row - 1" data-id="77" />
							<area shape="rect" coords="404,92,640,404" class="tooltipLink" data-tooltip="first row - 2" data-id="78" />
							<area shape="rect" coords="680,88,900,404" class="tooltipLink" data-tooltip="first row - 3" data-id="79" />
							<area shape="rect" coords="932,76,1136,396" class="tooltipLink" data-tooltip="first row - 4" data-id="80" />
							<area shape="rect" coords="1180,72,1396,392" class="tooltipLink" data-tooltip="first row - 5" data-id="81" />
							<area shape="rect" coords="140,436,344,724" class="tooltipLink" data-tooltip="first row - 1" data-id="82" />
							<area shape="rect" coords="412,416,644,712" class="tooltipLink" data-tooltip="first row - 1"
								data-id="83" />
							<area shape="rect" coords="680,416,908,708" class="tooltipLink" data-tooltip="first row - 1"
								data-id="84" />
							<area shape="rect" coords="944,408,1152,704" class="tooltipLink" data-tooltip="first row - 1"
								data-id="85" />
							<area shape="rect" coords="1184,404,1396,708" class="tooltipLink" data-tooltip="first row - 1"
								data-id="86" />
							<area shape="rect" coords="148,768,348,1028" class="tooltipLink" data-tooltip="first row - 1"
								data-id="87" />
							<area shape="rect" coords="408,752,628,1044" class="tooltipLink" data-tooltip="first row - 1"
								data-id="88" />
							<area shape="rect" coords="700,744,900,1028" class="tooltipLink" data-tooltip="first row - 1"
								data-id="89" />
							<area shape="rect" coords="924,728,1152,1012" class="tooltipLink" data-tooltip="first row - 1"
								data-id="90" />
							<area shape="rect" coords="1192,728,1400,1012" class="tooltipLink" data-tooltip="first row - 1"
								data-id="91" />
							<area shape="rect" coords="160,1048,376,1340" class="tooltipLink" data-tooltip="first row - 1"
								data-id="92" />
							<area shape="rect" coords="416,1060,628,1336" class="tooltipLink" data-tooltip="first row - 1"
								data-id="93" />
							<area shape="rect" coords="692,1048,904,1336" class="tooltipLink" data-tooltip="first row - 1"
								data-id="94" />
							<area shape="rect" coords="940,1036,1156,1324" class="tooltipLink" data-tooltip="first row - 1"
								data-id="95" />
							<area shape="rect" coords="1200,1024,1412,1328" class="tooltipLink" data-tooltip="first row - 1"
								data-id="96" />
							<area shape="rect" coords="164,1356,380,1664" class="tooltipLink" data-tooltip="first row - 1"
								data-id="97" />
							<area shape="rect" coords="400,1352,612,1664" class="tooltipLink" data-tooltip="first row - 1"
								data-id="98" />
							<area shape="rect" coords="680,1352,916,1648" class="tooltipLink" data-tooltip="first row - 1"
								data-id="99" />
							<area shape="rect" coords="944,1328,1172,1632" class="tooltipLink" data-tooltip="first row - 1"
								data-id="100" />
							<area shape="rect" coords="1212,1336,1408,1632" class="tooltipLink" data-tooltip="first row - 1"
								data-id="101" />
							<area shape="rect" coords="144,1676,392,1980" class="tooltipLink" data-tooltip="first row - 1"
								data-id="102" />
							<area shape="rect" coords="408,1668,628,1968" class="tooltipLink" data-tooltip="first row - 1"
								data-id="103" />
							<area shape="rect" coords="688,1660,920,1956" class="tooltipLink" data-tooltip="first row - 1"
								data-id="104" />
								<area shape="rect" coords="956,1640,1180,1956" class="tooltipLink" data-tooltip="first row - 1"
								data-id="105" />
							<area shape="rect" coords="1208,1636,1424,1948" class="tooltipLink" data-tooltip="first row - 1"
								data-id="106" />
							
						</map>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
					<div class="bb-custom-side">
					<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1"/>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
						<p>Jujubes fruitcake tiramisu liquorice chocolate cake. Carrot cake faworki donut soufflé oat
							cake tootsie roll. Fruitcake fruitcake cake sweet pie jelly beans. Chocolate cake candy
							jujubes oat cake toffee croissant muffin.</p>
					</div>
					<div class="bb-custom-side">
						<p>Chocolate bar tiramisu marzipan. Croissant soufflé croissant lollipop liquorice dragée chupa
							chups carrot cake. Liquorice lollipop halvah toffee lollipop.</p>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
						<p>Jujubes fruitcake tiramisu liquorice chocolate cake. Carrot cake faworki donut soufflé oat
							cake tootsie roll. Fruitcake fruitcake cake sweet pie jelly beans. Chocolate cake candy
							jujubes oat cake toffee croissant muffin.</p>
					</div>
					<div class="bb-custom-side">
						<p>Chocolate bar tiramisu marzipan. Croissant soufflé croissant lollipop liquorice dragée chupa
							chups carrot cake. Liquorice lollipop halvah toffee lollipop.</p>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
						<p>Jujubes fruitcake tiramisu liquorice chocolate cake. Carrot cake faworki donut soufflé oat
							cake tootsie roll. Fruitcake fruitcake cake sweet pie jelly beans. Chocolate cake candy
							jujubes oat cake toffee croissant muffin.</p>
					</div>
					<div class="bb-custom-side">
						<p>Chocolate bar tiramisu marzipan. Croissant soufflé croissant lollipop liquorice dragée chupa
							chups carrot cake. Liquorice lollipop halvah toffee lollipop.</p>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side">
						<p>Last fruitcake tiramisu liquorice chocolate cake. Carrot cake faworki donut soufflé oat cake
							tootsie roll. Fruitcake fruitcake cake sweet pie jelly beans. Chocolate cake candy jujubes
							oat cake toffee croissant muffin.</p>
					</div>
					<div class="bb-custom-side">
						<p>Chocolate bar tiramisu marzipan. Croissant soufflé croissant lollipop liquorice dragée chupa
							chups carrot cake. Liquorice lollipop halvah toffee lollipop.</p>
					</div>
				</div>
			</div>

			<nav>
				<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
				<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
				<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
				<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
			</nav>

			<div class="zoom-controls py-5">
			<div>
				<button id="zoom-in-even"
					class="rounded px-4 py-2 text-xs text-gray-800 font-extrabold rounded my-2 md:my-6 py-2 px-8 shadow-lg">Zoom
					In </button>
				<button id="zoom-out-even"
					class="rounded px-4 py-2 text-xs text-gray-800 font-extrabold rounded my-2 md:my-6 py-2 px-8 shadow-lg ">Zoom
					Out</button>
				<!-- <input type="range" class="zoom-range"> -->
				<button
					class="rounded px-4 py-2 text-xs text-gray-800 font-extrabold rounded my-2 md:my-6 py-2 px-8 shadow-lg"
					id="reset-even">Reset</button>
			</div>

			<div>
				<button id="zoom-in-odd"
					class="rounded px-4 py-2 text-xs text-gray-800 font-extrabold rounded my-2 md:my-6 py-2 px-8 shadow-lg">Zoom
					In </button>
				<button id="zoom-out-odd"
					class="rounded px-4 py-2 text-xs text-gray-800 font-extrabold rounded my-2 md:my-6 py-2 px-8 shadow-lg ">Zoom
					Out</button>
				<!-- <input type="range" class="zoom-range"> -->
				<button
					class="rounded px-4 py-2 text-xs text-gray-800 font-extrabold rounded my-2 md:my-6 py-2 px-8 shadow-lg"
					id="reset-odd">Reset</button>
			</div>
		</div>
	</div>

	<section class="bg-white border-b py-20 m-20">
		<div class="container mx-auto flex flex-wrap pt-4 pb-12">
			<h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
			William Bache
			</h2>
			<div class="w-full mb-4">
				<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
			</div>

			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
					<a href="#" class="flex flex-wrap no-underline hover:no-underline">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">
							GETTING STARTED
						</p>
						<div class="w-full font-bold text-xl text-gray-800 px-6">
							Lorem ipsum dolor sit amet.
						</div>
						<p class="text-gray-600 text-base px-6 mb-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							at ipsum eu nunc commodo posuere et sit amet ligula.
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
					<div class="flex items-center justify-start">
						<button
							class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg">
							Action
						</button>
					</div>
				</div>
			</div>

			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
					<a href="#" class="flex flex-wrap no-underline hover:no-underline">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">
							GETTING STARTED
						</p>
						<div class="w-full font-bold text-xl text-gray-800 px-6">
							Lorem ipsum dolor sit amet.
						</div>
						<p class="text-gray-600 text-base px-6 mb-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							at ipsum eu nunc commodo posuere et sit amet ligula.
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
					<div class="flex items-center justify-center">
						<button
							class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg">
							Action
						</button>
					</div>
				</div>
			</div>

			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
					<a href="#" class="flex flex-wrap no-underline hover:no-underline">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">
							GETTING STARTED
						</p>
						<div class="w-full font-bold text-xl text-gray-800 px-6">
							Lorem ipsum dolor sit amet.
						</div>
						<p class=" text-gray-600 text-base px-6 mb-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							at ipsum eu nunc commodo posuere et sit amet ligula.
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
					<div class="flex items-center justify-end">
						<button
							class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg">
							Action
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="content-description w-full mx-auto text-center pt-6 pb-12">
		<h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-white">
			Content
		</h2>
		<div class="w-full mb-4">
			<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
		</div>

		<h3 class="my-4 text-3xl font-extrabold">
			Content Description
		</h3>

		<button
			class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
			Action!
		</button>
	</section>

	<!--Footer-->
	<footer class="bg-white ">
		<div class="container mx-auto mt-8 px-8">
			<div class="w-full flex flex-col md:flex-row py-6">
				<div class="flex-1 mb-6">
					<a class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
						Footer
					</a>
				</div>

				<div class="flex-1">
					<p class="uppercase font-extrabold text-gray-500 md:mb-6">Links</p>
					<ul class="list-reset mb-6">
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">FAQ</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Help</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Support</a>
						</li>
					</ul>
				</div>
				<div class="flex-1">
					<p class="uppercase font-extrabold text-gray-500 md:mb-6">Legal</p>
					<ul class="list-reset mb-6">
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Terms</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Privacy</a>
						</li>
					</ul>
				</div>
				<div class="flex-1">
					<p class="uppercase font-extrabold text-gray-500 md:mb-6">Social</p>
					<ul class="list-reset mb-6">
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Facebook</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Linkedin</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Twitter</a>
						</li>
					</ul>
				</div>
				<div class="flex-1">
					<p class="uppercase font-extrabold text-gray-500 md:mb-6">
						Company
					</p>
					<ul class="list-reset mb-6">
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Official
								Blog</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">About
								Us</a>
						</li>
						<li class="mt-2 inline-block mr-2 md:block md:mr-0">
							<a href="#"
								class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div><!-- /container -->
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="js/jquerypp.custom.js"></script>
	<script src="js/jquery.panzoom.js"></script>
	<script src="js/mapoid.js"></script>
	<script src="js/jquery.bookblock.js"></script>
	
	<script src="js/book.js"></script>
	<script>
	
		var Page = (function () {

			var config = {
				$bookBlock: $('#bb-bookblock'),
				$navNext: $('#bb-nav-next'),
				$navPrev: $('#bb-nav-prev'),
				$navFirst: $('#bb-nav-first'),
				$navLast: $('#bb-nav-last')
			},
				init = function () {
					config.$bookBlock.bookblock({
						speed: 1000,
						shadowSides: 0.8,
						shadowFlip: 0.4
					});
					initEvents();
				},
				initEvents = function () {

					var $slides = config.$bookBlock.children();

					// add navigation events
					config.$navNext.on('click touchstart', function () {
						config.$bookBlock.bookblock('next');
						return false;
					});

					config.$navPrev.on('click touchstart', function () {
						config.$bookBlock.bookblock('prev');
						return false;
					});

					config.$navFirst.on('click touchstart', function () {
						config.$bookBlock.bookblock('first');
						return false;
					});

					config.$navLast.on('click touchstart', function () {
						config.$bookBlock.bookblock('last');
						return false;
					});

					// add swipe events
					$slides.on({
						'swipeleft': function (event) {
							config.$bookBlock.bookblock('next');
							return false;
						},
						'swiperight': function (event) {
							config.$bookBlock.bookblock('prev');
							return false;
						}
					});

					// add keyboard events
					$(document).keydown(function (e) {
						var keyCode = e.keyCode || e.which,
							arrow = {
								left: 37,
								up: 38,
								right: 39,
								down: 40
							};

						switch (keyCode) {
							case arrow.left:
								config.$bookBlock.bookblock('prev');
								break;
							case arrow.right:
								config.$bookBlock.bookblock('next');
								break;
						}
					});
				};

			return { init: init };

		})();
	</script>
	<script>
		Page.init();
	</script>
</body>

</html>






<div class="bb-item">
					<div class="bb-custom-side">
					<div class="panzoom-even page-1">
						<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_Inside_Front_Cover-000001" />
					</div>
					</div>
					<div class="bb-custom-side">
						<div class="panzoom-odd">
							<img class="fixed-height"src="https://ids.si.edu/ids/deliveryService?id=NPG-NPG_2002_184_p1" usemap="#page-3" />
						</div>
						<map name="page-3">
							<area shape="rect" coords="115, 57, 378, 392" data-id="1" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="396, 59, 665, 406" data-id="2" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="682, 64, 911, 378" data-id="3" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="927, 81, 1176, 373" data-id="4" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="1194, 67, 1414, 379" data-id="5" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="116, 407, 387, 692" data-id="6" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="407, 415, 656, 700" data-id="7" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="677, 394, 909, 689" data-id="8" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="941, 388, 1182, 686" data-id="9" data-tooltip="silhouette name"  class="tooltipLink"/>
							<area shape="rect" coords="1199, 388, 1415, 686" data-id="10" data-tooltip="silhouette name" class="tooltipLink" />
							<area shape="rect" coords="117, 711, 413, 1013" data-id="11" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="419, 725, 653, 1015" data-id="12" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="671, 695, 905, 1017" data-id="13" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="924, 690, 1172, 1010" data-id="14" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="1207, 703, 1419, 999" data-id="15" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="118, 1025, 406, 1337" data-id="16" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="436, 1027, 654, 1340" data-id="17" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="682, 1021, 909, 1319" data-id="18" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="915, 1013, 1173, 1318" data-id="19" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="1195, 1016, 1416, 1307" data-id="20" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="119, 1347, 410, 1652" data-id=21 data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="415, 1351, 650, 1648" data-id="22" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="678, 1331, 916, 1634" data-id="23" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="933, 1329, 1170, 1631" data-id="24" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="1194, 1324, 1416, 1630" data-id="25" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="120, 1659, 411, 1973" data-id="26" data-tooltip="silhouette name" class="tooltipLink" />
							<area shape="rect" coords="431, 1657, 649, 1962" data-id="27" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="675, 1642, 918, 1950" data-id="28" data-tooltip="silhouette name" class="tooltipLink"/>
							<area shape="rect" coords="931, 1641, 1174, 1943" data-id="29" data-tooltip="silhouette name" class="tooltipLink" />
							<area shape="rect" coords="1189, 1644, 1420, 1937" data-id="30" data-tooltip="silhouette name" class="tooltipLink" />
						</map>
					</div>
				</div>