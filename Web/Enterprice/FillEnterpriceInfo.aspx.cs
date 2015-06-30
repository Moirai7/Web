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
        public string Name
        {
            get
            {
                return Session["enterpriceName"].ToString();
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

            Page.DataBind();
        }

        protected void FillEnterpriceInfo0(object sender, EventArgs e)
        {
            string fullName = corpname.Value;
            string shortName = corpsname.Value;
            string url = webPosition.Value;
            string introduction = corpinfo.Value;
            string location = Request.Form["prov"];
            string locationCity = Request.Form["city"];
            string scale = Request.Form["scale"];
            Model.Enterprice enterprice = new Model.Enterprice();
            enterprice.Enterprice_FullName = fullName;
            enterprice.Enterprice_ShortName = shortName;
            enterprice.Enterprice_Url = url;
            enterprice.Enterprice_Introduction = introduction;
            enterprice.Enterprice_Email = Session["email"].ToString();
            enterprice.Enterprice_Location = location;
            enterprice.Enterprice_LocationCity = locationCity;
            enterprice.Enterprice_Scale = scale;
            Enterprice.UpdateEnterpriceInfo0(enterprice);
            Response.Redirect("FillEnterpriceInfo2.aspx");
        }
    }
}