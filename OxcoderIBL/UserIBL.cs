using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using Model;
/// <summary>
/// Users 的摘要说明
/// 此类是BL User的接口类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 

namespace OxcoderIBL
{
    public interface UserIBL
    {
     //   DataSet DSUser(int pageindex, int pagesize, String table);
        int Count();
       // int DeleteUser(Model.User user);
        User UserInfo(string userID);
       // int Insert(Model.User user);
        //DataSet AllUserInfo();
      //  int Update(Model.User user);
        int RegisterUser(string email, string password);
        User GetUserID(string email);
        int SendUserEmail(string emailTo);
        Boolean ActiveUserAccount(string email, string activeCode);
        Boolean UserLogin(string email, string password);
        int SendResetEmail(string email);
        int SetPassword(string email, string newPwd);
        int UpdateUserInfo(User user);
        int UpdateUserLevel(string level, string price, string userID);
        double[] GetUserAbility(string userID);
       // int UpdateUserLevel(string level,string price,string userID);

    }
}
