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
                if (Session["type"].ToString().Equals("User"))
                {
                    return Session["User_Email"].ToString();
                }
                else {
                    return Session["Enterprice_Email"].ToString();
                }
                
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
           
        }
    }
}