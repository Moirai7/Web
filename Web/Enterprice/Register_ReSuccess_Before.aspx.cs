using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{
    public partial class Register_ReSuccess_Before : System.Web.UI.Page
    {
        OxcoderIBL.EnterpriseInfoIBL Enterprice = new OxcoderBL.EnterpriseInfoBL();
        public string enterprice_name
        {
            get
            {
                return Session["enterpriceName"].ToString();
               
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string email = Request.QueryString["email"].ToString();
                string activeCode = Request["activeCode"].ToString();
                string type = Request.QueryString["type"].ToString();
                Model.Enterprice enterprice = new Model.Enterprice();
                if (type.Equals("Enterprice") && Enterprice.ActiveEnterpriceAccount(email, activeCode))
                {
                    enterprice = Enterprice.GetEnterpriceID(email);
                    Session["Enterprice"] = enterprice;
                    Session["enterpriceName"] = enterprice.Enterprice_FullName;
                    Response.Redirect("Register_enterprice_Success.aspx");
                }
                else
                {
                    Response.Write("用户已存在，但是激活码有误！");
                }
            }
        }
    }
}