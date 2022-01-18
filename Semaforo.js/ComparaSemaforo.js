/* CÓDIGO COMENTADO É O QUE FIZ DURANTE A VIDEO AULA, E O CODIGO ORIGINAL ABAIXO DO COMENTADO
É O CÓDIGO OFICIAL. ONDE COLOQUEI O SIMBOLO "*" ASTERISCO É ONDE IDENTIFIQUEI MEUS ERROS COMPARADO
AO CODIGO ORIGINAL DISPONIBILIZADO PELO PROFESSOR NO GITHUB */


// const img = document.getElementById ('img');
   const img = document.getElementById( 'img' ); //* ESPAÇAMENTO MAIOR NO PARENTESE*


// const buttons = document.getElementById ('buttons');
   const buttons = document.getElementById( 'buttons' ); //* ESPAÇAMENTO MAIOR NO PARENTESE*


// let colorIndex = 0;
   let colorIndex = 0;

// let intervalid = null;
   let intervalId = null;
   
//   const trafficLight = (event) => {
     const trafficLight = ( event ) => { //* ESPAÇAMENTO MAIOR NO PARENTESE*

//   stopAutomatic();
     stopAutomatic();

//   turnOn[event.target.id]();
//   }
     turnOn[event.target.id]();
     }
    
// const nextIndex = () => colorIndex = colorIndex < 2 ? ++colorIndex : 0;
   const nextIndex = () => colorIndex = colorIndex < 2 ? ++colorIndex : 0;

// const changecolor = () => {
   const changeColor = () => {

//    const colors = ['red','yellow','green']
      const colors = ['red','yellow','green']

//    const colors = [colorIndex];
      const color = colors[ colorIndex ]; //*ESSE É O CORRETO, ACIMA NÃO DECLAREI COLORS ANTES DO COLCHETE*

//    turnOn[color]();
      turnOn[color]();

    //    colorIndex++;   ***DUPLICADO NO MEU CÓDIGO, NÃO TEM NO ORIGINAL ESSE COLORINDEX, LINHA A MAIS E SOBRANDO NO MEU

//    nextIndex();
//  }
      nextIndex();
    } 
   
//  const stopAutomatic () => {
    const stopAutomatic = () => { //* INVERTI O PARENTE ACIMA E O SINAL DE ATRIBUIÃO*

//    clearInterval ( intervalid);
//   } 
      clearInterval ( intervalId ); //* ESPAÇAMENTO MAIOR NO PARENTESE*
     }


// const turnOn = {
   const turnOn = {

//    'red': () => img.src = './img/vermelho.png',
      'red': () => img.src = './img/vermelho.png',

//    'yellow': () => img.src = './amarelo.png',     //* NÃO COLOQUEI 'IMG' ANTES DA /amarelo*
      'yellow': () => img.src = './img/amarelo.png',

//    'green' : () => img.src = './verde.png',       //* NÃO COLOQUEI 'IMG' ANTES DA /verde*
      'green':  () => img.src = './img/verde.png',

//    'automatic' : () => intervalid = setInterval(changecolor, 1000); //* NÃO precisa colocar ponto e virgula após parentese*
//  } 
       'automatic': () => intervalId = setInterval( changeColor, 1000 )
    }

//  buttons.addEventListener('click', trafficLight);
    buttons.addEventListener('click', trafficLight );
