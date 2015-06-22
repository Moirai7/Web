using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace OxcoderDAL
{
    public class EnterpriseChallengeDAL : OxcoderIDAL.EnterpriseChallengeIDAL
    {
        public DataSet GetChallengeBriefByOwner(string ownerId, string state)
        {
            String sql = "select Challenge_Name,Challenge_Level,Challenge_Time,Challenge_Quiz_First,Challenge_Quiz_Sec,Challenge_Quiz_Third,(select count(*) from [Test] as t where c.Challenge_ID=t.Test_ChallengeID and Test_State=1),(select count(*) from [Test] as t where c.Challenge_ID=t.Test_ChallengeID and Test_State=2),Convert(decimal(18,1),(select count(*) from [Test] as t where c.Challenge_ID=t.Test_ChallengeID and Test_State=2 and Test_MaxGrade>=60)/((select count(*) from [Test] as t where c.Challenge_ID=t.Test_ChallengeID and Test_State=2)+0.000001)*100),Challenge_ID from [Challenge] as c where Challenge_OwnerID=@ownerId and Challenge_State=@state";
            SqlParameter[] par ={
                                    new SqlParameter("@ownerId",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@state",SqlDbType.Int,50),
                                };
            par[0].Value = new Guid(ownerId);
            par[1].Value = Convert.ToInt32(state);
            return Common.DbHelperSQL.Query(sql.ToString(), par);
        }
        public DataSet GetMatchQuizs(int level, int type)
        {
            //查询Quiz_Name,Quiz_Content,Quiz_OwnerID - Admin_Name, Quiz_level
            String sql = "select Quiz_Name,Quiz_Content,Admin_Name,Quiz_level,Quiz_ID from [Quiz] as q,[Admin] as a where a.Admin_ID=q.Quiz_OwnerID and Quiz_level<=@level1+1 and Quiz_level>=@level2-1 and Quiz_Type like @type";
            SqlParameter[] par ={
                                    new SqlParameter("@level1",SqlDbType.Int,50),
                                    new SqlParameter("@level2",SqlDbType.Int,50),
                                    new SqlParameter("@type",SqlDbType.VarChar,50),
                                };
            par[0].Value = level.ToString();
            par[1].Value = level.ToString();
            par[2].Value = type.ToString();
            return Common.DbHelperSQL.Query(sql.ToString(), par);
        }
        public DataSet GetAIMatchQuizs(int level, int type)
        {
            return null;
        }
        public bool AddChallenge(Model.Challenge chlg)
        {
            String sql = "insert into [Challenge] values(@id,@name,@ownerId,@time,@level,@area,@position,@entime,@num,@publish,@state,@type,@sec,@third,@first,@salary)";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@name",SqlDbType.VarChar,50),
                                    new SqlParameter("@ownerId",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@time",SqlDbType.VarChar,50),
                                    new SqlParameter("@level",SqlDbType.VarChar,50),
                                    new SqlParameter("@area",SqlDbType.VarChar,50),
                                    new SqlParameter("@position",SqlDbType.VarChar,50),
                                    new SqlParameter("@entime",SqlDbType.VarChar,50),
                                    new SqlParameter("@num",SqlDbType.VarChar,50),
                                    new SqlParameter("@publish",SqlDbType.VarChar,50),
                                    new SqlParameter("@state",SqlDbType.VarChar,50),
                                    new SqlParameter("@type",SqlDbType.VarChar,50),
                                    new SqlParameter("@sec",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@third",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@first",SqlDbType.UniqueIdentifier,50),
                                    new SqlParameter("@salary",SqlDbType.VarChar,50),
                                };
            par[0].Value = chlg.Challenge_ID;
            par[1].Value = chlg.Challenge_Name;
            par[2].Value = chlg.Challenge_OwnerID;
            par[3].Value = chlg.Challenge_Time;
            par[4].Value = chlg.Challenge_Level;
            par[5].Value = chlg.Challenge_Area;
            par[6].Value = chlg.Challenge_Position1;
            par[7].Value = chlg.Challenge_EnTime;
            par[8].Value = chlg.Challenge_Num;
            //publish time
            par[9].Value = chlg.Challenge_Time;
            par[10].Value = chlg.Challenge_State;
            par[11].Value = chlg.Challenge_Type;
            par[12].Value = new Guid(chlg.Challenge_Quiz0.ToString().Split(',')[2]);
            par[13].Value = new Guid(chlg.Challenge_Quiz1.ToString().Split(',')[3]);
            par[14].Value = new Guid(chlg.Challenge_Quiz2.ToString().Split(',')[1]);
            par[15].Value = chlg.Challenge_Salary;
            Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);

            return true;
        }
        public bool MinEnterpriceChallengeNumber(string entpId, int number)
        {
            return true;
        }
    }
}
