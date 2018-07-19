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
    public partial class User_Result : System.Web.UI.Page
    {
        public string id = null;
        public int order = 0;
        public int time = -1;
        public string result = null;
        private OxcoderIBL.TestInfoIBL tii = new OxcoderBL.TestInfoBL();
        OxcoderIBL.Test_QuizInfoIBL tq = new OxcoderBL.Test_QuizInfoBL();
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
            
            rpt_Challenge.DataSource = tii.GetTestDetailByChallengeID(id);

            Page.DataBind();
        }
    }
}