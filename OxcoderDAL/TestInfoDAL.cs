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
    public class TestInfoDAL:OxcoderIDAL.TestInfoIDAL
    {
        public int DeleteATest(string id)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("delete from [Test] where Test_ChallengeID=@id");
            SqlParameter[] par = { new SqlParameter("@id", SqlDbType.VarChar, 50) };
            par[0].Value = id;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }

        public int InsertATest(Model.Test test)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("insert into [Test] (Test_ID,Test_ChallengeID,Test_UserID) values(@Test_ID,@Test_ChallengeID,@Test_UserID)");
            SqlParameter[] par ={
                                    new SqlParameter("@Test_ID",SqlDbType.VarChar,50),
                                    new SqlParameter("@Test_ChallengeID",SqlDbType.VarChar,50),
                                    new SqlParameter("@Test_UserID",SqlDbType.VarChar,50)
                                };
            par[0].Value = test.Test_ID;
            par[1].Value = test.Test_ChallengeID;
            par[2].Value = test.Test_UserID;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
    }
}
