/**
 * バブルソート
 * チェックテスト-Java1章
 *
 */
public class Check{
  public static void main(String[] args){
      /*
      * 問1
      * int型の配列dataを作成し、値を3,1,2,7,5で初期化しなさい
      */

      int[]data = {3, 1, 2, 7, 5};/* (問1解答) */

      /*
      * 問2
      * 以下のfor文を完成させなさい
      */
      for(int i = 0; i < 5/* (問2解答) */; i++){
          System.out.print(data[i] + " ");
      }
      System.out.println();
      /* バブルソート,最後の要素を除いて全ての要素を並び替え(追記コメント) */
      for (int i = 0; i < data.length - 1/* (問2解答) */; i++) {
        // 下から上に順番に大きさを比較(追記コメント)
          for (int j = data.length - 1/* (問2解答) */; j > i; j--) {
              /*
              * 問3
              * 以下、配列の添字を入れてソートを完成させなさい
              // */
              // 下の方が大きいときは互いに順番を入れ替え(追記コメント)
              if(data[j - 1/* (問3解答) */] > data[j/* (問3解答) */]){
                int box = data[j - 1/* (問3解答) */];
                data[j - 1/* (問3解答) */] = data[j /* (問3解答) */];
                data[j/* (問3解答) */] = box;
              }
          }
      }
      for(int i = 0; i < data.length; i++){
          System.out.print(data[i] + " ");
      }
      System.out.println();/* (追記)これがないと改行が変になるのでは？要確認 */
  }
}