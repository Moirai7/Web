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
namespace OxcoderBL
{
    public class TestInfoBL:OxcoderIBL.TestInfoIBL
    {
        public int InsertATest(string challengeid, string userid)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.TestInfoIDAL dalad = factory.getTestInstance();
            Model.Test test = new Model.Test();
            test.Test_ID = Guid.NewGuid().ToString();
            test.Test_ChallengeID = challengeid;
            test.Test_UserID = userid;

            OxcoderIDAL.ChallengeInfoIDAL ci = factory.getChallengeInstance();
            ci.UpdateNum(challengeid,1);
            return dalad.InsertATest(test);
        }

        public int DeleteATest(string id)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.TestInfoIDAL dalad = factory.getTestInstance();

            return dalad.DeleteATest(id);
        }

        public DataSet GetTestDetail(String id)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.TestInfoIDAL dalad = factory.getTestInstance();
            DataSet ds = dalad.GetTestDetail(id);
            String cid = ds.Tables[0].Rows[0]["Test_ChallengeID"].ToString();
            OxcoderIDAL.SearchChallengeIDAL scidal = factory.getSearchInstance();
            DataSet ds2 = scidal.SearchByChallengeID(cid);

            return AddOtherInfo(ds,ds2);
        }

        private DataSet AddOtherInfo(DataSet ds,DataSet ds2)
        {
            DataColumn dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Enterprice_FullName";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Enterprice_Logo";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Test_Quiz0";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Test_Quiz1";
            ds.Tables[0].Columns.Add(dc);

            dc = new DataColumn();
            dc.DataType = System.Type.GetType("System.String");
            dc.ColumnName = "Test_Quiz2";
            ds.Tables[0].Columns.Add(dc);

            DataRow dr = ds.Tables[0].Rows[0];
            DataRow dr2 = ds2.Tables[0].Rows[0];
            dr["Enterprice_FullName"] = dr2["Enterprice_FullName"].ToString();
            dr["Enterprice_Logo"] = dr2["Enterprice_Logo"].ToString();

            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.QuizInfoIDAL quiz = factory.getQuizInstance();
            String strTemp = dr2["Challenge_Quiz_First"].ToString();
            if (dr["Test_Quiz0_State"].ToString() != "-1")
                dr["Test_Quiz0"] = quiz.QuizName(strTemp) + "通过";
            else
                dr["Test_Quiz0"] = quiz.QuizName(strTemp) + "未通过";

            if (dr["Test_Quiz1_State"].ToString() != "-1")
                dr["Test_Quiz1"] = quiz.QuizName(strTemp) + "通过";
            else
                dr["Test_Quiz1"] = quiz.QuizName(strTemp) + "未通过";

            if (dr["Test_Quiz2_State"].ToString() != "-1")
                dr["Test_Quiz2"] = quiz.QuizName(strTemp) + "通过";
            else
                dr["Test_Quiz2"] = quiz.QuizName(strTemp) + "未通过";
            return ds;
        }
    }
}
