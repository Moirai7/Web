using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

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
        DataSet DSUser(int pageindex, int pagesize, String table);
        int Count();
        int DeleteUser(Model.User user);
        SqlDataReader UserInfo(Model.User user);
        int Insert(Model.User user);
        DataSet AllUserInfo();
        int Update(Model.User user);
    }
}
