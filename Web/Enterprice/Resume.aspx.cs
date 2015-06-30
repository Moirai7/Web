using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprise
{
    public partial class Resume : System.Web.UI.Page
    {
        public string Name
        {
            get
            {
                if (Session["enterpriceName"] != null)
                {
                    return Session["enterpriceName"].ToString();
                }
                else
                {
                    Session["enterpriceName"] = "dyt有限公司";
                }
                return "公司";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            SetBind();
        }

        private void SetBind()
        {
            Page.DataBind();
        }
    }
}