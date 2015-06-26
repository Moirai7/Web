using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using System.Net.Mail;
using System.Net;
using Model;
/// <summary>
/// Users 的摘要说明
/// 此类是 BL User
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 

namespace OxcoderBL
{
    public class EnterpriseInfoBL:OxcoderIBL.EnterpriseInfoIBL
    {
        public DataSet AllEnterpriseInfo()
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL en = factory.getEnterpriseInstance();
            return en.AllEnterpriseInfo();
        }
        public DataSet EnterpriceInfo(string id)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL en = factory.getEnterpriseInstance();
            return en.EnterpriceInfo(id);
        }
         public Enterprice GetEnterpriceID(string email){
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL en = factory.getEnterpriseInstance();
            Enterprice enterprice  = en.GetEnterpriceID(email);
            return enterprice;
        }
        public int RegisterEnterprice(string email, string password)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL user = factory.getUserInstance();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            Model.Enterprice enterprice = new Model.Enterprice();
            enterprice.Enterprice_ID = Guid.NewGuid().ToString();
            enterprice.Enterprice_Email = email;
            enterprice.Enterprice_Password = password;
            if (dalad.CheckEnterpriceEmail(email) == 0 && user.CheckUserEmail(email)==0)
            {
                return dalad.RegisterEnterprice(enterprice);
            }
            else
            {

                return 0;
            }
        }
        public int SendEnterpriceEmail(string emailTo)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            // dalad.SendEmail(id, md5);
            //TODO：发邮件
            MailMessage mailMsg = new MailMessage();
            mailMsg.From = new MailAddress("1509193642@qq.com");
            mailMsg.To.Add(emailTo);
            mailMsg.Subject = "请激活注册账号";
            string activeCode = Guid.NewGuid().ToString().Substring(0, 8);
            StringBuilder contentBuilder = new StringBuilder();
            contentBuilder.Append("请点击下面的链接完成激活注册");
            string type = "Enterprice";
            contentBuilder.Append("<a href='http://localhost:27067/Enterprice/Register_ReSuccess_Before.aspx?email=" + emailTo + "&activeCode=" + activeCode + "&type="+type+"'>http://localhost:15464/Register_Success.aspx?email=" + emailTo + "&activeCode=" + activeCode + "+激活</a>");
            mailMsg.Body = contentBuilder.ToString();
            mailMsg.IsBodyHtml = true;
            SmtpClient client = new SmtpClient();
            //开通qq邮箱的SMTP服务
            client.Host = "smtp.qq.com";
            //设置邮箱端口，pop3端口:110, smtp端口是:25   
            client.Port = 25;
            //设置超时时间  
            client.Timeout = 9999;
            //要输入邮箱用户名与密码  
            client.Credentials = new NetworkCredential("1509193642@qq.com", "hmh299222");
            if (dalad.SendEnterpriceEmail(emailTo, activeCode) != 0)
            {
                client.Send(mailMsg);
                return 1;
            }
            else
            {
                return 0;
            }
        }
          public Boolean ActiveEnterpriceAccount(string email, string activeCode)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            SqlDataReader rd = dalad.ActiveEnterpriceAccount(email);
              string activeCode2=null;
            if (rd.Read()) { 
             activeCode2 = rd["Enterprice_Md5"].ToString();
            }
            
            if (activeCode.Equals(activeCode2) && dalad.ChangeEnterpriceState(email) == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public Boolean EnterpriceLogin(String email, String password)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            Model.Enterprice enterprice = new Model.Enterprice();
            enterprice = dalad.EnterpriceLogin(email);
            if (enterprice.Enterprice_Password.Equals(password)&&enterprice.Enterprice_State.Equals("1"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public int SetPassword(string email, string newPwd)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            return dalad.SetPassword(email, newPwd);
        }
        public int UpdateEnterpriceInfo(string fullName,string enterpricePhone,string email) {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            return dalad.UpdateEnterpriceInfo(fullName,enterpricePhone,email);
        }
        public int UpdateEnterpriceInfo0(Enterprice enterprice)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            return dalad.UpdateEnterpriceInfo0(enterprice);
        }

        public int UpdateEnterpriceInfo1(string position,string email)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.EnterpriseInfoIDAL dalad = factory.getEnterpriseInstance();
            return dalad.UpdateEnterpriceInfo1(position, email);
        }
    }
}
