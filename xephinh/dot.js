class dot {
    constructor(game, row, col) {
        this.game = game;
        this.size = 20;
        this.row = row;
        this.col = col;
    }

    // start Fall
    hitBottom() {
        return this.row == NUM_ROWS - 1;
    }

    canFall() {
        if(this.hitBottom()) return false;
        if( ! this.game.board.isEmptyCell(this.row + 1,this.col)){
            return false;
        }           
        return true;
    }

    fall() {
        if(this.canFall()){  
            this.row++;
        }
    }
    //end Fall

    //start move left
    hitleft() {
        return this.col == 0;
    }

    canMoveleft() {
        if(this.hitleft()) return false;
        if( ! this.game.board.isEmptyCell(this.row, this.col-1)){   
            return false;
        }           
        return true;
    }
    moveleft() {
        if(this.canMoveleft()){
            this.col--;
        }
    }
    //end move left

    //start move right
    hitright() {
        return this.col == NUM_COLS - 1;
    }

    canMoveright() {
        if(this.hitright()) return false;
        if( ! this.game.board.isEmptyCell(this.row, this.col + 1)){   
            return false;
        }           
        return true;
    }
    moveRight() {
        if(this.canMoveright()){
            this.col++;
        }
    }
    //end move right

    update() {

    }

    draw() {
        let x = this.col * this.size;
        let y = this.row * this.size;
        this.game.context.fillStyle = "#FF0000";
        this.game.context.fillRect(x+1, y+1, this.size-2, this.size-2);
    }
}