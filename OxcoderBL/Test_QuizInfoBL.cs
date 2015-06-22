using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Runtime.Serialization;  

/// <summary>
/// 搜索 的摘要说明
/// 此类是 BL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/17
/// 
namespace OxcoderBL
{
    public class Test_QuizInfoBL: OxcoderIBL.Test_QuizInfoIBL
    {
        public Model.Quiz searchQuizInfo(string reid, int order)
        {

            OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();
            OxcoderIBL.QuizInfoIBL enter = new OxcoderBL.QuizInfoBL();

            DataSet ds = search.SearchByChallengeID(reid);
            switch (order)
            {
                case 0:
                    ds = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_First"].ToString());
                    break;
                case 1:
                    ds = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_Sec"].ToString());
                    break;
                case 2:
                    ds = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_Third"].ToString());
                    break;
                default:
                    ds = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_First"].ToString());
                    break;
            }

            Model.Quiz p1 = new Model.Quiz();
            p1.chineseName = ds.Tables[0].Rows[0]["Quiz_Name"].ToString();
            p1.pid = ds.Tables[0].Rows[0]["Quiz_ID"].ToString();
            p1.codepath = ds.Tables[0].Rows[0]["Quiz_Info"].ToString();
            p1.countDown = ds.Tables[0].Rows[0]["Quiz_Time"].ToString();
            p1.order = order;
            p1.pname = ds.Tables[0].Rows[0]["Quiz_Pname"].ToString();
            p1.previewfileExist = false;
            p1.ptype = ds.Tables[0].Rows[0]["Quiz_TypeID"].ToString();
            p1.ptypeName = ds.Tables[0].Rows[0]["Quiz_Type"].ToString();
            p1.target = ds.Tables[0].Rows[0]["Quiz_Content"].ToString();
            p1.totalTime = ds.Tables[0].Rows[0]["Quiz_Time"].ToString();
            p1.input = ds.Tables[0].Rows[0]["Quiz_Input"].ToString();
            p1.output = ds.Tables[0].Rows[0]["Quiz_Output"].ToString();
            return p1;
        }

        public int UpdateATest(string id, int order, int time, string result)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.TestInfoIDAL test = factory.getTestInstance();
            string tid = test.GetTestID(id);
            Model.Quiz p1 = searchQuizInfo(id, order);
            if (result.Equals(p1.output))
            {
                test.UpdateATest(tid, order, time);
            }
            if(order==2)
            {
                DataRow dr = test.GetTestDetail(tid).Tables[0].Rows[0];
                if (dr["Test_Quiz0_State"].ToString().Equals("-1") && dr["Test_Quiz1_State"].ToString().Equals("-1") && dr["Test_Quiz2_State"].ToString().Equals("-1"))
                    test.SetTestState(tid);
            }
            return 1;
        }
    }
}
