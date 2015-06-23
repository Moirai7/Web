using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Common
{
    public partial class Register_Sub : System.Web.UI.Page
    {
        public string email
        {
            get
            {
                //if (Session["User_Email"] != null)
                //{
                //    return Session["User_Email"].ToString();
                //}
                //else
                //{
                //    Session["username"] = "LanLan";
                //}
                ////Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                //return "姓名";
                return Session["User_Email"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
           
        }
    }
}