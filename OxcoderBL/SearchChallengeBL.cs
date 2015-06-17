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
namespace OxcoderBL
{
    public class SearchChallengeBL : OxcoderIBL.SearchChallengeIBL
    {
        private DataSet AddPositionAndQuiz(DataSet ds)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.QuizInfoIDAL quiz = factory.getQuizInstance();

            DataColumn dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Challenge_Position0";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Challenge_Position1";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Challenge_Position2";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Challenge_Quiz0";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Challenge_Quiz1";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Challenge_Quiz2";
            ds.Tables[0].Columns.Add(dc);

            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                string strTemp = dr["Challenge_Position"].ToString();
                if (strTemp.IndexOf(",") == -1)
                {
                    //没逗号直接赋值
                    dr["Challenge_Position0"] = strTemp;
                }
                else
                {
                    //有逗号就分割
                    string[] arrTemp = strTemp.Split(',');
                    dr["Challenge_Position0"] = arrTemp[0].ToString();
                    dr["Challenge_Position1"] = arrTemp[1].ToString();
                    dr["Challenge_Position2"] = arrTemp[1].ToString();
                }
                strTemp = dr["Challenge_Quiz_First"].ToString();
                dr["Challenge_Quiz0"] = quiz.QuizName(strTemp); 
                strTemp = dr["Challenge_Quiz_Sec"].ToString();
                dr["Challenge_Quiz1"] = quiz.QuizName(strTemp); 
                strTemp = dr["Challenge_Quiz_Third"].ToString();
                dr["Challenge_Quiz2"] = quiz.QuizName(strTemp);
            }
            return ds;
        }

        public DataSet Search(int pageindex, int pagesize, int salary = -1, string provice = null, int retype = -1, int flag = -1, string searchCondition = null)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.SearchChallengeIDAL dalad = factory.getSearchInstance();
            DataSet ds = dalad.SearchUseCondition(salary, provice, retype, flag, searchCondition, pageindex, pagesize);
            ds = AddPositionAndQuiz(ds);
            return ds;
        }

        public DataSet SearchByOwner(string id, int pageindex, int pagesize)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.SearchChallengeIDAL dalad = factory.getSearchInstance();
            DataSet ds = dalad.SearchByOwner(id, pageindex, pagesize);
            ds = AddPositionAndQuiz(ds);
            return ds;
        }
        
        public DataSet SearchByUser(string userid, int state, int flag, int pageindex, int pagesize)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.SearchChallengeIDAL dalad = factory.getSearchInstance();
            DataSet ds = null;
            if (flag == 1 )
            {
                ds = dalad.SearchByUser(userid,state,pageindex, pagesize);
                ds = AddPositionAndQuiz(ds);
            }
            else if (flag == 0)
            {
                ds = dalad.SearchByUserHistory(userid, state, pageindex, pagesize);
                ds = AddPositionAndQuiz(ds);
            }
            return ds;
        }

        public DataSet SearchByChallengeID(string id, int pageindex, int pagesize)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.SearchChallengeIDAL dalad = factory.getSearchInstance();
            DataSet ds = dalad.SearchByChallengeID(id, pageindex, pagesize);
            ds = AddPositionAndQuiz(ds);
            return ds;
        }
    }
}
