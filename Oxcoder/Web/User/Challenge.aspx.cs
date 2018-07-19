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
/// Date：2015/06/09
/// 
namespace Web.User
{
    public partial class Challenge : System.Web.UI.Page
    {
        int page = 0;
        public string id = null;

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

            DataSet ds = search.SearchByChallengeID(id);
            rpt_challenge.DataSource = ds;

            quiz1.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_First"].ToString());
            quiz2.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_Sec"].ToString());
            quiz3.DataSource = enter.QuizInfo(ds.Tables[0].Rows[0]["Challenge_Quiz_Third"].ToString());

            Page.DataBind();
        }
    }
}