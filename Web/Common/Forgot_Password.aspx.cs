using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Common
{
    public partial class Forgot_Password : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL userBL = new OxcoderBL.UserBL();
        protected void Page_Load(object sender, EventArgs e)
        {
            
        }

        protected void SendResetEmail(object sender, EventArgs e)
        {
            string email = exampleInputEmail.Value;
            userBL.SendResetEmail(email);
            Response.Redirect("Forgot_Password_Sub.aspx");
        }
    }
}