using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

/// <summary>
/// Admin 的摘要说明
/// 
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/30
/// 
namespace Web
{
    public partial class Admin : System.Web.UI.Page
    {
        //GuestBookDataContext ctx = new GuestBookDataContext("Data Source=HMH-PC;Initial Catalog=GuestBook;Integrated Security=True");
        OxcoderIBL.UserIBL user = new OxcoderBL.UserBL();

        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                SetBind();
            }
            Response.Write("<center>");
            for (int i = 0; i < 4; i++)
            {
                Response.Write("<p>" + Request.QueryString["username"] + "</p>");
            }
            Response.Write("</center>");
            username.Text = Request.QueryString["username"]+Request.QueryString["info"];
        }

        protected void rpt_Message_ItemCommand(object source, RepeaterCommandEventArgs e)
        {
            if (e.CommandName == "DeleteMessage")
            {
                Model.User gb = new Model.User();
                gb.user_id = new Guid(e.CommandArgument.ToString()).ToString();
                user.DeleteUser(gb);
                SetBind();
            }
            else if (e.CommandName == "SendReply")
            {
                Model.User gb = new Model.User();
                gb.user_id = new Guid(e.CommandArgument.ToString()).ToString();
                gb.user_isReplied = true;
                gb.user_reply = ((TextBox)e.Item.FindControl("tb_Reply")).Text;
                user.Update(gb);
                SetBind();
            }
        }


        private void SetBind()
        {
            rpt_Message.DataSource = user.AllUserInfo();
            rpt_Message.DataBind();
            //rpt_Message.DataSource = from gb in ctx.tbGuestBook orderby gb.PostTime descending select gb;
        }
    }
}