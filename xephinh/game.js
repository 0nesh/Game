class game {
    constructor(){
        this.canvas = null;
        this.context = null;
        this.init();
    }

    init() {
        this.canvas = document.getElementById("canvas");
        this.context = this.canvas.getContext('2d');
        this.canvas.height = GAME_HEIGHT;
        this.canvas.width = GAME_WIDTH;
        //document.body.appendChild(this.canvas);

        //create the board
        this.board = new board(this);

        //get keyboard
        this.listenkeyboard();

        //create the brick
        this.brick = new brick(this);

        //start the game
        this.startGame();

        this.loop();

    }

    listenkeyboard() {
        document.addEventListener('keydown', (event) => {
            //console.log(event);
            switch(event.code){
                case 'ArrowDown': this.brick.fall(); break;
                case 'ArrowLeft': this.brick.moveLeft(); break;
                case 'ArrowRight': this.brick.moveRight(); break;
                case 'ArrowUp': this.brick.rotate(); break;
            }
        });
    }

    startGame() {
        //console.log(NUM_COLS-1);
        setInterval( () => {
            this.brick.fall();
        },500);
    }

    createNewBrick() {
        this.brick = new brick(this);
    }

    loop() {
        console.log('loop');
        this.update();
        this.draw();
        setTimeout(() => this.loop(), 30);

    }
 
    update() {
        if(this.brick.canFall()&&this.brick.row==20){
            this.setTimeout(() => this.loop(), 30);
        }
    }

    clearScreen() {
        this.context.fillStyle = "#F0F8FF";
        this.context.fillRect(0, 0, GAME_WIDTH, GAME_HEIGHT);
    }
    draw() {
        this.clearScreen();
        this.board.draw();
        this.brick.draw();
    } 
}

//var g = new game();