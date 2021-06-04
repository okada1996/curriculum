//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
for (let num = 0; num < numbers.length; num++) {
    if (num % 2 ===0 ) {
      isEven();
    }

function isEven() {
    console.log(num + 'は偶数です');
}}
  
//問2
class Car {

    constructor(gass,num) {
        this.gass = gass;
        this.num = num;
    }
  
    getNumGas() {
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.num}です`);
    }
  }
  
//   let car = new Car(20.5, 1234);
//   car.getNumGas();