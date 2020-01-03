class brick {
	constructor(game) {
		this.game = game;
		this.dots = [];
		this.data = [];
		this.col = 0;
		this.row = 0;

		//create data
		this.createdata();
		//create dots
		this.createDots();
	}

	createdata() {
		let baseData = [
			[
				[x,x,x,x]
			],
			[
				[x,x],
				[x,x]
			],
			[
				[x,x,x],
				[_,x,_]
			],
			[
				[_,x,x],
				[x,x,_]
			],
			[
				[x,x,_],
				[_,x,x]
			],
			[
				[x,x,x],
				[x,_,_]
			],
			[
				[x,x,x],
				[_,_,x]
			]
		];
		let r = Math.floor(Math.random() * 6);
		this.data = baseData[r];

	}
	createDots() {
		this.dots = [];
        for(let row = 0; row < this.data.length; row++){
            for(let col = 0; col < this.data[0].length; col++){
                if(this.data[row][col]==x){
                    let newDot = new dot(this.game, row + this.row, col + this.col);
                    this.dots.push(newDot);
                }
            }
        }
	}

	canMoveRight() {
		let thisBrickCanMoveRight = true;
		this.dots.forEach( (dot) =>{
			if( ! dot.canMoveright()){
				thisBrickCanMoveRight = false;
			}
		});
		return thisBrickCanMoveRight;
	}

	moveRight() {
		if(this.canMoveRight()){
			this.col++;
			this.dots.forEach( (dot) =>{
				dot.moveRight();
			});
		}
	}

	canMoveLeft() {
		let thisBrickCanMoveLeft = true;
		this.dots.forEach( (dot) =>{
			if( ! dot.canMoveleft()){
				thisBrickCanMoveLeft = false;
			}
		});
		return thisBrickCanMoveLeft;
	}

	moveLeft() {
		if(this.canMoveLeft()){
			this.col--;
			this.dots.forEach( (dot) =>{
				dot.moveleft();
			});
		}
	}

	canFall() {
		let thisBrickCanFall = true;
		this.dots.forEach( (dot) =>{
			if( ! dot.canFall()){
				thisBrickCanFall = false;				
			}
		});
		return thisBrickCanFall;
	}

	fall() {
		if(this.canFall()){
			this.row++;
			this.dots.forEach( (dot) =>{
				dot.fall();
			});
		}
		else {
			this.game.createNewBrick();
			this.appendToBoard();
			this.game.board.checkFullRow();
		}
	}

	rotate() {
		let newData = [];

		for(let col = 0; col < this.data[0].length; col++){
			let newRow = [];
			for(let row = this.data.length - 1; row >=0; row--){
				newRow.push(this.data[row][col]);
			}
			newData.push(newRow);
		}
		//check new data valid
		let newDataValid = true;
		for(let newRow = 0; newRow < newData.length; newRow++){
			for(let newCol = 0; newCol < newData[0].length; newCol++){
				if( (newData[newRow][newCol] == x) && !this.game.board.isEmptyCell(newRow, newCol))
				{
					newDataValid = false;
				}
			}
		}

		if(newDataValid){
			this.data = newData;
        	this.createDots();
		}

		//for(let row = 0; row < this.data.length; row++){
		//	let newRow = [];
          //  for(let col = this.data[0].length - 1; col >= 0; col--){
            //    newRow.push(this.data[row][col]);
          //  }
            //newData.push(newRow);
        //}
        
	}

	appendToBoard() {
		this.dots.forEach( (dot) => {
			this.game.board.data[dot.row][dot.col] = x;
		});
	}

	draw() {
		this.dots.forEach( (dot) => dot.draw() );
	}
}