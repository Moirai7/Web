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
namespace OxcoderDAL
{
    public class QuizInfoDAL : OxcoderIDAL.QuizInfoIDAL
    {
        public string QuizName(string id)
        {
            String sql = "select Quiz_Name from [Quiz] where Quiz_ID=@id";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.VarChar,50),
                                };
            par[0].Value = id;
            DataSet ds = Common.DbHelperSQL.Query(sql.ToString(), par);
            return ds.Tables[0].Rows[0]["Quiz_Name"].ToString(); 
        }

        public DataSet QuizInfo(string id)
        {
            String sql = "select * from [Quiz] where Quiz_ID=@id";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.VarChar,50),
                                };
            par[0].Value = id;
            return Common.DbHelperSQL.Query(sql.ToString(), par);
        }
    }
}
