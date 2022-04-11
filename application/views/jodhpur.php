<!DOCTYPE html>
<html>
<head>
	<title>Jodhpur Project</title>
	<?php include("link.php"); ?>
	
	
</head>
<body>

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-12 p-0">
				<nav class="navbar navbar-expand-lg bg-light navbar-light">
					<a href="#" class="navbar-brand text-primary">WELCOME TO BLUE CITY</a>
					<ul class="navbar-nav ml-auto">
						<li class="navbar-item"><a href="#" class="nav-link">SIGN IN</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="row new">
			<div class="col-sm-12 text-center text-white mt-2">
				<h1 class="mt-5 display-2">Welcome To The Blue City</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<a href="<?php echo site_url('Welcome/showall') ?>" class="text-center mt-5 display-2 text-primary">Popular Places</a>
				<table class="table-bordered">
					<?php
						foreach($_SESSION['result'] as $res)
						{
							echo "<a href=".site_url('Welcome/showcat/'.$res['cate_id'])." class='btn-block btn-light mt-4 text-danger'>".$res['cate_name']."</a>";
						}
					?>
				</table>
			</div>
			<div class="col-sm-7 text-center text-black mt-5">
				<h1 class="mt-5 display-2 text-primary">Jodhpur</h1>
				<p class="mt-3 font-italic text-justify">Jodhpur, the second largest city in Rajasthan is popularly known as the Blue City.
					The name is clearly befitting as most of the architecture – forts, palaces, temples, havelis 
					and even houses are built in vivid shades of blue. The strapping forts that tower this magnificent 
					city sum up to a spectacle you would not want to miss. The mammoth, imposing fortress of Mehrangarh 
					has a landscape dominating a rocky ridge with the eight gates leading out of the fortress. 
					The new city is located outside the structure. Jodhpur is also known for the rare breed of horses
					known as Marwari or Malani, which are only found here.
				
					Jodhpur marks its origin back to the year of 1459 AD. The history of this prosperous city revolve
					around the Rathore clan. Rao Jodha, the chief of Rathore Clan is credited with the origin of Jodhpur
					in India. The city is known to be built in place of the ancient capital, Mandore of the state of Manwar. 
					Hence, the people of Jodhpur and surrounding areas are commonly known as Marwaris. Also, it is believed that 
					the relics of Mandore can still be witnessed in the Mandore Gardens.
				</p>
			</div>
			<div class="col-sm-1"></div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<h1 class="mt-5 display-2 text-center text-primary">Fair And Festival</h1>
				<img src=<?php echo base_url("assest/image/puppet.jpg")?> class="img-fluid w-100"/>
			</div>
		</div>

		<div class="row mt-5 text-center bg-white mt-5">
			<div class="col-sm-12">
				<p class="text-dark mt-4 font-italic text-justify">Jodhpur is set at the edge of the Thar Desert. This imperial city echoes with tales of antiquity 
					in the emptiness of the desert. In the past, it was the capital of the Marwar state, founded in 1459 A.D. by Rao Jodha - 
					the chief of the Rathore clan of Rajputs. A high wall -10 km long with 8 gates and innumerable bastions encompasses the 
					city. It was once a major trade center. Jodhpur is now the second largest city of Rajasthan.

					Regarding the Jodhpur culture, the Jodhpuri people are amongst the most hospitable people of India. They have a 
					typical Marwari accent. The lifestyle in Jodhpur, India is quite fascinating. The folks there wear nice and lovely
					multihued costumes. The women folk wear wide gathered skirts and a hip length jacket, with three quarter length 
				 	sleeves, covering the front and back. Women are also love to wear jewelry on many parts of their body. They 
				 	particularly like to wear specific type of jewelry like the ones worn on the feet, head, forehead, 
				 	ear, nose, neck, arms, wrist, fingers, waist, etc. Another one of the unique features of the culture 
				 	of Jodhpur, Rajasthan is the colorful turbans worn by men. The popular tight, horse riding trousers, 
				 	'Jodhpurs', took their name from this city only. The main languages spoken here are Hindi, Marwari 
				 	and Rajasthani.
				
					The graceful palaces, forts and temples strewn throughout the city bring alive the historic grandeur of this 
					city. Lending a romantic aura to Jodhpur, are its exquisite handicrafts, folk dances, folk music and the brightly 
					attired people. The desert people are quite affable. With their sweet smiles and warm hospitality, they win 
					the hearts of the tourists. The famous Marwar festival brings out the festive spirits of the people of this 
					city. The bazaars of Jodhpur have a range of items from tie & dye textiles, embroidered leather shoes, 
					lacquerware, antiques, carpets and puppets to the exquisite Rajasthani textiles, clay figurines, miniature 
					camels and elephants, marble inlay work and classic silver jewellery.
				</p>
			</div>
		</div>
		
		<div class="row mt-5">
			<div class="col-sm-12">
				<h1 class="text-center display-2 text-primary">Culture</h1>
			</div>
		</div>

		<div class="row p-5">
			<div class="col-sm-1"></div>
			<div class="col-sm-3 text-center card">
				<img src=<?php echo base_url("assest/image/festival1.jpg")?> class="img-fluid p-3"/>
				<h1 class="mt-5">Holi Festival</h1>
				<p class="text-dark text-justify">Holi is a popular ancient Indian festival, also known as the "Festival of Love",
				 the "Festival of Colours", and the "Festival of Spring". The festival celebrates the eternal and divine 
				 love of Radha Krishna. 
				</p>
			</div>
			<div class="col-sm-4 text-center card">
				<img src=<?php echo base_url("assest/image/festival2.jpg")?> class="img-fluid p-3"/>
				<h1 class="mt-5">Classical Sangeet</h1>
				<p class="text-dark text-justify">Indian classical music is the classical music of the Indian subcontinent. It has two
				 major traditions: the North Indian classical music tradition is called Hindustani, while the South Indian 
				 expression is called Carnatic. These traditions were not distinct until about the 16th century. 
				</p>
			</div>
			<div class="col-sm-3 text-center card">
				<img src=<?php echo base_url("assest/image/festival3.jpg")?> class="img-fluid p-3"/>
				<h1 class="mt-5">Gangour</h1>
				<p class="text-dark text-justify">Gangaur is a festival celebrated in the Indian state of Rajasthan and some parts of Gujarat,
				 Madhya Pradesh, and West Bengal.</p>
			</div>
			<div class="col-sm-1"></div>
		</div>

		<div class="row mt-2">
			<div class="col-sm-1"></div>
			<div class="col-sm-3 text-center card">
				<img src=<?php echo base_url("assest/image/festival5.jpg")?> class="img-fluid p-3"/>
				<h1 class="mt-5">Gavar</h1>
				<p class="text-dark text-justify">The Dhinga Gavar festival is a festival for women that celebrates womanhood. In the festival, 
				women disguise themselves as various alluring characters in order to deceive men. An elaborate procession is out all night consisting 
				of these women dressed as various characters, mostly gods and goddesses. They patrol the streets of Jodhpur all night and protect the 
				statue of Dhinga Gavar.The actual ritual lasts for 16 days, and the much awaited procession come out on the last day of the festival.</p>
			</div>
			<div class="col-sm-4 text-center card">
				<img src=<?php echo base_url("assest/image/dance.jpg")?> class="img-fluid p-3"/>
				<h1 class="mt-5">Dance</h1>
				<p class="text-dark text-justify">Dance is a part of life for Jodhpur people. They dance together for all celebrations. Their dance wearing
				 colourful costumes and ornaments make is really a wonderful experience for outsiders. Generally, men and women of Jodhpur dance 
				 in fairs and festivals with simple and unsophisticated movements. Chart Dance is a special dance form performed by men and women.
				  They dance with pots or a lighted lamp on the head.Ghoomar dance is another popular dance of Jodhpur and the name of the dance is
				   originated from the word ‘ghooma’ that means rotating. Men and women sing alternatively as well as move clockwise and anticlockwise.
				    While the women rotate speedily, their long skirt called gharga will flow displaying the spectacular colours. Men also have several 
					dance forms. The Gair of Jodhpur is performed in a single file. Men wear the martial costumes for effect. Male dancers also use sticks 
					and swords.
				</p>
			</div>
			<div class="col-sm-3 text-center card">
				<img src=<?php echo base_url("assest/image/diwali.jpg")?> class="img-fluid p-3"/>
				<h1 class="mt-5">Diwali</h1>
				<p class="text-dark text-justify">Diwali, also known as 'Deepawali' is celebrated with whole enthusiasm and devotion in Rajasthan 
				like every part of India. Known as 'The Festival of Lights', Diwali is almost celebrated by all religions in Rajasthan. Diwali is 
				celebrated for many reasons. Some celebrate Diwali as it is believed that it marks the starting of the Hindu New Year according to
				 the Lunar calendar. But most people celebrated it as the victory of Goodness over Evil.
				</p>
			</div>
			<div class="col-sm-1"></div>
		</div>
	

		<div class="row text-center bg-white mt-5">
			<div class="col-sm-12">
				<h1 class="text-primary display-2">Famous Things</h1>
				<p class="text-dark text-justify">Colourful dupattas, tinkling earrings, ethnic mojaris, classy antiques 
				and finely crafted handicrafts best describe the scene of shopping in Jodhpur! The historic city happens to 
				be home to most colourful markets just like any other cities of Rajasthan. When you plan a trip to Jodhpur,
				 do make sure you take a day off for shopping only as there is so much to explore. The city is packed with myriad
				  big and small market areas and shopping centres where one can have a heartfelt shopping experience. Sojari Gate, 
				  Station Road, Tripoloa Bazaar, Mochi Bazaar, Umaid Bhawan Palace Market, Clock Tower and Nai Sarak are the prominent
				   street markets in Jodhpur. Let’s have a look at these amazing places to shop in Jodhpur.</p>
			</div>
		</div>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-3 text-center">
				<h1>Bangels</h1>
				<p class="text-justify">Sindhi Mojari is a type of handcrafted footwear produced in Pakistan. They are traditionally made by artisans 
					mostly using tanned leather. The uppers are made of one piece of leather or textile embroidered and embellished
					 with brass nails, cowry shells, mirrors, bells and ceramic beads.
				</p>
			</div>
			<div class="col-sm-1">
				<img src=<?php echo base_url("assest/image/q1.jpg")?> class="img-fluid mt-5 rounded-circle"/>
			</div>
			<div class="col-sm-6"></div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5"></div>
			<div class="col-sm-1">
				<img src=<?php echo base_url("assest/image/q2.jpg")?> class="img-fluid mt-5 rounded-circle"/>
			</div>
			<div class="col-sm-4">
				<h1>Bandaje</h1>
				<p class="text-justify">Jodhpur is well known for its beautiful Bandhej work on cloth. To represent the cultural and ethical 
				jewellery styles Rajasthali has come up with their business in Bandhej suit and saree in Jodhpur. You 
				shop can online through the Rajasthali cottage industry official website or stop by our shop in Jodhpur 
				to buy a Bandhej saree. We provide our customers the best designs with guaranteed quality products. Buy 
				Lehariya saree and suit in Jodhpur only at Rajasthali Cottage Industry for better and guaranteed quality.
				Our products are 100% trustable and our services are available 365 days a year. Rajasthali has the best 
				Lehariya saree in Jodhpur to stop buy and purchase.

				Rajasthali cottage industry promises the product quality shipped and has received an overall 99% of positive
				feedbacks from the customers. Our online sales are trustworthy in terms of quality of the fabrics, guaranteed 
				and authentic Jodhpuri bandhani saree, and Lehariya saree in Jodhpur; we sell exactly what we show on our website. 
				We have served a wide range of people until now and are looking forward to keeping the consistency alive for many 
				more years. Payment methods are made secure and trustworthy for you, at Rajasthali you may not worry about the payment 
				frauds people come across during online shopping because we have come with the best-secured payment methods for you.
				Rajasthali helps you fill your wardrobe with all the fancy stylish attires and much more. We have the best brands 
				integrated for sale and assurance of the best products delivered. At Rajasthali cottage industry you get served what 
				you’ve been shown. We provide only branded items to our customer’s satisfaction and needs. Rajasthali cottage industry 
				is the best choice to stop on for your shopping list to be fulfilled.
				</p>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-3 text-center">
				<h1>Mojari</h1>
				<p class="text-justify">Mojari or Khussa or Saleem Shahi's is a style of handcrafted footwear  produced in South Asia. They are
				 traditionally made by artisans mostly using tanned leather. The uppers are made of one piece of leather or 
				 textile embroidered and embellished with brass nails, cowry shells, mirrors, bells and ceramic beads. Even 
				 the bonding from the upper to the sole is done by cotton thread that is not only eco-friendly but also 
				 enmeshes the leather fibers with great strength. Some product range also uses bright and ornate threads.

				As it evolved through the centuries and is being produced by individual artisans, products vary in designs 
				and colours. It encapsules cultural diversity, local ethos and ethnicity.

   				History-The Mojari originated under the Mughal Empire, where it was decorated with colours, gems, and other 
				ornaments. They are said to have been popularized under the Mughal King Saleem Shah and are often referred to 
				as Saleem Shahis as a result.They are also commonly worn with Shalwar Kameez. Although leather shoes have been 
				worn for over 5,000 years by various civilizations, they should not be confused with Mojaris, because Mojaris 
				are unique in their ornamental style, shape, and appearance.
				</p>
			</div>
			<div class="col-sm-1">
				<img src=<?php echo base_url("assest/image/q3.jpg")?> class="img-fluid mt-5 rounded-circle"/>
			</div>
			<div class="col-sm-6"></div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5"></div>
			<div class="col-sm-1">
				<img src=<?php echo base_url("assest/image/q4.jpg")?> class="img-fluid mt-5 rounded-circle"/>
			</div>
			<div class="col-sm-4">
				<h1>HandiCraft</h1>
				<p class="text-justify">A handicraft, sometimes more precisely expressed as artisanal handicraft or handmade, is any of 
				a wide variety of types of work where useful and decorative objects are madecompletely by one’s hand 
				or by using only simple, non-automated related tools like scissors, carving implements, or hooks.
				Handicraft exporters are in crisis. Due to GST, handicraft items of Jodhpur have become expensive in the 
				international market and their demand has decreased. The handicraft export business of Jodhpur has declined 
				nearly 40 percent and business worth Rs 700 crore has been reduced since the implementation of GST.
				Before GST, where 150-180 million exports of handicrafts from Jodhpur were going on every month, right now 
				it has come down to 75 to 90 million per month. The provision of GST from 12 to 28 percent on handicraft furniture 
				has hit exporters and foreign customers are now heading towards China, Vietnam and Indonesia.
				</p>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>

</div>
	
		
	</div>
	            
</body>
</html>