using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using System.Web.Script.Serialization;
using System.IO;
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
    public partial class User_Test_Quiz : System.Web.UI.Page
    {
        OxcoderIBL.Test_QuizInfoIBL search = new OxcoderBL.Test_QuizInfoBL();

        protected void Page_Load(object sender, EventArgs e)
        {
            string pid = Request.Form["pid"];
            string reid = Request.Form["reid"];
            int order = Convert.ToInt32(Request.Form["order"]);


            Model.Quiz p1 = search.searchQuizInfo(reid,order);
            p1.code = ReadData(p1.codepath);

            JavaScriptSerializer js = new JavaScriptSerializer();
            //json序列化  
            string response = js.Serialize(p1);
            Response.Clear();
            Response.Write(response);
            Response.End();

        }

        private string ReadData(string fname)
        {
            string str = "";
            if (!File.Exists(System.Web.HttpContext.Current.Server.MapPath(fname)))
            {
                Console.WriteLine("{0} does not exist.", fname);
                return null;
            }
            else
            {
                StreamReader sr = new StreamReader(System.Web.HttpContext.Current.Server.MapPath(fname), System.Text.Encoding.Default);
                string input = sr.ReadToEnd();
                sr.Close();
                str = input;
            }
            return str;
        }  
    }
}