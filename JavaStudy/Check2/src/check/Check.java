package check;

import constants.Constants;
public class Check {
   private String firstName = "岡田";
   private String lastName = "直樹";    

   public void printName() {
       String name = firstName + lastName;
       System.out.println("printNameメソッド →"+ name);       
   }


public static void main(String args[]){
    Check check = new Check();
    check.printName();
    Pet pet = new Pet(Constants.CHECK_CLASS_JAVA,Constants.CHECK_CLASS_HOGE);
    RobotPet robotPet = new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);   
     pet.introduce();    
     robotPet.introduce();
    
    
    
    
    
    
}}

    