using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;

namespace Web.User
{
    public partial class User_Index : System.Web.UI.Page
    {

        public string Name
        {
            get
            {
                if (Session["username"] != null)
                {
                    //Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                    return Session["username"].ToString();
                }
                else
                {
                    Session["username"] = "LanLan";
                    //Session["id"] = "be87e55c-cafd-4a19-b167-dbe9e3de30d8";
                }

                return "姓名";
            }
        }

        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                SetBind();
            }
        }

        private void SetBind()
        {
            Page.DataBind();

        }
    }
}