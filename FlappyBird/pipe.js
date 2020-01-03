var pipe = function(game){
    this.game = game;
    this.image = null;
    this.loaded = false;
    var self = this;

    this.x = 320;
    this.y = 100;

    this.init = function(){
        this.loadImage();
    }
    this.loadImage = function(){
        this.image = new Image();
        this.image.onload = function(){
            self.loaded = true;
            console.log('image loaded');
        }
        
        this.image.src = "img/pipe2.png";
    }
    this.update = function(){
        if(this.game.gameOver){
            return;
        }
        function TaoSoNgauNhien(min, max){
        return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        var a = TaoSoNgauNhien(1, 220);
        this.x-=4;
        if(this.x == -440){
            this.x = 100;
            this.y = a;
        }
    }
    this.draw = function(){
        if(self.loaded==false){
            return;
        }
        self.game.context.drawImage(this.image, this.x, this.y - 330 -100);
        self.game.context.drawImage(this.image, this.x, this.y);
    }
}