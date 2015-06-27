using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{
    public partial class FillEnterpriceInfo2 : System.Web.UI.Page
    {
        OxcoderIBL.EnterpriseInfoIBL Enterprice = new OxcoderBL.EnterpriseInfoBL();
        public string Name
        {
            get
            {
                return Session["enterpriceName"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

            Page.DataBind();
        }

        protected void FillEnterpriceInfo1(object sender, EventArgs e)
        {
            string position = tagstr.Value;
            string email = Session["email"].ToString();
            Enterprice.UpdateEnterpriceInfo1(position, email);
            Response.Redirect("Recruit_list.aspx");
        }
    }
}