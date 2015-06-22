using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;

/// <summary>
/// Default 的摘要说明
/// 
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/30
/// 
namespace Web
{
    public partial class Default : System.Web.UI.Page
    {
        //GuestBookDataContext ctx = new GuestBookDataContext("Data Source=EMMA;Initial Catalog=GuestBook;Integrated Security=True");
        //OxcoderIBL.UserIBL user = new OxcoderBL.UserBL();

        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                SetBind();
            }
            if (Session["name"] != null)
            {
                info.Text = Request.Cookies["login"].Value;
            }
            //if(Request.Cookies["login"] != null){
            //    info.Text = Request.Cookies["login"].Value;
            //}

            DriveInfo[] allDrives = DriveInfo.GetDrives();
            foreach (DriveInfo d in allDrives)
            {
                if (d.IsReady == true)
                {
                    //TreeNode node = new TreeNode();
                    //node.Value = d.Name;
                    //this.TreeView1.Nodes.Add(node);
                    //TreeNode childNode = new TreeNode();
                    //childNode.Value = d.DriveFormat;
                    //this.TreeView1.Nodes.Add(childNode);
                }
            }
        }

        //写文件
        protected void btnWrite_Click(object sender, EventArgs e)
        {
            string bootDir = Server.MapPath("");  //获取当前路径
            string fileName = Path.Combine(bootDir, @"temp\binaryfile.bin");  //指定文件
            string directoryName = Path.GetDirectoryName(fileName);
            //文件夹不存在则新建
            if (!Directory.Exists(directoryName))
            {
                Directory.CreateDirectory(directoryName);
            }
            BinaryWriter bw = new BinaryWriter(File.OpenWrite(fileName));  //建立BinaryWriter
            string name = "李明";
            int age = 23;
            bw.Write(name);  //写字符串
            bw.Write(age);  //写整数
            bw.Flush();  //清理缓冲区，缓冲数据写入基础设备。
            bw.Close();  //关闭编写器并释放系统资源
        }

        //读文件
        protected void btnRead_Click(object sender, EventArgs e)
        {
            string bootDir = Server.MapPath("");  //获取当前路径
            string fileName = Path.Combine(bootDir, @"temp\binaryfile.bin");  //指定文件
            BinaryReader br = new BinaryReader(File.OpenRead(fileName));  //建立BinaryReader
            string name;
            int age;
            name = br.ReadString();
            age = br.ReadInt32();
            br.Close();  //关闭编写器并释放系统资源
            lblShow.Text = "Name:" + name + " Age:" + age.ToString();  //在lblShow显示文本内容
        }

        protected void btn_Redirect_Click(object sender, EventArgs e)
        {
            if (password.Text != null && info.Text != null)
            {
                HttpCookie co = new HttpCookie("login");
                co.Value = info.Text;
                co.Expires = DateTime.Now.AddDays(1);
                Response.Cookies.Add(co);

                Session["name"] = info.Text;

                string url = "Admin.aspx?username=" + password.Text + "&info=" + info.Text;
                Response.Redirect(url);
            }
        }
        protected void btn_SendMessage_Click(object sender, EventArgs e)
        {
            Model.User gb = new Model.User();
            //tbGuestBook gb = new tbGuestBook();
            gb.user_id = Guid.NewGuid().ToString();
            gb.user_name = tb_UserName.Text;
            gb.user_message = tb_Message.Text;
            gb.user_isReplied = false;
            gb.user_postTime = DateTime.Now;
            //ctx.tbGuestBook.InsertOnSubmit(gb);
            //ctx.SubmitChanges();
            //user.Insert(gb);
            SetBind();
        }
        private void SetBind()
        {
            //rpt_Message.DataSource = user.AllUserInfo();
            //rpt_Message.DataSource = from gb in ctx.tbGuestBook orderby gb.PostTime descending select gb;
            rpt_Message.DataBind();
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            DirectoryInfo dir = new DirectoryInfo(TextBox1.Text);
            if (dir.Exists)
            {
                TreeNode node = new TreeNode();
                node.Value = dir.Name;
                this.TreeView1.Nodes.Add(node);
                this.Label1.Text = dirSize(dir, node).ToString();
            }
        }

        private long dirSize(DirectoryInfo dir,TreeNode tn)
        {
            long count = 0;
            FileInfo[] fi = dir.GetFiles();
            foreach(FileInfo aFile in  fi){
                TreeNode nodeDi = new TreeNode();
                nodeDi.Value = aFile.Name;
                this.TreeView1.Nodes.Add(nodeDi);
                count += aFile.Length;
            }
            DirectoryInfo[] di = dir.GetDirectories();
            foreach (DirectoryInfo aDir in di)
            {
                TreeNode nodeDi = new TreeNode();
                nodeDi.Value = aDir.Name;
                this.TreeView1.Nodes.Add(nodeDi);
                dirSize(aDir,nodeDi);
            }
            return count;
        }
    }
}