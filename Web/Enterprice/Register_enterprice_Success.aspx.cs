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
        OxcoderIBL.EnterpriseInfoIBL enterprice = new OxcoderBL.EnterpriseInfoBL();

        public string enterprice_name
        {
            get
            {
               return Session["enterpriceName"].ToString();
                //return "BJTU";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        protected void FillEnterpriceInfo(object sender, EventArgs e)
        {
            string enterpriceFullName = corpname.Value;
            string enterpricePhone = phone.Value;
            string email = Session["enterpriceName"].ToString();
            enterprice.UpdateEnterpriceInfo(enterpriceFullName,enterpricePhone,email);
            Response.Redirect("FillEnterpriceInfo.aspx");
        }
    }
 }
