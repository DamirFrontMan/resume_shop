// function openMenu()
//  	{
//   		 var bar = document.getElementById("sidebar");
//   		 bar.classList.toggle('active');
//  	}

// function mousePad(){
// 	alert('Веден');
// }

// while (document.getElementById("lg") == 'mouseover') {
// 	var text = document.getElementById("lg");
// 	elem1.style.visibility = 'visible';
	
// }

function openMenu(){
	var elem1 = document.getElementById("sidebar");
	elem1.style.top = '0px';
	elem1.style.opacity = '1';
	elem1.style.transition = 'opacity 0.3s ease-out';
}

function closeMenu(){
	var elem1 = document.getElementById("sidebar");
	elem1.style.top = '-1000px';
	elem1.style.opacity = '0';
}
//Создаем переменные записываем объект
var tgg = document.getElementById("tgg");
var bar = document.getElementById("sidebar");

//Применяем к объекту функцию в случае действия
tgg.addEventListener("mouseenter", openMenu);
tgg.addEventListener("mouseleave", closeMenu);
bar.addEventListener("mouseenter", openMenu);
bar.addEventListener("mouseleave", closeMenu);

window.addEventListener('scroll', function() {
	if (pageYOffset > 720) {
		document.getElementById("scrollBtn").style.opacity = "1";
		document.getElementById("scrollBtn").style.transition = 'all 0.3s ease-out';
		document.getElementById("scrollBtn").style.visibility = 'visible';
	}
	else if (pageYOffset < 720) {
		document.getElementById("scrollBtn").style.opacity = "0";
		document.getElementById("scrollBtn").style.visibility = 'hidden';
	}
});

window.addEventListener('scroll', function() {
	if (pageYOffset >= 100) {
		document.getElementById("fon_Film").style.height = "955px";
	}
	else if (pageYOffset < 100) {
		document.getElementById("fon_Film").style.height = "600px";
	}
});

function pos() {
	console.log(pageYOffset);
}

function goTop() {
	document.documentElement.scrollTop = 0;
}

document.getElementById("scrollBtn").addEventListener("click", goTop);

var hui1 = document.querySelector('.Modal'),
	modalka = document.querySelector('.ModalWindow')
	knopka = document.querySelector('.BtnBuy');
	knopka.addEventListener('click', function(){
			hui1.classList.add('active')
	})
	hui1.addEventListener('click', function(e){
		if(e.target == hui1){
			hui1.classList.remove('active')
			}
	})