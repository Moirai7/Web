using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;


/// <summary>
/// 搜索 的摘要说明
/// 此类是 DAL 的接口类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
/// 
namespace OxcoderIDAL
{
    public interface TestInfoIDAL
    {
        int InsertATest(Model.Test test);
        int DeleteATest(string id);
        DataSet GetTestDetail(String id);
        string[] GetUserAbility(string userID);
    }
}
