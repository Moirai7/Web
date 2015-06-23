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
                if (Session["username"] != null)
                {
                    return Session["username"].ToString();
                }
                else
                {
                    Session["username"] = "LanLan";
                }
                Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                return "姓名";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        public void ActiveAccount()
        {
            string email = Request.QueryString["email"].ToString();
            string activeCode = Request["activeCode"].ToString();
            string type = Session["type"].ToString();
            if (type.Equals("User") && User.ActiveUserAccount(email, activeCode))
            {
                Response.Redirect("Register_Success.aspx");
            }
            else
            {
                Response.Write("用户已存在，但是激活码有误！");
            }
        }
    }
}