using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;


/// <summary>
/// 搜索 的摘要说明
/// 此类是 BL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
/// 
namespace OxcoderIBL
{
    public interface TestInfoIBL
    {
        int InsertATest(string challengeid,string userid);
        int DeleteATest(string id);
        DataSet GetTestDetail(String id);
       // string[] GetUserAbility(string userID);
    }
}
