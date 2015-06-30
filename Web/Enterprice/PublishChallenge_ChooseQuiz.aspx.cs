using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

namespace Web.Enterprise
{
    public partial class PublishChallenge_ChooseQuiz : System.Web.UI.Page
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

        private void SetBind(){
            string tags = "";
            string[] tagGroup = null;
            string chosenStr = "";
            int tagNum, starNum = 0;
            int tagCount, starCount = 0;
            bool addFlag = true;
            string[] exercise = { "" };
            string excStr = "";
            string pid = "";
            OxcoderIBL.EnterpriseChallengeIBL ec = new OxcoderBL.EnterpriseChallengeBL();

            int level = Convert.ToInt32(Request.Form["relevel"]);
            int type = Convert.ToInt32(Request.Form["retype"]);
            if (Request.QueryString["flag"] == "new" || Request.QueryString["flag"] == "del")
            {
                level = Convert.ToInt32(Request.QueryString["level"]);
                type = Convert.ToInt32(Request.QueryString["type"]);
                pid = Request.QueryString["pid"];
                excStr = Request.QueryString["exercise"];
                exercise = excStr.Split(',');
                if (Request.QueryString["flag"] == "new")
                {
                    if (exercise.Length == 4)
                    {
                        wrongTip.InnerHtml = "最多三个！";
                    }
                    else if (exercise.Length == 1)
                    {
                        excStr += "," + pid;
                    }
                    else
                    {
                        excStr += "," + pid;
                    }
                }
                if (Request.QueryString["flag"] == "del")
                {
                    if (exercise.Length == 1)
                    {
                        wrongTip.InnerHtml = "已经没有啦！";
                    }
                    else
                    {
                        string temp = "," + pid.ToString();
                        excStr = excStr.Replace(temp, null);
                    }
                }
            }

            if (Request.Form["flag"] == "sub")
            {
                string subExc = Request.Form["exercise"];
                string lev = Request.Form["level"];
                string typ = Request.Form["type"];
                bool flag = ec.PublishChallenge(subExc, Session["enterpriceID"].ToString(), lev, typ);
                if (flag == true)
                {
                    Response.Redirect("Recruit_list.aspx");
                }
                else
                {
                    Response.Write("<script>alert(\"挑战余额不足，请先充值您的账户！\");</script>");
                }
            }

            exercise = excStr.Split(',');


            DataSet ds = ec.GetMatchQuizs(level, type);
            if (exercise.Length == 1)
            {
                //没有选中的
                chosenStr = "<div class=\"alert alert-info\" style=\"text-align: center\"role=\"alert\">还没有选择测试题目<ahref=\"hr-set-challenge.action?relevel=3&flag=random\"style=\"margin-left: 20px;\">智能生成</a></div>";
            }
            else if (exercise.Length == 4)
            {
                //选满三个
                for (int k = 1; k < 4; k++)
                {
                    for (int i = 0; i < ds.Tables[0].Rows.Count; i++)
                    {
                        if (ds.Tables[0].Rows[i][4].ToString().Equals(exercise[k] + ""))
                        {
                            chosenStr = chosenStr + "<div id=\"" + ds.Tables[0].Rows[i][4] + "\"class=\"col-md-4\"><div class=\"panel panel-default project\"><div class=\"panel-body\" style=\"padding-bottom: 0;\"><div class=\"row\"><div class=\"col-xs-12\"><div class=\"pull-left\"><h4> " + ds.Tables[0].Rows[i][0] + " </h4><h5 class=\"text-muted\">by " + ds.Tables[0].Rows[i][2] + "</h5></div><div class=\"pull-right client-info\"><a style=\"color: white\"href=\"PublishChallenge_ChooseQuiz.aspx?flag=del&pid=" + ds.Tables[0].Rows[i][4] + "&exercise=" + excStr + "&level=" + level + "&type=" + type + "\"class=\"btn btn-primary btn-sm\">删除</a></div></div><!-- /.col-xs-12 --><div class=\"col-md-12\" style=\"min-height: 68px;\"><ul class=\"companyTags\">";
                            tags = ds.Tables[0].Rows[i][1].ToString();
                            tagGroup = tags.Split('，');
                            tagNum = tagGroup.Length;
                            for (tagCount = 0; tagCount < tagNum; tagCount++)
                            {
                                chosenStr = chosenStr + "<li>" + tagGroup[tagCount] + "</li>";
                            }
                            chosenStr = chosenStr + "</ul></div></div><!-- /.row --></div><!-- /.panel-body --><div class=\"panel-footer\"><div class=\"row\"><div class=\"col-sm-4\"><span class=\"small muted\">项目难度</span></div><!-- /.col-sm-4 --><div class=\"col-sm-8\"><p>";
                            starNum = Convert.ToInt32(ds.Tables[0].Rows[i][3]);
                            for (starCount = 0; starCount < starNum; starCount++)
                            {
                                chosenStr = chosenStr + "<i class=\"fa fa-star\"></i>";
                            }

                            chosenStr = chosenStr + "</p></div><!-- /.col-sm-8 --></div><!-- /.row --></div><!-- /.panel-footer --></div><!-- /.panel --></div>";

                        }
                    }
                }
                chosenStr += "<form action=\"PublishChallenge_ChooseQuiz.aspx\"class=\"form-horizontal\" enctype=\"multipart/form-data\"method=\"post\"><input name=\"isChain\" type=\"hidden\" value=\"1\" /> <input name=\"reid\" type=\"hidden\"value=\"1356\" /> <input type=\"hidden\" name='exercise' value=\"" + excStr + "\" /> <input type=\"hidden\" name='level' value=\"" + level + "\" /><input type=\"hidden\" name='type' value=\"" + type + "\" /><input type=\"hidden\" name='flag' value=\"sub\" /> <input type=\"hidden\" name=\"order\" value=\"3\" /><div class=\"form-group form-actions\"><div class=\"col-md-12\" style=\"margin-bottom: 20px;\"><button type=\"submit\" class=\"btn btn-new1 pull-right\">保存&发布挑战</button></div></div></form>";
            }
            else
            {
                for (int k = 1; k < exercise.Length; k++)
                {
                    for (int i = 0; i < ds.Tables[0].Rows.Count; i++)
                    {
                        if (ds.Tables[0].Rows[i][4].ToString().Equals(exercise[k] + ""))
                        {
                            chosenStr = chosenStr + "<div id=\"" + ds.Tables[0].Rows[i][4] + "\"class=\"col-md-4\"><div class=\"panel panel-default project\"><div class=\"panel-body\" style=\"padding-bottom: 0;\"><div class=\"row\"><div class=\"col-xs-12\"><div class=\"pull-left\"><h4> " + ds.Tables[0].Rows[i][0] + " </h4><h5 class=\"text-muted\">by " + ds.Tables[0].Rows[i][2] + "</h5></div><div class=\"pull-right client-info\"><a style=\"color: white\"href=\"PublishChallenge_ChooseQuiz.aspx?flag=del&pid=" + ds.Tables[0].Rows[i][4] + "&exercise=" + excStr + "&level=" + level + "&type=" + type + "\"class=\"btn btn-primary btn-sm\">删除</a></div></div><!-- /.col-xs-12 --><div class=\"col-md-12\" style=\"min-height: 68px;\"><ul class=\"companyTags\">";
                            tags = ds.Tables[0].Rows[i][1].ToString();
                            tagGroup = tags.Split('，');
                            tagNum = tagGroup.Length;
                            for (tagCount = 0; tagCount < tagNum; tagCount++)
                            {
                                chosenStr = chosenStr + "<li>" + tagGroup[tagCount] + "</li>";
                            }
                            chosenStr = chosenStr + "</ul></div></div><!-- /.row --></div><!-- /.panel-body --><div class=\"panel-footer\"><div class=\"row\"><div class=\"col-sm-4\"><span class=\"small muted\">项目难度</span></div><!-- /.col-sm-4 --><div class=\"col-sm-8\"><p>";
                            starNum = Convert.ToInt32(ds.Tables[0].Rows[i][3]);
                            for (starCount = 0; starCount < starNum; starCount++)
                            {
                                chosenStr = chosenStr + "<i class=\"fa fa-star\"></i>";
                            }

                            chosenStr = chosenStr + "</p></div><!-- /.col-sm-8 --></div><!-- /.row --></div><!-- /.panel-footer --></div><!-- /.panel --></div>";

                        }
                    }
                }
                chosenStr += "<form action=\"hr-set-challenge.action\"class=\"form-horizontal\" enctype=\"multipart/form-data\"method=\"post\"><input name=\"isChain\" type=\"hidden\" value=\"1\" /> <input name=\"reid\" type=\"hidden\"value=\"1356\" /> <input type=\"hidden\" name='exercise' value=\"" + excStr + "\" /> <input type=\"hidden\" name='flag' value=\"sub\" /> <input type=\"hidden\" name=\"order\" value=\"3\" /><div class=\"form-group form-actions\"><div class=\"col-md-12\" style=\"margin-bottom: 20px;\"><button disabled type=\"submit\" class=\"btn btn-new1 pull-right\">请选择3道题目</button></div></div></form>";
            }

            chosenQuiz.InnerHtml = chosenStr;
            if (ds.Tables[0].Rows.Count < 3)
            {
                quizBoard.InnerHtml = "<a href=\"PublishChallenge_BaseInfo.aspx\">无法找到对应水平的足够试题！请返回重新选择！</a>";
                return;
            }
            string s = "";
            int quizNumber = ds.Tables[0].Rows.Count;
            for (int i = 0; i < quizNumber; i++)
            {
                for (int c = 0; c < exercise.Length; c++)
                {
                    if (ds.Tables[0].Rows[i][4].ToString().Equals(exercise[c] + ""))
                        addFlag = false;
                }
                if (addFlag)
                {
                    s = s + "<div id=\"" + ds.Tables[0].Rows[i][4] + "\"class=\"col-md-4\"><div class=\"panel panel-default project\"><div class=\"panel-body\" style=\"padding-bottom: 0;\"><div class=\"row\"><div class=\"col-xs-12\"><div class=\"pull-left\"><h4> " + ds.Tables[0].Rows[i][0] + " </h4><h5 class=\"text-muted\">by " + ds.Tables[0].Rows[i][2] + "</h5></div><div class=\"pull-right client-info\"><a style=\"color: white\"href=\"PublishChallenge_ChooseQuiz.aspx?flag=new&pid=" + ds.Tables[0].Rows[i][4] + "&exercise=" + excStr + "&level=" + level + "&type=" + type + "\"class=\"btn btn-primary btn-sm\">添加</a></div></div><!-- /.col-xs-12 --><div class=\"col-md-12\" style=\"min-height: 68px;\"><ul class=\"companyTags\">";
                    tags = ds.Tables[0].Rows[i][1].ToString();
                    tagGroup = tags.Split('，');
                    tagNum = tagGroup.Length;
                    for (tagCount = 0; tagCount < tagNum; tagCount++)
                    {
                        s = s + "<li>" + tagGroup[tagCount] + "</li>";
                    }
                    s = s + "</ul></div></div><!-- /.row --></div><!-- /.panel-body --><div class=\"panel-footer\"><div class=\"row\"><div class=\"col-sm-4\"><span class=\"small muted\">项目难度</span></div><!-- /.col-sm-4 --><div class=\"col-sm-8\"><p>";
                    starNum = Convert.ToInt32(ds.Tables[0].Rows[i][3]);
                    for (starCount = 0; starCount < starNum; starCount++)
                    {
                        s = s + "<i class=\"fa fa-star\"></i>";
                    }

                    s = s + "</p></div><!-- /.col-sm-8 --></div><!-- /.row --></div><!-- /.panel-footer --></div><!-- /.panel --></div>";
                }
                addFlag = true;
            }

            quizBoard.InnerHtml = s;

            Page.DataBind();
        }
    }
}