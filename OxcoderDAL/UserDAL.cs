using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

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
        public DataSet DSUser(int pageindex, int pagesize, String table)
        {
            String sql = "select * from [tbGuestBook]";
            return Common.DB.PagedataSet(sql, pageindex, pagesize, table);
        }
        public int Update(Model.User user)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update [tbGuestBook] set IsReplied=@IsReplied,Reply=@Reply where ID=@ID");
            SqlParameter[] par ={
                                    new SqlParameter("@ID",SqlDbType.VarChar,50),
                                    new SqlParameter("@IsReplied",SqlDbType.Bit),
                                    new SqlParameter("@Reply",SqlDbType.VarChar,400)
                                    
                                };
            par[0].Value = user.user_id;
            par[1].Value = user.user_isReplied;
            par[2].Value = user.user_reply;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public DataSet AllUserInfo()
        {
            String sql = "select * from [tbGuestBook]";
            return Common.DB.dataSet(sql);
        }
        public int Insert(Model.User user)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("insert into [tbGuestBook] (ID,UserName,PostTime,Message,IsReplied,Reply) values(@ID,@UserName,@PostTime,@Message,@IsReplied,@Reply)");
            SqlParameter[] par ={
                                   
                                    new SqlParameter("@ID",SqlDbType.VarChar,50),
                                    new SqlParameter("@UserName",SqlDbType.VarChar,50),
                                    new SqlParameter("@PostTime",SqlDbType.DateTime),
                                    new SqlParameter("@Message",SqlDbType.VarChar,400),
                                    new SqlParameter("@IsReplied",SqlDbType.Bit),
                                    new SqlParameter("@Reply",SqlDbType.VarChar,400)
                                };

            par[0].Value = user.user_id;
            par[1].Value = user.user_name;
            par[2].Value = user.user_postTime;
            par[3].Value = user.user_message;
            par[4].Value = user.user_isReplied;
            par[5].Value = user.user_reply;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int Count()
        {
            string sql = "select count(*) from [tbGuestBook] ";
            int result = Convert.ToInt32(Common.DB.ExecuteScalar(sql));
            return result;
        }
        public int DeleteUser(Model.User user)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("delete from [tbGuestBook] where ID=@id");
            SqlParameter[] par ={
                                    new SqlParameter ("@id",SqlDbType.VarChar)
                                };
            par[0].Value = user.user_id;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public SqlDataReader UserInfo(Model.User user)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select * from [tbGuestBook] where ID=@id");
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.VarChar)
                                };
            par[0].Value = user.user_id;
            return Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
        }
    }
}
