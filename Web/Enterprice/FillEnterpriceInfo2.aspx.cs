using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{
    public partial class FillEnterpriceInfo2 : System.Web.UI.Page
    {
        public string enterprice_name
        {
            get
            {
                //return Session["enterpriceName"].ToString();
                return "Test";
            }
        }
        public string tag {
            get {
                return temp;
            }
        
        }
        public string temp;
        protected void Page_Load(object sender, EventArgs e)
        {
            string tag = Request.QueryString["strchoose"].ToString();
            string newTag = Request.QueryString["chooseTagStr"].ToString();
            string[] tagArray = tag.Split('-');
            if (tagArray.Length == 2) { 
            
            }

        }
    }
}