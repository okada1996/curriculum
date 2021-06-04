class Taiyaki {

  constructor(guzai1,guzai2,guzai3) {
      this.guzai1 = guzai1;
      this.guzai2 = guzai2;
      this.guzai3 = guzai3;
  }

  nakami() {
      console.log(`中身は${this.guzai1}です`);
      console.log(`中身は${this.guzai2}です`);
      console.log(`中身は${this.guzai3}です`);
  }
}

let taiyaki = new Taiyaki('あんこ', 'クリーム', 'チーズ');
taiyaki.nakami();