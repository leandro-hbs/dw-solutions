let bandeiras = [
{chave:'Brasil', valor:"http://flags.fmcdn.net/data/flags/w580/br.png"},
{chave:'Estados Unidos', valor:"https://flagpedia.net/data/flags/small/us.png"},
{chave:'Argentina', valor:"https://flagpedia.net/data/flags/small/ar.png"},
{chave:'Canada',valor:"https://flagpedia.net/data/flags/small/ca.png"},
{chave:'Alemanha',valor:"https://flagpedia.net/data/flags/small/de.png"},
{chave:'Italia',valor:"https://flagpedia.net/data/flags/small/it.png"},
{chave:'Japão',valor:"https://flagpedia.net/data/flags/small/jp.png"},
{chave:'México',valor:"https://flagpedia.net/data/flags/small/mx.png"},
{chave:'Portugal',valor:"https://flagpedia.net/data/flags/small/pt.png"},
{chave:'África do Sul',valor:"https://flagpedia.net/data/flags/small/za.png"}
];

let imagem = document.querySelector("#bandeira");
let acerto = document.querySelector("#acertos");
let tentativas = document.querySelector("#tentativas");
let score = 0;
let tryy = 0;
let nome;
let num;

function key(){
  let bandeira_atual;
  for (let i in bandeiras){
    bandeira_atual = bandeiras[i].valor;
    if (bandeira_atual == imagem.src){
      nome = bandeiras[i].chave;
    }
  }
}

function enviar(){
  key();
  let resposta = document.querySelector("#nome").value;
  console.log(resposta);
  console.log(nome);
  if (nome == resposta) {
    tryy = tryy + 1;
    score = score + 1;
    num = Math.floor((Math.random() * 10));
    nova_chave = bandeiras[num].chave;
    nova_bandeira = bandeiras[num].valor;
    imagem.src = nova_bandeira;
    acerto.textContent = `Acertos: ${score}`;
    tentativas.textContent = `Tentativas: ${tryy}`;
  } else {
    tryy = tryy + 1;
    tentativas.textContent = `Tentativas: ${tryy}`;
  }
}

function pular(){
    tryy = tryy + 1;
    let num = Math.floor((Math.random() * 10));
    nova_chave = bandeiras[num].chave;
    nova_bandeira = bandeiras[num].valor;
    imagem.src = nova_bandeira;
    tentativas.textContent = `Tentativas: ${tryy}`;
}