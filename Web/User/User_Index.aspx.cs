using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;

namespace Web.User
{
    public partial class User_Index : System.Web.UI.Page
    {
        int page = 0;
        int flag = -1;
        int salary = -1;
        string location = null;
        string searchCondition = null;
        int retype = -1;

        OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();

        public string Name
        {
            get
            {
                if (Session["username"] != null)
                {
                    Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                    return Session["username"].ToString();
                }
                else
                {
                    Session["username"] = "LanLan";
                    Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
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
            if (Request.QueryString["salary"] != null && Request.QueryString["salary"] != "")
                salary = Convert.ToInt32(Request.QueryString["salary"].ToString());
            if (Request.QueryString["province"] != null && Request.QueryString["province"] != "")
                location = Request.QueryString["province"].ToString();
            if (Request.QueryString["searchCondition"] != null && Request.QueryString["searchCondition"] != "")
                searchCondition = Request.QueryString["searchCondition"].ToString();
            if (Request.QueryString["flag"] != null && Request.QueryString["flag"]!="")
                flag = Convert.ToInt32(Request.QueryString["flag"].ToString());
            if (Request.QueryString["page"] != null && Request.QueryString["page"] != "")
                page = Convert.ToInt32(Request.QueryString["page"].ToString());
            if (Request.QueryString["retype"] != null && Request.QueryString["retype"] != "")
                retype = Convert.ToInt32(Request.QueryString["retype"].ToString());

            rpt_Challenge.DataSource = search.Search(page, 10,salary,location,retype,flag,searchCondition);
            Page.DataBind();

        }
    }
}