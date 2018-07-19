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
        public string remind
        {
            get
            {
                return remind1;
            }
        }
        public string remind1 = null;
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
                user = userBL.GetUserID(email);
                Session["username"] = user.User_Name;
                Session["email"] = email;
                Session["userID"] = user.User_ID;
                Response.Redirect("../User/User_Index.aspx");

            }
            else if (enterpriceBL.EnterpriceLogin(email, password))
            {
                Model.Enterprice enterprice = enterpriceBL.GetEnterpriceID(email);
                //Session["enterprice"] = enterprice;
                Session["enterpriceName"] = enterprice.Enterprice_FullName;
                Session["email"] = email;
                Session["enterpriceID"] = enterprice.Enterprice_ID;
                Response.Redirect("../Enterprice/Recruit_list.aspx");
            }
            else {
                remind1 = "用户名或密码错误！";
            }
        }
    }
}