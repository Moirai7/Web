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
namespace OxcoderIBL
{
    public interface EnterpriseInfoIBL
    {
        DataSet EnterpriceInfo(string id);
        int RegisterEnterprice(string email, string password);
        Enterprice GetEnterpriceID(string email);
        int SendEnterpriceEmail(string emailTo);
        Boolean ActiveEnterpriceAccount(string email, string activeCode);
        Boolean EnterpriceLogin(String email, String password);
        int SetPassword(string email, string password);
        int UpdateEnterpriceInfo(string fullName, string enterpricePhone, string email);
        int UpdateEnterpriceInfo0(Enterprice enterprice);
        int UpdateEnterpriceInfo1(string position,string email);

    }
}
