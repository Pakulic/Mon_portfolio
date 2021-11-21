let button =document.querySelector('#envoyer');
let inputmail =document.querySelector('#mail');
let mailregExp=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/
let message =document.querySelector('#messageerreur');


button.addEventListener('click', (e) => {
	if(mailregExp.test(inputmail.value)){
    message.textContent="";
  }else{
    message.textContent="Votre adresse mail n'est pas valide";
  }
});

