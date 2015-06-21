using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

/// <summary>
/// Users 的摘要说明
/// 此类是 DAL User
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 
namespace OxcoderDAL
{
    public class ChallengeInfoDAL : OxcoderIDAL.ChallengeInfoIDAL
    {
        public int DeleteAChallenge(string id)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("delete from [Challenge] where ID=@id");
            SqlParameter[] par ={new SqlParameter ("@id",SqlDbType.VarChar)};
            par[0].Value = id;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int UpdateNum(string id)
        {
            int number;
            OxcoderIDAL.SearchChallengeIDAL sci = new OxcoderDAL.SearchChallengeDAL();

            StringBuilder sql = new StringBuilder();
            sql.Append("update [Challenge] set Challenge_Num = @number where ID=@id");
            SqlParameter[] par = { new SqlParameter("@number",SqlDbType.Int),
                                     new SqlParameter("@id", SqlDbType.VarChar) };
            par[0].Value = number;
            par[1].Value = id;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int InsertAChallenge(Model.Challenge id)
        {
            return -1;
        }

    }
}
