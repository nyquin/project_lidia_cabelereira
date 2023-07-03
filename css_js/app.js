let count = 1;

let radio1 = document.getElementById("radio1")
let radio2 = document.getElementById("radio2")
let radio3 = document.getElementById("radio3")
let radio4 = document.getElementById("radio4")
 
let depoimento1 = document.getElementById("depoimento1") 

let intervalo = setInterval( function() { // setInteral (Funcao, ms)
	proximaImagem();
	proximoDepoimento();
	manualDepoimento();

}, 3000)

function proximaImagem() {
	count++;

	if(count > 4){
		count = 1;
	}

	document.getElementById("radio"+count).checked = true;
}


function proximoDepoimento() {
	if(radio2.checked == true) {
		depoimento1.innerHTML = '<p>A Lidia é demais!!</p><span>Maria do Carmo, 74 anos.</span>'
	} else if (radio3.checked == true) {
		depoimento1.innerHTML = '<p>Me senti muito especial e Querida!!</p><span>Michelle Brito, 40 anos.</span>'
	} else if (radio4.checked == true) {
		depoimento1.innerHTML = '<p>Tudo foi muito bom!!!</p><span>Ana Paula, 45 anos.<span>'
	} else if (radio1.checked == true) {
		depoimento1.innerHTML = '<p>Amei os cuidados que a Lidia teve comigo, me senti muito especial. Fora que a produção de tudo foi espetacular, tudo com um capricho enorme com o meu cabelo.</p><span>Barbara de Oliveira, 19 anos.</span>'
	}

}

function manualDepoimento() {
radio1.addEventListener("click", () => {
	intervalo();
	depoimento1.innerHTML = '<p>Amei os cuidados que a Lidia teve comigo, me senti muito especial. Fora que a produção de tudo foi espetacular, tudo com um capricho enorme com o meu cabelo.</p><span>Barbara de Oliveira, 19 anos.</span>'
})

radio2.addEventListener("click", () => {
	intervalo();
	depoimento1.innerHTML = '<p>A Lidia é demais!!</p><span>Maria do Carmo, 74 anos.</span>'
})

radio3.addEventListener("click", () => {
	intervalo();
	depoimento1.innerHTML = '<p>Me senti muito especial e Querida!!</p><span>Michelle Brito, 40 anos.</span>'
})

radio4.addEventListener("click", () => {
	intervalo();
	depoimento1.innerHTML = '<p>Tudo foi muito bom!!!</p><span>Ana Paula, 45 anos.<span>'
})

}

function menuShow() {
	let menuMobile = document.querySelector('.mobile-menu');
	if(menuMobile.classList.contains('open')) {
		menuMobile.classList.remove('open')
	} else {
		menuMobile.classList.add('open')
	}
}