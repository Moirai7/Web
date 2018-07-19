using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class User_NextQuiz : System.Web.UI.Page
    {
        public int order = 0;
        public int time = -1;
        public string result = null;
        public string id = null;
        protected void Page_Load(object sender, EventArgs e)
        {
            OxcoderIBL.Test_QuizInfoIBL tq = new OxcoderBL.Test_QuizInfoBL();
            if (Request.Form["cid"] != null)
                id = Request.Form["cid"].ToString();
            if (Request.Form["order"] != null)
                order = Convert.ToInt32(Request.Form["order"].ToString())-1;

            if (Request.Form["time"] != null)
                time = Convert.ToInt32(Request.Form["time"].ToString());
            if (Request.Form["result"] != null)
                result = Request.Form["result"].ToString();

            if (time != -1)
            {
                tq.UpdateATest(Session["userID"].ToString(), id, order, time, result);
            }
        }
    }
}