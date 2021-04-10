package check;

import constants.Constants;
public class Check {
   private static String firstName = "岡";
   private static String lastName = "直樹";    

   public static void printName() {
       
       System.out.println("printNameメソッド →"+ firstName + lastName);
   }


public static void main(String args[]){
    printName();
    Pet pet = new Pet(Constants.CHECK_CLASS_JAVA,Constants.CHECK_CLASS_HOGE);
    RobotPet robotPet = new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);   
     pet.introduce();    
     robotPet.introduce();
    
    
    
    
    
    
}}

    