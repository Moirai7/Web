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
/// Date：2015/06/26
/// 
namespace OxcoderDAL
{
    public class QuizInfoDAL : OxcoderIDAL.QuizInfoIDAL
    {
        public bool insertAQuiz(Model.QuizForDB quiz)
        {
            String sql = "insert into [Quiz] (Quiz_ID,Quiz_Name,Quiz_Content,Quiz_Info,Quiz_Type,Quiz_Level,Quiz_Time,Quiz_TypeID,Quiz_Input,Quiz_Output) values(@id,@name,@content,@info,@type,@level,@time,@typeid,@input,@output)";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@name",SqlDbType.Text),
                                    new SqlParameter("@content",SqlDbType.Text),
                                    new SqlParameter("@info",SqlDbType.Text),
                                    new SqlParameter("@type",SqlDbType.Text),
                                    new SqlParameter("@level",SqlDbType.SmallInt),
                                    new SqlParameter("@time",SqlDbType.Int),
                                    new SqlParameter("@typeid",SqlDbType.Int),
                                    new SqlParameter("@input",SqlDbType.Text),
                                    new SqlParameter("@output",SqlDbType.Text)
                                };
            par[0].Value = quiz.Quiz_ID;
            par[1].Value = quiz.Quiz_Name;
            par[2].Value = quiz.Quiz_Content;
            par[3].Value = quiz.Quiz_Info;
            par[4].Value = quiz.Quiz_Type;
            par[5].Value = quiz.Quiz_Level;
            par[6].Value = quiz.Quiz_Time;
            par[7].Value = quiz.Quiz_TypeID;
            par[8].Value = quiz.Quiz_Input;
            //publish time
            par[9].Value = quiz.Quiz_Output;
            Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);

            return true;
        }
        public DataSet AllQuizInfo()
        {
            string sql = "select * from [Quiz]";
            return Common.DB.dataSet(sql);
        }
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
