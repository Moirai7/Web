using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class User_Challenge : System.Web.UI.Page
    {
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

                return "姓名";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            Page.DataBind();
        }
    }
}