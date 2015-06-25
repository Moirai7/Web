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
    
        public User UserInfo(string userID)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            User userInfo = new User();
            SqlDataReader rd = dalad.UserInfo(userID);
            if(rd.Read()){
                userInfo.User_ID = rd["User_ID"].ToString();
                userInfo.User_Email = rd["User_Email"].ToString();
                userInfo.User_Name = rd["User_Name"].ToString();
                userInfo.User_Password = rd["User_Password"].ToString();
                userInfo.User_Age =  rd["User_Age"].ToString();
                userInfo.User_Level = rd["User_Level"].ToString();
                userInfo.User_Price = rd["User_Price"].ToString();
                userInfo.User_Phone = rd["User_Phone"].ToString();
                userInfo.User_Sex = rd["User_Sex"].ToString(); 
            }
            return userInfo;
        }
        public User GetUserID(string email){
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            SqlDataReader dr = dalad.GetUserID(email);
            Model.User user = new Model.User();
            if (dr.Read()) { 
            user.User_ID = dr["User_ID"].ToString();
            user.User_Name = dr["User_Name"].ToString();

            }
            return user;
            
        }
    
        public int RegisterUser(string email, string password)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            OxcoderIDAL.EnterpriseInfoIDAL enterprice = factory.getEnterpriseInstance();
            Model.User user = new Model.User();
            user.User_ID = Guid.NewGuid().ToString();
            user.User_Email = email;
            user.User_Password = password;
            if (dalad.CheckUserEmail(email) == 0 && enterprice.CheckEnterpriceEmail(email)==0)
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
            string type = "User";
            contentBuilder.Append("<a href='http://localhost:27067/User/Register_Success_Before.aspx?email=" + emailTo + "&activeCode=" + activeCode + "&type="+type+"'> http://localhost:15464/Register_Success.aspx?email=" + emailTo + "&activeCode=" + activeCode + "+激活</a>");
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
            string activeCode2 = dalad.ActiveUserAccount(email);
            if (activeCode.Equals(activeCode2) && dalad.ChangeUserState(email) == 1)
            {
                return true;
            }
            else
            {
                return false;
            }

        }

        public Boolean UserLogin(String email, String password)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            Model.User user = new Model.User();
            user = dalad.UserLogin(email);
            if (user.User_Password!=null)
            {
                if (user.User_Password.Equals(password)&&user.User_State.Equals("1"))
                {
                    return true;
                }
                else {
                    return false;
                }
                
            }
            else
            {
                return false;
            }
        }

        public int SendResetEmail(string email) {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            OxcoderIDAL.EnterpriseInfoIDAL en = factory.getEnterpriseInstance();
            // dalad.SendEmail(id, md5);
            //TODO：发邮件
            MailMessage mailMsg = new MailMessage();
            mailMsg.From = new MailAddress("1509193642@qq.com");
            mailMsg.To.Add(email);
            mailMsg.Subject = "请重置密码";
            string activeCode = Guid.NewGuid().ToString().Substring(0, 8);
            StringBuilder contentBuilder = new StringBuilder();
            contentBuilder.Append("请点击下面的链接完成密码重置");
            contentBuilder.Append("<a href='http://localhost:27067/Common/Reset_Password_Before.aspx?email=" + email + "&activeCode=" + activeCode + "'>http://localhost:15464/Reset_Password.aspx?email=" + email + "&activeCode=" + activeCode + "+激活</a>");
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
            int state = 0;
            //判断用户类型
            if (dalad.CheckUserEmail(email) == 1)
            {
                if (dalad.SendUserEmail(email, activeCode) != 0)
                {
                    client.Send(mailMsg);
                    state = 1;
                }
                else
                {
                    state = 0;
                    
                }
            }else if(en.CheckEnterpriceEmail(email) == 1){
                if (en.SendEnterpriceEmail(email, activeCode) != 0)
                {
                    client.Send(mailMsg);
                    state = 1;
                }
                else
                {
                    state = 0;
                    
                }
            }
            return state;
        }
        //提交重置密码
        public int SetPassword(string email,string newPwd) {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            return dalad.SetPassword(email,newPwd);
        }
        public int UpdateUserInfo(User user) {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.UserIDAL dalad = factory.getUserInstance();
            return dalad.UpdateUserInfo(user);
        }
    }
}
