using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{
    public partial class FillEnterpriceInfo : System.Web.UI.Page
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

        }

        protected void FillEnterpriceInfo2(object sender, EventArgs e)
        {
            string fullName = corpname.Value;
            string shortName = corpsname.Value;
            string url = webPosition.Value;
            string introduction = corpinfo.Value;
            Model.Enterprice enterprice = new Model.Enterprice();
            enterprice.Enterprice_FullName = fullName;
            enterprice.Enterprice_ShortName = shortName;
            enterprice.Enterprice_Url = url;
            enterprice.Enterprice_Introduction = introduction;
            enterprice.Enterprice_Email = Session["enterpriceName"].ToString();
            Enterprice.UpdateEnterpriceInfo2(enterprice);
            Response.Redirect("");
        }
    }
}