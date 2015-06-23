using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using Model;
/// <summary>
/// Users 的摘要说明
/// 此类是 DAL User
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 

namespace OxcoderDAL
{
    public class UserDAL : OxcoderIDAL.UserIDAL
    {
       
   
        //public DataSet AllUserInfo()
        //{
        //    String sql = "select * from [User]";
        //    return Common.DB.dataSet(sql);
        //}
        //public int Insert(Model.User user)
        //{
        //    StringBuilder sql = new StringBuilder();
        //    sql.Append("insert into [tbGuestBook] (ID,UserName,PostTime,Message,IsReplied,Reply) values(@ID,@UserName,@PostTime,@Message,@IsReplied,@Reply)");
        //    SqlParameter[] par ={
                                   
        //                            new SqlParameter("@ID",SqlDbType.VarChar,50),
        //                            new SqlParameter("@UserName",SqlDbType.VarChar,50),
        //                            new SqlParameter("@PostTime",SqlDbType.DateTime),
        //                            new SqlParameter("@Message",SqlDbType.VarChar,400),
        //                            new SqlParameter("@IsReplied",SqlDbType.Bit),
        //                            new SqlParameter("@Reply",SqlDbType.VarChar,400)
        //                        };

        //    par[0].Value = user.user_id;
        //    par[1].Value = user.user_name;
        //    par[2].Value = user.user_postTime;
        //    par[3].Value = user.user_message;
        //    par[4].Value = user.user_isReplied;
        //    par[5].Value = user.user_reply;
        //    return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        //}
        public int Count()
        {
            string sql = "select count(*) from [User] ";
            int result = Convert.ToInt32(Common.DB.ExecuteScalar(sql));
            return result;
        }
        public SqlDataReader UserInfo(Model.User user)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select * from [User] where User_ID=@id");
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.Text)
                                };
            par[0].Value = user.User_ID;
            return Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
        }
        public int CheckUserEmail(string email)
        {
            string sql = "select count(*) from [User] where User_Email like'" + email + "'";
            int result = Convert.ToInt32(Common.DB.ExecuteScalar(sql));
            return result;
            //StringBuilder sql = new StringBuilder();
            //sql.Append("select * from [User] where User_Email like @email");
            //SqlParameter[] par ={
            //                        new SqlParameter("@email",SqlDbType.Text)
            //                    };
            //par[0].Value = email;
            //return Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
        }
        public int RegisterUser(Model.User user)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("insert into [User](User_ID,User_Email,User_Password,User_Name) values(@id,@email,@password,@username)");
            SqlParameter[] par ={
                                    new SqlParameter ("@id",SqlDbType.VarChar,50),
                                    new SqlParameter ("@email",SqlDbType.Text),
                                    new SqlParameter("@password",SqlDbType.Text),
                                    new SqlParameter("@username",SqlDbType.Text)
                                };
            par[0].Value = user.User_ID;
            par[1].Value = user.User_Email;
            par[2].Value = user.User_Password;
            par[3].Value = user.User_Email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public SqlDataReader ActiveUserAccount(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select User_Md5 from [User] where User_Email=@email");
            SqlParameter[] par ={
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = email;
            return Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
        }
        public int ChangeUserState(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update User set User_State = @state where User_Email=@email");
            SqlParameter[] par ={
                                    new SqlParameter("@state",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = 1;
            par[1].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public SqlDataReader GetUserID(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select User_ID from [User] where User_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = email;
           // SqlDataReader rd = Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
            //return rd["User_ID"].ToString();
            return Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
        }
        public int SendUserEmail(string email, string activeCode)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update [User] set User_MD5=@md5 where User_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@md5",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = activeCode;
            par[1].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public User UserLogin(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select User_Password,User_State from [User] where User_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@email",SqlDbType.VarChar)
                                };
            par[0].Value = email;
            SqlDataReader rd = Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
            Model.User user = new Model.User();
            if (rd.Read()) { 
            user.User_Password = rd["User_Password"].ToString();
            user.User_State = rd["User_State"].ToString();
        }
            return user;
        }
    }
}
