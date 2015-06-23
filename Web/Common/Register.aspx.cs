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
        public string remind;
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
            //1-企业用户，2-个人用户   
            if (type.Equals("1"))
            {
                if (user.RegisterUser(email, password) == 0)
                {
                    //注册失败
                    remind = "邮箱已经被占用！您可以使用您之前邮件内的帐号与密码登录网站。";
                }
                else
                {
                    string User_ID = user.GetUserID(email);
                    Session["User_ID"] = User_ID;
                    Session["User_Email"] = email;
                    Session["type"] = "User";
                    user.SendUserEmail(email);
                    Response.Redirect("Register_sub.aspx");
                }
            }//if结束
            else
            {
                //if (user.RegisterEnterprice(email, password) == 0)
                //{
                //    //注册失败
                //    remind = "邮箱已经被占用！您可以使用您之前邮件内的帐号与密码登录网站。";
                //}
                //else
                //{
                //    String Enterprice_ID = enterprice.GetEnterpriceID(email).ToString();
                //    Session["Enterprice_ID"] = Enterprice_ID;
                //    Session["Enterprice_Email"] = email;
                //    Session["type"] = "Enterprice";
                //    //TODO
                //    // enterprice.SendEmail(email, email);
                //    //Response.Redirect("Register_sub.aspx");
                //    // Response.Redirect("User_Index.aspx");
                //}
            }
        }
    }
}