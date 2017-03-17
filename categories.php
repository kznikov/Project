<?php

	
	$subCategories = array(
							array("HP", "ASUS", "ACER", "Packard Bell", "до 14.9″", "от 15″ до 16.9″", "над 17″", "Lenovo"),
							array("ACER", "Tablet", "HP", "ASUS", "Radius", "LG", "Lenovo"),		
							array("ASUS", "BENQ", "ACER", "от 20″ до 22″", "LG", "Packard Bell", "от 17″ до 19″", "HP", "от 23″ до 30″", "Аксесоари за монитори", "над 30″"),
							array("Kingston", "Външни дискове", "A-DATA", "HP", "SSD дискове", "За десктоп компютри", "Intel","Western Digital", "Seagate", "За сървъри", "LG", "HITACHI", "Silicon Power", "За лаптопи", "Supermicro"),
							array("A-DATA", "USB флаш памет", "Флаш-карта", "Kingston", "Silicon Power"),
							array("HTC" ,"ASUS", "NOKIA", "Lenovo", "Nokia Outlet","Microsoft", "Motorola", "LG"),
							array("HP","Лазерни", "Canon", "Мастиленоструйни", "Многофункционални", "Широкоформатни (Плотери)", "Аксесоари"),
							array("За Лазерни принтери", "За Мастиленоструйни принтери", "Хартии и Филми", "HP Canon", "За Плотери","Преоценени"),
							array("Мишки","Клавиатури", "Чанти и Калъфи", "Батерии", "Докинг станции", "За лаптопи", "Камери", "Колонки", "Слушалки", "Микрофони", "Джойстик", "Предпазители", "За телефони", "За сървъри", "Звукови карти", "За Десктоп компютри "),
							array("Sapphfire", "ACER", "HP", "ASUS", "Intel", "Thin", "Clients", "Lenovo" ),
							array("HP"),
							array(),
							array("Рутери","Суичове", "Мрежови адаптери", "HP", "ASUS", "D-Link", "Supermicro"),
							array("За десктоп компютри", "За лаптопи", "За сървъри"),
							array("KODAK"),
							array("ASUS", "Gigabyte", "HP", "Palit", "Sapphire", "KFA", "PowerColor"),
							array("Intel", "AMD", "Аксесоари за процесори", "HP"),
							array("BENQ", "CANONACER", "LG", "ASUS"),
							array(),
							array("ASROCK", "SAPPHIRE", "ASUS", "Gigabyte", "Intel", "Supermicro"),
							array("Supermicro", "HP", "Сървърни опции", "Софтуер", "Аксесоари"),
							array("Cooler Master", "GEIL","EVERCOOL", "ARCTIC", "DAOTECH", "Supermicro", "Fractal Design", "Fortron", "Intel", "NZXT"),
							array("KME", "Cooler Master", "DAOTECH", "Fractal Design","Supermicro", "Fortron", "Аксесоари за кутии", "NZXT"),
							array("Fortron", "Cooler Master", "Seasonic", "Fractal Design", "NZXT", "Supermicro"),
							array("HP", "Supermicro"),
							array("HP", "Supermicro"),
							array("HP", "Supermicro", "Supermicro"),
							array(),
							array("За лаптопи", "За сървъри", "За десктоп компютри"),
							array()																																																																									
	);
	$cnt=0;

?>


<main id="categories">

	<section>
		<h1>Продукти</h1>
		<hr/>
		<?php for($index = 0;$index<=29;$index++){
			if($cnt == 6){
				echo "<hr>";
				$cnt = 0;
			}
			$cnt++;
			echo "<article class='footer-column'>";
				echo "<a class='cat_prod' href = ''><img src='./assets/images/categories/category_".($index+1).".jpg'><h4>$categories[$index]</h4></a>";
				echo "<ul class='footer-ul'>";
				foreach ($subCategories[$index] as $subCat){
					echo "<li><a href=''>$subCat</a></li>";
				}
				echo "</ul>";
			echo "</article>";
		}?>
		<hr/>
	</section>
	

</main>