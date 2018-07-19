using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class User_Challenge : System.Web.UI.Page
    {
        int page = 0;
        int flag = 1;
        int reustate = -1;

        OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();
        OxcoderIBL.TestInfoIBL enter = new OxcoderBL.TestInfoBL();

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
            if (Request.QueryString["reustate"] != null && Request.QueryString["reustate"] != "")
                reustate = Convert.ToInt32(Request.QueryString["reustate"].ToString());
            if (Request.QueryString["flag"] != null && Request.QueryString["flag"] != "")
                flag = Convert.ToInt32(Request.QueryString["flag"].ToString());
            if (Request.QueryString["page"] != null && Request.QueryString["page"] != "")
                page = Convert.ToInt32(Request.QueryString["page"].ToString());
            if (Request.QueryString["add"] != null && Request.QueryString["add"] != "")
            {
                enter.InsertATest(Request.QueryString["add"].ToString(), Session["userID"].ToString());
            }
            if (Request.QueryString["delete"] != null && Request.QueryString["delete"] != "")
                enter.DeleteATest(Request.QueryString["delete"].ToString());

            rpt_Challenge.DataSource = search.SearchByUser(Session["userID"].ToString(), reustate, flag, page, 10);
            Page.DataBind();
        }
    }
}