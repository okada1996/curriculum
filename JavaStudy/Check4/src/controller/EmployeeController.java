package controller;
 
/**
 * 社員情報管理コントローラー
 */
 
import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import bean.EmployeeBean;
import  service.EmployeeService;

public class EmployeeController extends HttpServlet {
 public void doPost(HttpServletRequest request, HttpServletResponse response)
 throws ServletException, IOException {
 
 try {
  // 問① index.htmlから送信されたIDとPassWordの値を取得できるように修正しましょう。　ユーザーからの入力情報をパラメーターとして受け取る
 String id = request.getParameter("id");
 String password = request.getParameter("pass");
 
 /*
 * IDとPassWordと元に、社員情報を検索する関数の呼び出し、結果をJSPに渡す処理
 * ※ EmployeeBeanとEmployeeServiceをimportするのを忘れないでください。
 */
 
  // 問② EmployeeServiceクラスをインスタンス化する。  　社員情報の照会をするためにserchメソッドを呼び出す
 EmployeeService employeeService = new EmployeeService();
  // 問③ EmployeeBeanに、EmployeeServiceよりsearch関数を呼び出し、返り値を格納する。
 EmployeeBean employeeBean = new EmployeeBean();
  employeeBean = employeeService.search(id, password);


  // 問④ nullの部分に適切な引数をセットする。jspに結果を渡す　■リクエストスコープに保存request.setAttribute("属性名",インスタンス)
  
 request.setAttribute("EmployeeBean", employeeBean);
 
 } catch (Exception e) {
 e.printStackTrace();
 } finally {
 ServletContext context = this.getServletContext();
 //渡すJSPファイルを指定
 RequestDispatcher dispatcher = context.getRequestDispatcher("/index.jsp");
 dispatcher.forward(request, response);
 }
 }
}