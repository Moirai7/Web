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
/// 此类事 DAL User的接口类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 

namespace OxcoderIDAL
{
    public interface UserIDAL
    {
       // DataSet DSUser(int pageindex, int pagesize, String table);
        int Count();
     //   int DeleteUser(Model.User user);
        SqlDataReader UserInfo(string userID);
        int CheckUserEmail(string email);
        int RegisterUser(Model.User user);
        string ActiveUserAccount(string email);
        int ChangeUserState(string email);
        SqlDataReader GetUserID(string email);
        int SendUserEmail(string email, string activeCode);
        User UserLogin(string email);
        int SetPassword(string email, string password);
       // int Insert(Model.User user);
       // DataSet AllUserInfo();
        int UpdateUserInfo(User user);
    }
}
