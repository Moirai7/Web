using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;


/// <summary>
/// 搜索 的摘要说明
/// 此类是 BL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/17
/// 
namespace Web.User
{
    public partial class User_Test : System.Web.UI.Page
    {
        public int order=0;
        public int time = -1;
        public string result = null;
        public string id = null;
        public string uid = null;
        OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();
        OxcoderIBL.QuizInfoIBL enter = new OxcoderBL.QuizInfoBL();
        public string Name
        {
            get
            {
                if (Session["username"] != null)
                {
                    return Session["username"].ToString();
                }
                else
                {
                    Session["username"] = "LanLan";
                }
                //Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                uid=Session["userID"].ToString();
                return "姓名";
            }
        }


        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                SetBind();
            }
        }
        private void SetBind()
        {
            if (Request.QueryString["cid"] != null && Request.QueryString["cid"] != "")
                id = Request.QueryString["cid"].ToString();
            if (Request.QueryString["order"] != null && Request.QueryString["order"] != "")
                order = Convert.ToInt32(Request.QueryString["order"].ToString());

            DataSet ds = search.SearchByChallengeID(id);
            switch (order)
            {
                case 0:
                    rpt_quiz.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_First"].ToString());
                    break;
                case 1:
                    rpt_quiz.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_Sec"].ToString());
                    break;
                case 2:
                    rpt_quiz.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_Third"].ToString());
                    break;
                default:
                    rpt_quiz.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_First"].ToString());
                    break;
            }
            rpt_quiz_info.DataSource = rpt_quiz.DataSource;

            Page.DataBind();
        }
    }
}