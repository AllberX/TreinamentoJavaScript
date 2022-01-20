'use strict';

/*Teclas associadas a emissão dos sons*/
const sons = {
    'A': 'boom.wav',
    'S': 'clap.wav',
    'D': 'hihat.wav',
    'F': 'kick.wav',
    'G': 'openhat.wav', 
    'H': 'ride.wav',
    'J': 'snare.wav',
    'K': 'tink.wav',
    'L': 'tom.wav'
}
/* FUNÇÃO PARA CRIAR DIVS*/
const criarDiv = (texto) => {
    const div = document.createElement('div');
    div.classList.add('key');
    div.textContent = texto;
    div.id = texto;
    document.getElementById('container').appendChild(div);
}
/* ARRAY das Teclas associadas a emissão dos sons*/
const exibir = (sons) => Object.keys(sons).forEach(criarDiv);
/* QUANDO NÃO TER RETURN E SÓ UMA LINHA, NÃO PRECISA USAR AS CHAVES*/

/*LETRA= EMITE O SOM REFRENTE A LETRA QUE RECEBEU - COMO ESTA ASSOCIADO LÁ EM CIMA*/
const tocarSom = (letra) => {
    const audio = new Audio(`./sounds/${sons[letra]}`); /*VARIAVEL DE TIPO AUDIO*/
    audio.play();
}
/*VARIAVEL QUE FAZ ADICIONAR O EFEITO DO CSS + AUDIO, A TECLA AUMENTA, ACENDE E EMITE O SOM*/
const adicionarEfeito = (letra) => document.getElementById(letra)
                                           .classList.toggle('active');

/*VARIAVEL QUE FAZ REMOVER O EFEITO DO CSS + AUDIO, A TECLA DIMINUI O TAMANHO, APAGA E FINALIZA O SOM*/
const removerEfeito = (letra) => {
    const div = document.getElementById(letra);
    const removeActive = () => div.classList.remove('active');
    div.addEventListener('transitionend',removeActive); /*TRANSIÇÃO ENTRE O FEITO DE ADICIONAR E REMOVER O CSS*/
};

const ativarDiv = (evento) => {

    const letra = evento.type == 'click' ? evento.target.id : evento.key.toUpperCase();

/*VARIAVEL DE TIPO BOOLEANA, SE TECLA DA LETRA CLICADA TIVER PROPRIEDADE, TOCA O SOM, SENÃO, NÃO VAI EMITIR SOM*/
    const letraPermitida = sons.hasOwnProperty(letra); 
    if (letraPermitida){
        adicionarEfeito(letra);
        tocarSom(letra);
        removerEfeito(letra);
    }
}

exibir(sons);
document.getElementById('container')/*CONTAINER QUE CHAMA A FUNÇÃO DO EVENTO CLICK*/

        .addEventListener('click', ativarDiv);  /*ATIVAR DIV = TOCAR SOM E DAR EFEITO*/
/*.addEventListener PASSA PRA FUNÇÃO O EVENTO QUE ACONTECEU
ATIVAR DIV = TOCAR SOM E DAR EFEITO*/

window.addEventListener('keyup',ativarDiv);