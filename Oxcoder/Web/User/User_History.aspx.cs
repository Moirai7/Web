using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class User_History : System.Web.UI.Page
    {
        int page = 0;
        int flag = 0;
        int reustate = -1;

        OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();

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

            rpt_Challenge.DataSource = search.SearchByUser(Session["userID"].ToString(), reustate, flag, page,10);
            Page.DataBind();
        }
    }
}