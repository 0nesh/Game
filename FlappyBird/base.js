var base = function(game){
    this.game = game;
    this.image = null;
    this.loaded = false;
    var self = this;

    this.x = 0;

    this.init = function(){
        this.loadImage();
    }
    this.loadImage = function(){
        this.image = new Image();
        this.image.onload = function(){
            self.loaded = true;
            console.log('image loaded');
        }
        
        this.image.src = "img/base.png";
    }
    this.update = function(){
        if(this.game.gameOver){
            return;
        }
        this.x-=2;
        if(this.x == - 336){
            this.x = 0;
        }
    }
    this.draw = function(){
        if(self.loaded==false){
            return;
        }
        self.game.context.drawImage(this.image, this.x, this.game.height-130);
        self.game.context.drawImage(this.image, this.x+440, this.game.height-130);
    }
}