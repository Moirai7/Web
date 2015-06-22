using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprise
{
    public partial class Invite : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            reid.Value = Request.QueryString["reid"];

            OxcoderIBL.InviteIBL i = new OxcoderBL.InviteBL();
            int number = i.GetInviteNumByEntp(Session["id"].ToString());
            numDiv.InnerHtml = number + "";
            inviteNumVal.Value = number + "";

        }
        protected void send_Btn_Click(object sender, EventArgs e)
        {
            string[] mailTo = oneEmail.Value.Trim(',').Split(',');
            string subject = mailSubject.Value;
            string content = mailContent.InnerHtml.Replace("<br>", "\n");

            int len = mailTo.Length;
            if (len > Convert.ToInt32(inviteNumVal.Value))
            {
                invitehint.Style.Value = "display:block";
            }
            else
            {
                OxcoderIBL.InviteIBL i = new OxcoderBL.InviteBL();
                i.sendInvites(mailTo, subject, content, Session["id"].ToString());
                Response.Redirect("Recruit_list.aspx");
            }
        }
    }
}