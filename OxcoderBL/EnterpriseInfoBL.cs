using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;
using System.Data;
/// <summary>
/// Users 的摘要说明
/// 此类是 BL User
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 

namespace OxcoderBL
{
    public class EnterpriseInfoBL:OxcoderIBL.EnterpriseInfoIBL
    {
        public DataSet EnterpriceInfo(string id)
        {
            OxcoderIDAL.EnterpriseInfoIDAL en = new OxcoderDAL.EnterpriseInfoDAL();
            return en.EnterpriceInfo(id);
        }
    }
}
