using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;
/// <summary>
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/26
///
namespace Web.Admin
{
    public partial class Admin_AddQuiz : System.Web.UI.Page
    {
        private string uploadDirectory;  // 文件保存路径
        protected void Page_Load(object sender, EventArgs e)
        {
            // 默认将文件保存到站点根目录下的Uploads中
            uploadDirectory = Path.Combine(Request.PhysicalApplicationPath, "Quiz");
        }
        protected void btnUpload_Click(object sender, EventArgs e)
        {
            // 判断是否有文件提交.
            if (Quiz_Info.PostedFile.FileName == "")
            {
            }
            else
            {
                // 判断文件大小是否超过200KB.
                if (Quiz_Info.PostedFile.ContentLength > 204800)
                {
                }
                else
                {
                    // 判断文件类型.
                    string extension = Path.GetExtension(Quiz_Info.PostedFile.FileName);
                    switch (extension.ToLower())
                    {
                        case ".txt":
                            break;
                        default:
                            return;
                    }
                    // 以下代码是保持文件到服务器uploadDirectory中。
                    //文件名维持原文件名不变。
                    string serverFileName = Path.GetFileName(Quiz_Info.PostedFile.FileName);
                    string fullUploadPath = Path.Combine(uploadDirectory, serverFileName);

                    Quiz_Info.PostedFile.SaveAs(fullUploadPath);  // 上传文件
                    // lblInfo.Text += fullUploadPath;
                    string qname = Quiz_Name.Text.ToString();
                    string qcontent = Quiz_Content.Text.ToString();
                    string qinfo = "/Quiz/" + serverFileName;
                    string qtype = Quiz_Type.Text.ToString();
                    int qlevel = Convert.ToInt32(Quiz_Level.Text.ToString());
                    int qtime = Convert.ToInt32(Quiz_Time.Text.ToString());
                    string qinput = Quiz_Input.Text.ToString();
                    string qoutput = Quiz_Output.Text.ToString();
                    Model.QuizForDB db = new Model.QuizForDB();
                    db.Quiz_ID = Guid.NewGuid();
                    db.Quiz_Name = qname;
                    db.Quiz_Output = qoutput;
                    db.Quiz_Info = qinfo;
                    db.Quiz_Content = qcontent;
                    db.Quiz_Input = qinput;
                    db.Quiz_Level = qlevel;
                    db.Quiz_Time = qtime;
                    db.Quiz_Type = qtype;
                    OxcoderIBL.QuizInfoIBL User = new OxcoderBL.QuizInfoBL();
                    User.insertAQuiz(db);
                    
                }

            }
        }
    }
}