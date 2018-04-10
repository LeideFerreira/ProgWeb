var jogo = {
    papel: 1,
    pedra: 2,
    tesoura: 3
    
}

function mao_comp(computador){
    if(computador == jogo.papel){
        console.log("Computador jogou papel",computador);
    } 
    if(computador == jogo.pedra){
        console.log("Computador jogou pedra",computador);
    }
    if(computador == jogo.tesoura){
        console.log("Computador jogou tesoura",computador);
    }
}

function mao_jog(jogador){
    if(jogador == jogo.papel){
        console.log("Você jogou papel",jogador);
    } 
    if(jogador == jogo.pedra){
        console.log("Você jogou pedra",jogador);
    }
    if(jogador == jogo.tesoura){
        console.log("Você jogou tesoura",jogador);
    }
}

var jogada = true
var pontuacao = 0

while(jogada == true){

    console.log('Escolha sua jogada \n1 - papel \n2 - pedra \n3 - tesoura');
    var jogador = parseInt(prompt('Sua jogada'))
    mao_jog(jogador);

    if(isNaN(jogador) || (jogador < 1 || jogador > 3)){
        console.log('Voce perdeu');
        jogada = false;
    }else {
        var computador = Math.floor(Math.random() * (3 - 1 + 1) + 1); //Computadors
      
        mao_comp(computador);
        if(computador === jogador){
            console.log("Empatou");
        }
        if(computador == jogo.papel && jogador == jogo.pedra){
            console.log("Você perdeu! A sua pontuação foi",pontuacao);
            jogada = false;
            pontuacao = 0;
        }
        if(computador == jogo.pedra && jogador == jogo.tesoura){
            console.log("Você perdeu! A sua pontuação foi",pontuacao);
            jogada = false;
            pontuacao = 0;
        }
        if(computador == jogo.tesoura && jogador == jogo.papel){
            console.log("Você perdeu! A sua pontuação foi",pontuacao);
            jogada = false;
            pontuacao = 0;            
        }
        if(jogador == jogo.papel && computador == jogo.pedra){
            console.log("Você Ganhou!");
            pontuacao++;
        }
        if(jogador == jogo.pedra && computador == jogo.tesoura){
            console.log("Você Ganhou");
            pontuacao++;
        }
        if(jogador == jogo.tesoura && computador == jogo.papel){
            console.log("Você Ganhou");
            pontuacao++;      
        }
    } 
}
