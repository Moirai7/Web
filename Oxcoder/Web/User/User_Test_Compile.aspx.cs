using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Script.Serialization;
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
    public partial class User_Test_Compile : System.Web.UI.Page
    {
        OxcoderIBL.IProgram ip = new OxcoderBL.Program();
        protected void Page_Load(object sender, EventArgs e)
        {
            string code = Request.Form["code"];
            int lang = Convert.ToInt32(Request.Form["lang"]);
            string input = Request.Form["input"];

            if (ip.createSub(code, lang, input))
            {
                System.Threading.Thread.Sleep(5 * 1000);
                Model.Compile p1 = ip.getStatus();

                JavaScriptSerializer js = new JavaScriptSerializer();
                //json序列化  
                string response = js.Serialize(p1);
                Response.Clear();
                Response.Write(response);
                Response.End();
            }
            else
            {
                Model.Compile com = new Model.Compile();
                com.StatusCode = -2;
                com.RunInfo = "ERROR";

                JavaScriptSerializer js = new JavaScriptSerializer();
                //json序列化  
                string response = js.Serialize(com);
                Response.Clear();
                Response.Write(response);
                Response.End();
            }
        }
    }
}