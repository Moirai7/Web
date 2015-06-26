using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{
    public partial class Register_enterprice_Success : System.Web.UI.Page
    {
        OxcoderIBL.EnterpriseInfoIBL enterpriceBL = new OxcoderBL.EnterpriseInfoBL();

        public string Name
        {
            get
            {
               return Session["enterpriceName"].ToString();
                //return "BJTU";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

            Page.DataBind();
        }
        protected void FillEnterpriceInfo(object sender, EventArgs e)
        {
            string enterpriceFullName = corpname.Value;
            string enterpricePhone = phone.Value;
            string email = Session["enterpriceName"].ToString();
            Session["enterpriceName"] = enterpriceFullName;

            Model.Enterprice enterprice = enterpriceBL.GetEnterpriceID(email);
            //Session["enterprice"] = enterprice;
            Session["enterpriceName"] = enterpriceFullName;
            Session["email"] = email;
            Session["enterpriceID"] = enterprice.Enterprice_ID;
            enterpriceBL.UpdateEnterpriceInfo(enterpriceFullName, enterpricePhone, email);
            Response.Redirect("FillEnterpriceInfo.aspx");
        }
    }
 }
