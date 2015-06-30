using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class Register_Success_Before : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL User = new OxcoderBL.UserBL();
        public string Name
        {
            get
            {
                return Session["username"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string email = Request.QueryString["email"].ToString();
                string activeCode = Request["activeCode"].ToString();
               // string type = Session["type"].ToString();
                string type = Request.QueryString["type"].ToString();
                Model.User user = new Model.User();
                if (type.Equals("User") && User.ActiveUserAccount(email, activeCode))
                {

                    user = User.GetUserID(email);
                    Session["User"] = user;
                    Session["username"] = user.User_Name;
                    Session["userID"] = user.User_ID;
                    Response.Redirect("Register_Success.aspx");
                }
                else
                {
                    Response.Write("用户已存在，但是激活码有误！");
                }
            }
        }
    }
}