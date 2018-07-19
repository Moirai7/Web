using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprice
{

    public partial class Enterprice_Index : System.Web.UI.Page
    {
        public string enterprice_name
        {
            get
            {
                return Session["enterpriceName"].ToString();
                //return "北京交通大学";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {

        }
    }
}