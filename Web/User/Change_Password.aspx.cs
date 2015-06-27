using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class Change_Password : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL userBL = new OxcoderBL.UserBL();
        OxcoderIBL.EnterpriseInfoIBL enterpriceBL = new OxcoderBL.EnterpriseInfoBL();
        public string Name
        {
            get
            {
                if (Session["username"] != null)
                {
                    return Session["username"].ToString();
                }
                else
                {
                    Session["username"] = "LanLan";
                }
                //Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                return "姓名";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void ChangePassword(object sender, EventArgs e)
        {
            string oldPwd = old.Value;
            string password = pwd.Value;
            string rePassword = rePwd.Value;
            string email = Session["email"].ToString();
            if (userBL.UserLogin(email, oldPwd)) {
                if (userBL.SetPassword(email, password)!=0) {
                    Response.Redirect("../Common/Login.aspx");
                }
            }
        }
    }
}