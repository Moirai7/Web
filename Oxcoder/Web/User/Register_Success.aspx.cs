using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class Register_Success : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL User = new OxcoderBL.UserBL();
        OxcoderIBL.EnterpriseInfoIBL Enterprice = new OxcoderBL.EnterpriseInfoBL();
        public string Name
        {
            get
            {
                return Session["username"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
           
        }
       
    }
}