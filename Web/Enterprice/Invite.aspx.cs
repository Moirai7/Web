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
        public string Name
        {
            get
            {
                if (Session["enterpriceName"] != null)
                {
                    return Session["enterpriceName"].ToString();
                }
                else
                {
                    Session["enterpriceName"] = "dyt有限公司";
                }
                return "公司";
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
            reid.Value = Request.QueryString["reid"];
            rname.InnerHtml = Request.QueryString["rname"];
            OxcoderIBL.InviteIBL i = new OxcoderBL.InviteBL();
            int number = i.GetInviteNumByEntp(Session["enterpriceID"].ToString());
            numDiv.InnerHtml = number + "";
            inviteNumVal.Value = number + "";
            Page.DataBind();
        }

        protected void send_Btn_Click(object sender, EventArgs e)
        {
            string[] mailTo = oneEmail.Value.Trim(',').Split(',');
            string subject = Session["enterpriceName"].ToString() + mailSubject.Value;
            string content = mailContent.InnerHtml;
            content = content.Replace("<br>", "<br />");
            content = content.Replace("[公司]", Session["enterpriceName"].ToString());
            content = content.Replace("[时间]", System.DateTime.Now.ToString());
            content = content.Replace("[链接]", "www.oxcoder.com/Test.aspx?reid="+reid.Value);
            int len = mailTo.Length;
            if (len > Convert.ToInt32(inviteNumVal.Value))
            {
                invitehint.Style.Value = "display:block";
            }
            else
            {
                OxcoderIBL.InviteIBL invit = new OxcoderBL.InviteBL();
                invit.sendInvites(mailTo, subject, content, Session["enterpriceID"].ToString());
                Response.Redirect("Recruit_list.aspx");
            }
        }
    }
}