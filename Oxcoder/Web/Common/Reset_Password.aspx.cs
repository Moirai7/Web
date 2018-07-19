using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Common
{
    public partial class Reset_Password : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL User = new OxcoderBL.UserBL();
        OxcoderIBL.EnterpriseInfoIBL Enterprice = new OxcoderBL.EnterpriseInfoBL();
        string email;
        public string Name
        {
            get
            {
                return Session["username"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        protected void ResetPassword(object sender, EventArgs e)
        {
            string newPwd = pwd.Value;
            email =Session["email"].ToString();
            Model.User user = User.GetUserID(email);
            Model.Enterprice enterprice = Enterprice.GetEnterpriceID(email);
            if (user.User_ID != null)
            {
                if (User.SetPassword(email, newPwd) != 0)
                {
                    Response.Redirect("../Common/Login.aspx");
                }
            }
            else if(enterprice.Enterprice_ID!=null){
                if (Enterprice.SetPassword(email, newPwd) != 0)
                {
                    Response.Redirect("../Common/Login.aspx");
                }
            }
        }
    }
}