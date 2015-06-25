using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using Model;
namespace Web.Common
{
    public partial class Reset_Password_Before : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL User = new OxcoderBL.UserBL();
        OxcoderIBL.EnterpriseInfoIBL Enterprice = new OxcoderBL.EnterpriseInfoBL();
        public string Name
        {
            get
            {
                return Session["username"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            string email = Request.QueryString["email"].ToString();
            string activeCode = Request["activeCode"].ToString();
            Model.User user = User.GetUserID(email);
            Session["email"] = email;
            Model.Enterprice enterprice = Enterprice.GetEnterpriceID(email);
            string password = enterprice.Enterprice_Password;
            if (user.User_ID!=null){
             if(User.ActiveUserAccount(email, activeCode)){
               Response.Redirect("Reset_Password.aspx");
             }
            }else if(enterprice.Enterprice_ID!=null){
            if(Enterprice.ActiveEnterpriceAccount(email,activeCode)){
            Response.Redirect("Reset_Password.aspx");
            }
            } 
        }
    }
}