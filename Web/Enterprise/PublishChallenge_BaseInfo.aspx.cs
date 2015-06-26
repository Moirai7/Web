using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprise
{
    public partial class PublishChallenge_BaseInfo : System.Web.UI.Page
    {
        public string Name
        {
            get
            {
                if (Session["name"] != null)
                {
                    return Session["name"].ToString();
                }
                else
                {
                    Session["name"] = "dyt有限公司";
                }
                return "公司";
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
            Page.DataBind();
        }
    }
}