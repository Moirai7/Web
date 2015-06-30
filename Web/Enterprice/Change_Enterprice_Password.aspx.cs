using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{
    public partial class Change_Enterprice_Password : System.Web.UI.Page
    {
        public string Name
        {
            get
            {
                return Session["enterpriceName"].ToString();
            }
        }
        OxcoderIBL.EnterpriseInfoIBL Enterprice = new OxcoderBL.EnterpriseInfoBL();
        protected void Page_Load(object sender, EventArgs e)
        {
            Page.DataBind();
        }

        protected void ChangeEnPassword(object sender, EventArgs e)
        {
            string old = old1.Value;
            string newPwd = pwd1.Value;
            string rePwd = rePwd1.Value;
            string email = Session["email"].ToString();
            Enterprice.SetPassword(email, newPwd);
            Response.Redirect("../Common/Login.aspx");
        }
    }
}