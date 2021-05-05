package check;
//constantsパッケージの中のConstantsクラスをimport
import constants.Constants;
public class Check {
    //同じクラスからのアクセス前提なのでアクセス修飾子はprivate
   private static String firstName = "岡田";
   private static String lastName = "直樹";    

   //パブリック設定かつ静的で戻り値がない、printNameメソッドの作成
   public static void printName(String first_Name,String last_Name) {
       
       System.out.println("printNameメソッド →"+ first_Name + last_Name);
   }


public static void main(String args[]){
    //printNameメソッドの呼び出し
    printName(firstName, lastName);
    
    //Petクラスのインスタンス化を作成し変数petに入れる
    Pet pet = new Pet(Constants.CHECK_CLASS_JAVA,Constants.CHECK_CLASS_HOGE);
    //RobotPetクラスのインスタンス化を作成し変数robotPetに入れる
    RobotPet robotPet = new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);
    //introduceメソッドの呼び出し
     pet.introduce();    
     robotPet.introduce();
    
    
    
    
    
    
}}

    