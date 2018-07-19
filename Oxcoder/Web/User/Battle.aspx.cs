using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Script.Serialization;
using System.Data;
using System.Text; 

/// <summary>
/// 搜索 的摘要说明
/// 此类是 BL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/17
///
namespace Web.User
{
    public partial class Battle : System.Web.UI.Page
    {
        private int page = 0;
        private int flag = -1;
        private string salary = null;
        private string location = null;
        private string searchCondition = null;
        private int retype = -1;

        protected void Page_Load(object sender, EventArgs e)
        {
            OxcoderIBL.SearchChallengeIBL search = new OxcoderBL.SearchChallengeBL();

            if (Request.QueryString["salary"] != null && Request.QueryString["salary"] != "")
                salary = Request.QueryString["salary"].ToString();
            if (Request.QueryString["province"] != null && Request.QueryString["province"] != "")
                location = Request.QueryString["province"].ToString();
            if (Request.QueryString["searchCondition"] != null && Request.QueryString["searchCondition"] != "")
                searchCondition = Request.QueryString["searchCondition"].ToString();
            if (Request.QueryString["flag"] != null && Request.QueryString["flag"] != "")
                flag = Convert.ToInt32(Request.QueryString["flag"].ToString());
            if (Request.QueryString["page"] != null && Request.QueryString["page"] != "")
                page = Convert.ToInt32(Request.QueryString["page"].ToString());
            if (Request.QueryString["retype"] != null && Request.QueryString["retype"] != "")
                retype = Convert.ToInt32(Request.QueryString["retype"].ToString());

            DataSet ds = search.Search(page, 10,salary,location,retype,flag,searchCondition);
            if (ds.Tables[0].Rows.Count > 0)
            {
                JSONHelper jsonHelp = new JSONHelper();

                jsonHelp.success = true;
                jsonHelp.totlalCount = ds.Tables[0].Rows.Count ;
                jsonHelp.has_next = ds.Tables[0].Rows.Count > 0;

                foreach (DataRow dr in ds.Tables[0].Rows)
                {
                    jsonHelp.AddItem("RowNum", dr["RowNum"].ToString());
                    jsonHelp.AddItem("Challenge_ID", dr["Challenge_ID"].ToString());
                    jsonHelp.AddItem("Challenge_Name", dr["Challenge_Name"].ToString());
                    jsonHelp.AddItem("Enterprice_FullName", dr["Enterprice_FullName"].ToString());
                    jsonHelp.AddItem("Enterprice_ID", dr["Enterprice_ID"].ToString());
                    jsonHelp.AddItem("Enterprice_Logo", dr["Enterprice_Logo"].ToString());
                    jsonHelp.AddItem("Challenge_Salary", dr["Challenge_Salary"].ToString());
                    jsonHelp.AddItem("Challenge_Position0", dr["Challenge_Position0"].ToString());
                    jsonHelp.AddItem("Challenge_Position1", dr["Challenge_Position1"].ToString());
                    jsonHelp.AddItem("Challenge_Position2", dr["Challenge_Position2"].ToString());
                    jsonHelp.AddItem("Challenge_Quiz0", dr["Challenge_Quiz0"].ToString());
                    jsonHelp.AddItem("Challenge_Quiz1", dr["Challenge_Quiz1"].ToString());
                    jsonHelp.AddItem("Challenge_Quiz2", dr["Challenge_Quiz2"].ToString());
                    jsonHelp.AddItem("Challenge_Level", dr["Challenge_Level"].ToString());
                    jsonHelp.AddItem("Enterprice_FullName", dr["Enterprice_FullName"].ToString());
                    jsonHelp.AddItem("Challenge_EnTime", dr["Challenge_EnTime"].ToString());
                    jsonHelp.AddItem("Challenge_Num", dr["Challenge_Num"].ToString());

                    jsonHelp.ItemOk();
                }


                string strResult = jsonHelp.ToString();

                Response.Clear();
                Response.Write(strResult);
                Response.End();
            }
            else
            {
                Response.Clear();
                Response.Write("{\"data\":{\"has_next\": false,\"totalCount\":0},\"success\":true}");
                Response.End();
            }
        }
    }

    /// <summary>
    /// JSONHelper 的摘要说明
    /// </summary>
    public class JSONHelper
    {
        //对应JSON的singleInfo成员
        public string singleInfo = string.Empty;

        protected bool _has_next = true;
        protected bool _success = true;
        protected long _totalCount = 0;
        protected System.Collections.ArrayList arrData = new ArrayList();


        public JSONHelper()
        {

        }
        public static string ToJSON(object obj)
        {
            JavaScriptSerializer serializer = new JavaScriptSerializer();
            return serializer.Serialize(obj);
        }
        public static string ToJSON(object obj, int recursionDepth)
        {
            JavaScriptSerializer serializer = new JavaScriptSerializer();
            serializer.RecursionLimit = recursionDepth;
            return serializer.Serialize(obj);
        }

        //对应于JSON的success成员
        #region 设置success为TURE，代表成功
        public bool success
        {
            get
            {
                return _success;
            }
            set
            {
                _success = value;
            }
        }
        #endregion
        //对应于JSON的has_next成员
        public bool has_next
        {
            get
            {
                return _has_next;
            }
            set
            {
                _has_next = value;
            }
        }
        public long totlalCount
        {
            get { return _totalCount; }
            set { _totalCount = value; }
        }
        //重置，每次新生成一个json对象时必须执行该方法
        public void Reset()
        {
            _success = true;
            _has_next = true;
            singleInfo = string.Empty;
            arrData.Clear();
        }
        #region

        public void AddItem(string name, string value)
        {
            arrData.Add("\"" + name + "\":" + "\"" + value + "\"");
        }

        #endregion


        public void ItemOk()
        {
            arrData.Add("<BR>");
        }

        //序列化JSON对象，得到返回的JSON代码
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();

            sb.Append("{");

            sb.Append("\"data\":{\"blogs\":[");

            int index = 0;
            sb.Append("{");
            if (arrData.Count <= 0)
            {
                sb.Append("}]");
            }
            else
            {
                foreach (string val in arrData)
                {
                    index++;

                    if (val != "<BR>")
                    {
                        sb.Append(val + ",");
                    }
                    else
                    {
                        sb = sb.Replace(",", "", sb.Length - 1, 1);
                        sb.Append("},");
                        if (index < arrData.Count)
                        {
                            sb.Append("{");
                        }
                    }

                }
                sb = sb.Replace(",", "", sb.Length - 1, 1);
                sb.Append("]");
            }
            if(has_next)
                sb.Append(",\"has_next\": true,");
            else
                sb.Append(",\"has_next\": false,");
            sb.Append("\"totalCount\":" + totlalCount.ToString() + "},");
            sb.Append("\"success\":" + _success.ToString().ToLower());
            sb.Append("}");

            return sb.ToString();
        }
    }
}
