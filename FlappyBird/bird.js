var bird = function(game){
    this.game = game;
    this.image = [];
    this.img1loaded = false;
    this.img2loaded = false;

    this.currentImage = null;
    this.currentFrame = 0;
    this.currentImageIndex = 0;
    this.x = 70;
    this.y = 0;
    this.speedY = 0;
    this.acceleration = 2;
    this.direction = 'down';

    self = this;

    this.init = function(){
        this.loadImage();
    }

    this.loadImage = function(){
        var img1 = new Image();
        var img2 = new Image();
        img1.onload = function(){
            self.img1loaded = true;
            self.currentImage = img1;
            self.image.push(img1);
        }
        img2.onload = function(){
            self.img2loaded = true;
            self.currentImage = img2;
            self.image.push(img2);
        }

        //load all images
        img1.src = "img/bird1.png";
        img2.src = "img/bird2.png";
 
    }
    this.update = function(){
        if(!self.img1loaded || !self.img2loaded){
            return;
        }

        self.currentFrame++;

        if(self.currentFrame % 6 == 0){
            self.changeImage();
        }  

        //forget all stuff above
        if(this.y <= 600){
            if(this.direction=='down'){
                this.speedY += this.acceleration;           
            }
            else{
                this.speedY -= this.acceleration;
            }  
            this.y += this.speedY; 
        }



        if(this.y > 480){
            this.y = 480;
        }

        //check gameover
        if(this.y >=475){
            this.game.gameOver = true;
        }
        
        //check hit
        this.ckeckHitPipe();

    }
    this.ckeckHitPipe = function(){
        console.log("y bird:"+Math.floor(this.y));
        console.log("y pipe:"+Math.floor(this.game.pipe.y - 230));
        if(
            (
                (this.x + 30 > this.game.pipe.x + 320)
            )&&
            (
                (this.y < this.game.pipe.y - 320)
                ||(this.y - 147 > this.game.pipe.y)
            )
        ) 
        {
            this.game.gameOver = true;
        }
    }

    

    this.flap = function(){
        if(this.game.gameOver){
            return;
        }
        this.speedY = -18;
    }

    this.changeImage = function(){
        if(this.game.gameOver){
            return;
        }
        if(this.currentImageIndex == 1){
            this.currentImageIndex = 0;
        } else{
            this.currentImageIndex++;
        }    
        this.currentImage = this.image[this.currentImageIndex];
    }

    this.draw = function(){
        if(this.img1loaded && this.img2loaded){
            self.game.context.drawImage(self.currentImage, this.x, this.y);
        }
    }
}