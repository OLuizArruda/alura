let imagemDaEstrada;
let imagemDoAtor;
let imagemDoCarro1;

//variaveis do carro
let xCarro1 = 600;

//ator
let yAtor = 366;
let xAtor = 100;

function preload(){
  imagemDaEstrada = loadImage("imagens/estrada.png")
  imagemDoAtor = loadImage("imagens/ator-1.png")
  imagemDoCarro1 = loadImage("imagens/carro-1.png")
}


function setup() {
  createCanvas(600, 400);
}

function draw() {
  background(imagemDaEstrada);
  mostraAtor();
  mostraCarro();
  movimentaCarro1();
  movimentaAtor();
}

function mostraAtor(){
  image(imagemDoAtor, xAtor, yAtor, 30, 30);
}

function mostraCarro(){
  image(imagemDoCarro1, xCarro1,40,50,40);
}

function movimentaCarro1(){
  xCarro1 -= 4;
}

function movimentaAtor(){
  if (keyIsDown(UP_ARROW)){
    yAtor -= 3;
  }
  if (keyIsDown(DOWN_ARROW)){
    yAtor += 3;
  }
  if (keyIsDown(LEFT_ARROW)){
    xAtor -= 3;
  }
  
  if (keyIsDown(RIGHT_ARROW)){
    xAtor += 3;
  }
}