﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;

namespace Web.Enterprise
{
    public partial class Account : System.Web.UI.Page
    {
         public string Name
            {
                get{
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
        protected void SetBind()
        {
            Session["name"] = "北京钓鱼台有限公司";
            Session["id"] = "54bf6567-1007-11d1-b0aa-444553540101";
            OxcoderIBL.PayIBL pibl = new OxcoderBL.PayBL();
            DataSet ds = pibl.GetAccountDetail(Session["id"].ToString());
            int inv = Convert.ToInt32(ds.Tables[0].Rows[0][0]);
            int chlg = Convert.ToInt32(ds.Tables[0].Rows[0][1]);

            AccountLeft.InnerHtml = inv+" 个邀请 + "+chlg+" 个挑战";
            inviteNum.InnerHtml = inv+"";

            Page.DataBind();
        }
    }
}