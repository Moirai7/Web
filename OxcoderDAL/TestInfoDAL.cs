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
        public int DeleteATest(String id)
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

        public string GetTestID(string id)
        {
            String sql = "select Test_ID from [Test] where Test_ChallengeID=@id";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.VarChar,50),
                                };
            par[0].Value = id;
            DataSet ds = Common.DbHelperSQL.Query(sql.ToString(), par);
            return ds.Tables[0].Rows[0]["Test_ID"].ToString();
        }

        public int UpdateATest(String id,int order,int time)
        {
            StringBuilder sql2 = new StringBuilder();
            switch (order)
            {
                case 0:
                    sql2.Append("update [Test] set Test_Quiz0_State = @time where Test_ID like @id");
                    break;
                case 1:
                    sql2.Append("update [Test] set Test_Quiz1_State = @time where Test_ID like @id");
                    break;
                case 2:
                    sql2.Append("update [Test] set Test_Quiz2_State = @time where Test_ID like @id");
                    break;

            }
            SqlParameter[] par2 = { new SqlParameter("@time",SqlDbType.Int),
                                     new SqlParameter("@id", SqlDbType.VarChar) };
            par2[0].Value = time ;
            par2[1].Value = id;
            return Common.DbHelperSQL.ExecuteSql(sql2.ToString(), par2);
        }
        public int SetTestState(String id){
            StringBuilder sql2 = new StringBuilder();
            sql2.Append("update [Test] set Test_State = 1 where Test_ID like @id");
            SqlParameter[] par2 = { new SqlParameter("@id", SqlDbType.VarChar) };
            par2[0].Value = id;
            return Common.DbHelperSQL.ExecuteSql(sql2.ToString(), par2);
        }
        public DataSet GetTestDetail(String id)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select * from [Test] as t,[Challenge] as c,[User] as u where t.Test_UserID = u.User_ID and t.Test_ChallengeID = c.Challenge_ID and t.Test_ID like @id ");
            SqlParameter[] par = { new SqlParameter("@id", SqlDbType.Text) };
            par[0].Value = id;
            return Common.DbHelperSQL.Query(sql.ToString(),par.ToArray());
        }
    }
}
