using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using System.Net.Mail;
using System.Net;
//using Model.User;
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
    public class UserBL : OxcoderIBL.UserIBL
    {
    
        public int Count()
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            return dalad.Count();
        }
    
        public SqlDataReader UserInfo(Model.User user)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            return dalad.UserInfo(user);
        }
        public string GetUserID(string email){
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            SqlDataReader dr = dalad.GetUserID(email);
            string userID = null;
            if (dr.Read()) { 
            userID = dr["User_ID"].ToString();
            }
            return userID;
            
        }
    
        public int RegisterUser(string email, string password)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            Model.User user = new Model.User();
            user.User_ID = Guid.NewGuid().ToString();
            user.User_Email = email;
            user.User_Password = password;
            if (dalad.CheckUserEmail(email) == 0)
            {
                return dalad.RegisterUser(user);
            }
            else
            {

                return 0;
            }
        }
        public int SendUserEmail(string emailTo)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            // dalad.SendEmail(id, md5);
            //TODO：发邮件
            MailMessage mailMsg = new MailMessage();
            mailMsg.From = new MailAddress("1509193642@qq.com");
            mailMsg.To.Add(emailTo);
            mailMsg.Subject = "请激活注册账号";
            string activeCode = Guid.NewGuid().ToString().Substring(0, 8);
            StringBuilder contentBuilder = new StringBuilder();
            contentBuilder.Append("请点击下面的链接完成激活注册");
            contentBuilder.Append("<a href='http://localhost:27067/User/Register_Success.aspx/ActiveAccount?email=" + emailTo + "&activeCode=" + activeCode + "'>http://localhost:15464/Register_Success.aspx?email=" + emailTo + "&activeCode=" + activeCode + "+激活</a>");
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
            if (dalad.SendUserEmail(emailTo, activeCode) != 0)
            {
                client.Send(mailMsg);
                return 1;
            }
            else
            {
                return 0;
            }
        }
        public Boolean ActiveUserAccount(string email, string activeCode)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            SqlDataReader rd = dalad.ActiveUserAccount(email);
            string activeCode2 = rd["User_Md5"].ToString();
            if (activeCode.Equals(activeCode2) && dalad.ChangeUserState(email) == 1)
            {
                return true;
            }
            else
            {
                return false;
            }

        }
        //public int RegisterEnterprice(String email, String password)
        //{
        //    OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
        //    OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
        //    if (dalad.CheckUserEmail(email) == 0)
        //    {
        //        return dalad.RegisterEnterprice(email, password);
        //    }
        //    else
        //    {
        //        return 0;
        //    }

        //}

        public Boolean UserLogin(String email, String password)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            Model.User user = new Model.User();
            user = dalad.UserLogin(email);
            if (user.User_Password.Equals(password)&&user.User_State.Equals("1"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    }
}
