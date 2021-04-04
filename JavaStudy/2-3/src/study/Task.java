package study;

// ① TaskクラスにCalculatorクラスを継承させなさい。
    public class Task extends Calculator {
    /**
     * タスクの実行
     */
    public void doTask() {

        // ② Calculator.javaのすべてのオーバーロードメソッド「plus」に適当な引数を与え、下記画像のよう出力されるようコーディングしなさい。
        // 尚、「どのクラスから呼び出しているか」を明確にするため、plus()には呼び出し元のキーワードを付与すること。
       int Calculator1 = plus(10);
       System.out.println("plusメソッドの引数が一つの場合："+ Calculator1);
       
       int Calculator2 = plus(10,20);
       System.out.println("plusメソッドの引数が二つの場合："+ Calculator2);
       
       int Calculator3 = plus(10,20,30);
       System.out.println("plusメソッドの引数が二つの場合："+ Calculator3);
       
            
        }    
                        
            
    }
//問題文のこの意味がよくわからなかったです。「尚、「どのクラスから呼び出しているか」を明確にするため、plus()には呼び出し元のキーワードを付与すること。」
//    Calculatorクラスから呼び出していることがわかるように値を入れる変数の名前をCalculator１、２、３、としたのですがこちらの認識で合っていますでしょうか？
//    （質問コメント）