class Taiyaki {

  constructor(guzai) {
      this.guzai = guzai;
  }

  nakami() {
      console.log(`中身は${this.guzai}です`);
  }
}

let taiyaki1 = new Taiyaki('あんこ');
taiyaki1.nakami();
let taiyaki2 = new Taiyaki('クリーム');
taiyaki2.nakami();
let taiyaki3 = new Taiyaki( 'チーズ');
taiyaki3.nakami();
