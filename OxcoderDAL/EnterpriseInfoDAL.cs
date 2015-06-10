using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

/// <summary>
/// 搜索 的摘要说明
/// 此类是 DAL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
///
namespace OxcoderDAL
{
    public class EnterpriseInfoDAL : OxcoderIDAL.EnterpriseInfoIDAL
    {
        public DataSet EnterpriceInfo(string id)
        {
            String sql = "select * from [Enterprice] where Enterprice_ID=@id";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.VarChar,50),
                                };
            par[0].Value = id;
            return Common.DbHelperSQL.Query(sql.ToString(), par);
        }
    }
}
