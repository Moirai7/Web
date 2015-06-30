using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class User_Corp_Detail : System.Web.UI.Page
    {
        int page = 0;
        string id = null;

        OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();
        OxcoderIBL.EnterpriseInfoIBL enter = new OxcoderBL.EnterpriseInfoBL();

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
            if (Request.QueryString["page"] != null && Request.QueryString["page"] != "")
                page = Convert.ToInt32(Request.QueryString["page"].ToString());

            rpt_corp.DataSource = enter.EnterpriceInfo(id);
            rpt_challenge.DataSource = search.SearchByOwner(id, page, 10);
            Page.DataBind();
        }
    }
}