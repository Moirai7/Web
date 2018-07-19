using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
namespace Web.Common
{
    public partial class Register : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL user = new OxcoderBL.UserBL();
        OxcoderIBL.EnterpriseInfoIBL enterprice = new OxcoderBL.EnterpriseInfoBL();
        public string remind
        {
            get
            {
                return remind1;
            }
        }
        public string remind1=null;
        protected void Page_Load(object sender, EventArgs e)
        {
            Page.DataBind();
        }

        protected void btnRegister(object sender, EventArgs e)
        {

            String email = LoginEmail.Value;
            String password = LoginPassword.Value;
            String type = regflag.Value;
            Console.WriteLine("邮箱" + email);
                if (type.Equals("1"))
                {
                    if (user.RegisterUser(email, password) != 0)
                    {
                        Session["User_Email"] = email;
                        Session["type"] = "User";
                        user.SendUserEmail(email);
                        Response.Redirect("Register_sub.aspx");
                    }
                    else {
                        remind1 = "邮箱已经被占用！您可以使用您之前邮件内的帐号与密码登录网站。";
                    }
                }
                else {
                    if (enterprice.RegisterEnterprice(email, password) != 0)
                    {
                        Session["Enterprice_Email"] = email;
                        Session["type"] = "Enterprice";
                        enterprice.SendEnterpriceEmail(email);
                        Response.Redirect("Register_sub.aspx");
                    }
                    else {
                        remind1 = "邮箱已经被占用！您可以使用您之前邮件内的帐号与密码登录网站。";
                    }
                }
            }
    }
}