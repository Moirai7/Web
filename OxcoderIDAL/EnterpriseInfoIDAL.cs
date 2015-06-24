using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;
using System.Data;
using Model;
/// <summary>
/// Users 的摘要说明
/// 此类是 BL User
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 
namespace OxcoderIDAL
{
    public interface EnterpriseInfoIDAL
    {
        DataSet EnterpriceInfo(string id);
        int CheckEnterpriceEmail(string email);
        int RegisterEnterprice(Model.Enterprice enterprice);
        int SendEnterpriceEmail(string email, string activeCode);
        SqlDataReader ActiveEnterpriceAccount(string email);
        int ChangeEnterpriceState(string email);
        Enterprice GetEnterpriceID(string email);
        Enterprice EnterpriceLogin(string email);
        int SetPassword(string email, string password);
        int UpdateEnterpriceInfo(string fullName, string enterpricePhone,string email);
        int UpdateEnterpriceInfo2(Enterprice enterprice);
    }
}
