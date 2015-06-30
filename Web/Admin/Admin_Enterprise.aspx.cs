﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
/// <summary>
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/26
///
namespace Web.Admin
{
    public partial class Admin_Enterprise : System.Web.UI.Page
    {
        OxcoderIBL.EnterpriseInfoIBL User = new OxcoderBL.EnterpriseInfoBL();
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                SetBind();
            }
        }
        private void SetBind()
        {
            rpt_Challenge.DataSource = User.AllEnterpriseInfo();

            // rpt_Challenge.DataSource = search.SearchByUser(Session["id"].ToString(), reustate, flag, page, 10);
            Page.DataBind();
        }
    }
}