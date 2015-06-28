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
    public class SearchChallengeDAL : OxcoderIDAL.SearchChallengeIDAL
    {
        public DataSet AllChallengeInfo()
        {
            string sql = "select * from [Challenge]";
            return Common.DB.dataSet(sql);
        }

        public DataSet SearchUseCondition(String salary, string provice, int retype, int flag, string searchCondition, int pageindex, int pagesize)
        {
            StringBuilder sql = new StringBuilder();
            List<SqlParameter> par = new List<SqlParameter>();
            sql.Append("SELECT * from ( select ROW_NUMBER() OVER(");
            
            if (flag == 2)
            {
                sql.Append(" order by  cast(Challenge_Salary as varchar(4000)))");
            }
            else if (flag == 1)
            {
                sql.Append(" order by Challenge_Num)");
            }
            else
            {
                sql.Append(" order by Challenge_Publish)");
            }
            sql.Append(" AS RowNum,* from [Challenge] as c,[Enterprice] as e where c.Challenge_OwnerID = e.Enterprice_ID and Challenge_State=1 ");
            if (salary != null && salary != "0")
            {
                sql.Append(" and Challenge_Salary like @salary");
                SqlParameter mParam = new SqlParameter("@salary", SqlDbType.Text);
                mParam.Value = salary;
                par.Add(mParam);
            }
            if (provice != "0")
            {
                sql.Append(" and Challenge_Area like @provice");
                SqlParameter mParam = new SqlParameter("@provice", SqlDbType.Text);
                mParam.Value = provice;
                par.Add(mParam);
            }
            if (searchCondition != null)
            {
                sql.Append(" and Challenge_Name like @searchCondition or Enterprice_FullName like @searchCondition or Enterprice_ShortName like @searchCondition");
                SqlParameter mParam = new SqlParameter("@searchCondition", SqlDbType.Text);
                mParam.Value = searchCondition;
                par.Add(mParam);
            }
            if (retype != -1 && retype != 0)
            {
                sql.Append(" and Challenge_Type = @retype");
                SqlParameter mParam = new SqlParameter("@retype", SqlDbType.Int);
                mParam.Value = retype;
                par.Add(mParam);
            }
            sql.Append(") as newTable WHERE RowNum >= @page1 AND RowNum <= @page2;");
            SqlParameter mParam1 = new SqlParameter("@page1", SqlDbType.Int);
            mParam1.Value = (pageindex-1)*pagesize;
            par.Add(mParam1);
            SqlParameter mParam2 = new SqlParameter("@page2", SqlDbType.Int);
            mParam2.Value = pagesize*pageindex;
            par.Add(mParam2);
            return Common.DbHelperSQL.PageQuery(sql.ToString(),pageindex,pagesize, par.ToArray());
        }

        public DataSet SearchByUserHistory(string userid, int state, int pageindex, int pagesize)
        {
            StringBuilder sql = new StringBuilder();
            List<SqlParameter> par = new List<SqlParameter>();
            if (state == -1)
            {
                sql.Append("select * from [Challenge] as c,[Enterprice] e where c.Challenge_OwnerID = e.Enterprice_ID and Challenge_State=0 and Challenge_ID in (select Test_ChallengeID from Test where Test_UserID like @userid)");
                SqlParameter mParam = new SqlParameter("@userid", SqlDbType.Text);
                mParam.Value = userid;
                par.Add(mParam);
            }
            else
            {
                sql.Append("select * from [Challenge] as c,[Enterprice] e where c.Challenge_OwnerID = e.Enterprice_ID and Challenge_State=0 and Challenge_ID in (select Test_ChallengeID from Test where Test_UserID like @userid and Test_State = @state)");
                SqlParameter mParam = new SqlParameter("@userid", SqlDbType.Text);
                mParam.Value = userid;
                par.Add(mParam);
                mParam = new SqlParameter("@state", SqlDbType.Int);
                mParam.Value = state;
                par.Add(mParam);
            }
            return Common.DbHelperSQL.Query(sql.ToString(), par.ToArray());
        }

        public DataSet SearchByUser(string userid, int state, int pageindex, int pagesize)
        {
            StringBuilder sql = new StringBuilder();
            List<SqlParameter> par = new List<SqlParameter>();
            if (state == -1)
            {
                sql.Append("select * from [Challenge] as c,[Enterprice] e where c.Challenge_OwnerID = e.Enterprice_ID and Challenge_State=1 and Challenge_ID in (select Test_ChallengeID from Test where Test_UserID like @userid)");
                SqlParameter mParam = new SqlParameter("@userid", SqlDbType.Text);
                mParam.Value = userid;
                par.Add(mParam);
            }
            else
            {
                sql.Append("select * from [Challenge] as c,[Enterprice] e where c.Challenge_OwnerID = e.Enterprice_ID and Challenge_State=1 and Challenge_ID in (select Test_ChallengeID from Test where Test_UserID like @userid and Test_State = @state)");
                SqlParameter mParam = new SqlParameter("@userid", SqlDbType.Text);
                mParam.Value = userid;
                par.Add(mParam);
                mParam = new SqlParameter("@state", SqlDbType.Int);
                mParam.Value = state;
                par.Add(mParam);
            }
            return Common.DbHelperSQL.Query(sql.ToString(), par.ToArray());
        }

        public DataSet SearchByOwner(string id, int pageindex, int pagesize)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select * from [Challenge] as c,[Enterprice] as e where c.Challenge_OwnerID = e.Enterprice_ID and e.Enterprice_ID like @id ");
            SqlParameter[] par = { new SqlParameter("@id", SqlDbType.Text) };
            par[0].Value = id;
            return Common.DbHelperSQL.Query(sql.ToString(), par.ToArray());
        }

        public DataSet SearchByChallengeID(string id)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select * from [Challenge] as c,[Enterprice] as e where c.Challenge_OwnerID = e.Enterprice_ID and Challenge_ID like @id");
            SqlParameter[] par ={new SqlParameter("@id",SqlDbType.Text)};
            par[0].Value = id;
            return Common.DbHelperSQL.Query(sql.ToString(), par.ToArray());
        }
    }
}
