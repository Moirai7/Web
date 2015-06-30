using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Data;

namespace Web.Enterprise
{
    public partial class History : System.Web.UI.Page
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
            OxcoderIBL.EnterpriseChallengeIBL ec = new OxcoderBL.EnterpriseChallengeBL();
            DataSet ds = ec.GetChallengeBriefByOwner(Session["enterpriceID"].ToString(), "0");

            string s = "";
            int i = 0;
            int count = ds.Tables[0].Rows.Count;
            for (i = 0; i < count; i++)
            {
                s += "<div class=\"row\"><div class=\"col-md-12\"><div class=\"panel panel-default project \"><div class=\"panel-body\"><div class=\"row\"><!-- new start--><div class=\"col-md-5\"><h2 style=\"margin: 12px 0 2px 0;\"><a href=\"http://www.oxcoder.com/hr-recruit-resume-list.action?reid=1116&searchOrder=ranking\">[";
                if (Convert.ToInt32(ds.Tables[0].Rows[i][1]) < 3)
                { s += "初级"; }
                else if (Convert.ToInt32(ds.Tables[0].Rows[i][1]) < 5)
                { s += "中级"; }
                else
                { s += "高级"; }
                s += "]" + ds.Tables[0].Rows[i][0] + "</a></h2><div style=\"width: 280px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\"><small>[" + ds.Tables[0].Rows[i][2].ToString().Substring(0, 8) + "] " + ds.Tables[0].Rows[i][3] + " " + ds.Tables[0].Rows[i][4] + " " + ds.Tables[0].Rows[i][5] + "</small></div></div><div class=\"col-md-2\"><ul class=\"list-unstyled\" style=\"margin: 7px 0;\"><li><span class=\"badge badge-info\">" + ds.Tables[0].Rows[i][6] + "</span>个新接受</li><li><span class=\"badge badge-danger\">" + ds.Tables[0].Rows[i][7] + "</span>个新完成</li></ul></div><div class=\"col-md-2\"><ul class=\"list-unstyled\" style=\"margin: 20px 0;\"><li><span class=\"red\">" + ds.Tables[0].Rows[i][8] + "</span>%已合格</li></ul></div><div class=\"col-md-3\"><a href=\"Resume.aspx?reid=" + ds.Tables[0].Rows[i][9] + "\"><button type=\"button\" class=\"btn btn-new1\">去筛选</button></a> <a href=\"Invite.aspx?reid=" + ds.Tables[0].Rows[i][9] + "\"></a></div><!-- new end--></div><!-- /.row --></div><!-- /.panel-footer --></div><!-- /.panel --></div></div><!-- /.row -->";
            }

            HistoryList.InnerHtml = s;

            Page.DataBind();
        }
    }
}