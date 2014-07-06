function openGame(){
    console.log('Global function openGame called with arguments:', arguments);
};

Convertonet.addListeners('game-wrapper', 'click', function(mouseEvent){
    var dataDiv = this,
        game = dataDiv.dataset;
   
   if(window.openGame){
       window.openGame(
            game['gameName'],
            game['gameCode'],
            game['machineId'],
            game['denominations'],
            game['hands']
        );
   }
});