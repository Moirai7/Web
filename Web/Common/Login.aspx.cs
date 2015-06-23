using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Common
{
    public partial class Login : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL userBL = new OxcoderBL.UserBL();
        OxcoderIBL.EnterpriseInfoIBL enterpriceBL = new OxcoderBL.EnterpriseInfoBL();
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnLogin(object sender, EventArgs e)
        {
            string email = LoginEmail.Value;
            string password = LoginPassword.Value;
            if (userBL.UserLogin(email, password))
            {
                Model.User user = new Model.User();
                user.User_ID = userBL.GetUserID(email);
                user.User_Email = email;
                user.User_Password = password;
                Session["user"] = user;
                Response.Redirect("../User/User_Index.aspx");

            }
            //else if (enterpriceBL.Login(email, password))
            //{
            //    Model.Enterprice enterprice = new Model.Enterprice();
            //    enterprice.Enterprice_ID = enterpriceBL.GetEnterpriceID(email);
            //    enterprice.Enterprice_Email = email;
            //    enterprice.Enterprice_Password = password;
            //}
        }
    }
}