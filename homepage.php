<nav id="menu">
    <ul>
        <li><a href="?page=cars"><img class="icons" src="./assets/images/car-icon.png"><span>Автомобили</span></a></li>
        <li><a href=""><img class="icons" src="./assets/images/instruments.png"><span>Машини и инструменти</span></a></li>
        <li><a href=""><img class="icons" src="./assets/images/electro-icon.png"><span>Електроника</span></a></li>

    </ul>
    <ul>

        <li><a href="?page=animals"><img class="icons" src="./assets/images/Animals_icon.png"><span>Животни</span></a></li>
        <li><a href=""><img class="icons" src="./assets/images/garden-icon.png"><span>Дом и градина</span></a></li>
        <li><a href=""><img class="icons" src="./assets/images/home-icon.png"><span>Недвижими имоти</span></a></li>
    </ul>
    <ul>
        <li><a href="?page=moda"><img class="icons" src="./assets/images/dress-icon.png"><span>Мода</span></a></li>
        <li><a href=""><img class="icons" src="./assets/images/baby-icon.png"><span>За бебето и детето</span></a></li>
        <li><a href=""><img class="icons" src="./assets/images/sport-icon.png"><span>Спорт, хоби, книги</span></a></li>

    </ul>
</nav>

<div id="main">
 <?php 
	include_once 'proba.php';
	foreach($obqvaArr as $key=>$value){
		if($key ===' '){
			echo "<img $value ";
			continue;
		}
		echo "<p>".$key." ".$value."</p>";
}
?>
</div>
