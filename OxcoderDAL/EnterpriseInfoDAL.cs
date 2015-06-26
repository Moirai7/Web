using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using Model;
/// <summary>
/// 搜索 的摘要说明
/// 此类是 DAL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
///
namespace OxcoderDAL
{
    public class EnterpriseInfoDAL : OxcoderIDAL.EnterpriseInfoIDAL
    {
        public DataSet AllEnterpriseInfo()
        {
            string sql = "select * from [Enterprice]";
            return Common.DB.dataSet(sql);
        }
        public DataSet EnterpriceInfo(string id)
        {
            String sql = "select * from [Enterprice] where Enterprice_ID=@id";
            SqlParameter[] par ={
                                    new SqlParameter("@id",SqlDbType.VarChar,50),
                                };
            par[0].Value = id;
            return Common.DbHelperSQL.Query(sql.ToString(), par);
        }
        public int CheckEnterpriceEmail(string email)
        {
            string sql = "select count(*) from [Enterprice] where Enterprice_Email like'" + email + "'";
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
        public int RegisterEnterprice(Model.Enterprice enterprice)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("insert into [Enterprice](Enterprice_ID,Enterprice_Email,Enterprice_Password,Enterprice_FullName) values(@id,@email,@password,@username)");
            SqlParameter[] par ={
                                    new SqlParameter ("@id",SqlDbType.VarChar,50),
                                    new SqlParameter ("@email",SqlDbType.Text),
                                    new SqlParameter("@password",SqlDbType.Text),
                                    new SqlParameter("@username",SqlDbType.Text)
                                };
            par[0].Value = enterprice.Enterprice_ID;
            par[1].Value = enterprice.Enterprice_Email;
            par[2].Value = enterprice.Enterprice_Password;
            par[3].Value = enterprice.Enterprice_Email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int SendEnterpriceEmail(string email, string activeCode)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update [Enterprice] set Enterprice_MD5=@md5 where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@md5",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = activeCode;
            par[1].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public SqlDataReader ActiveEnterpriceAccount(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select Enterprice_Md5 from [Enterprice] where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = email;
            return Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
        }
        public int ChangeEnterpriceState(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update Enterprice set Enterprice_State = @state where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@state",SqlDbType.SmallInt),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = 1;
            par[1].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public Enterprice GetEnterpriceID(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select Enterprice_ID,Enterprice_FullName from [Enterprice] where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = email;
             SqlDataReader rd = Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
             Enterprice enterprice = new Enterprice();
             if (rd.Read()) {
                 enterprice.Enterprice_ID = rd["Enterprice_ID"].ToString();
                 enterprice.Enterprice_FullName = rd["Enterprice_FullName"].ToString();
             }
             return enterprice;
        }
        public Enterprice EnterpriceLogin(string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("select Enterprice_Password,Enterprice_State from [Enterprice] where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@email",SqlDbType.VarChar)
                                };
            par[0].Value = email;
            SqlDataReader rd = Common.DbHelperSQL.ExecuteReader(sql.ToString(), par);
            Model.Enterprice enterprice = new Model.Enterprice();
            if (rd.Read())
            {
                enterprice.Enterprice_Password = rd["Enterprice_Password"].ToString();
                enterprice.Enterprice_State = rd["Enterprice_State"].ToString();
            }
            return enterprice;
        }
        public int SetPassword(string email, string password)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update [Enterprice] set Enterprice_Password=@password where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@password",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = password;
            par[1].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int UpdateEnterpriceInfo(string fullName, string enterpricePhone,string email) {
            StringBuilder sql = new StringBuilder();
            sql.Append("update Enterprice set Enterprice_FullName=@fullName,Enterprice_Phone=@phone where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@fullName",SqlDbType.Text),
                                    new SqlParameter("@phone",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = fullName;
            par[1].Value = enterpricePhone;
            par[2].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int UpdateEnterpriceInfo0(Enterprice enterprice)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update Enterprice set Enterprice_FullName=@fullName,Enterprice_ShortName=@shortName,Enterprice_Url=@url,Enterprice_Introduction=@introduction,Enterprice_Location=@location,Enterprice_LocationCity=@locationCity,Enterprice_Scale=@scale where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@fullName",SqlDbType.Text),
                                    new SqlParameter("@shortName",SqlDbType.Text),
                                    new SqlParameter("@url",SqlDbType.Text),
                                    new SqlParameter("@introduction",SqlDbType.Text),
                                    new SqlParameter("@location",SqlDbType.Text),
                                    new SqlParameter("@locationCity",SqlDbType.Text),
                                    new SqlParameter("@scale",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)

                                };
            par[0].Value = enterprice.Enterprice_FullName;
            par[1].Value = enterprice.Enterprice_ShortName;
            par[2].Value = enterprice.Enterprice_Url;
            par[3].Value = enterprice.Enterprice_Introduction;
            par[4].Value = enterprice.Enterprice_Location;
            par[5].Value = enterprice.Enterprice_LocationCity;
            par[6].Value = enterprice.Enterprice_Scale;
            par[7].Value = enterprice.Enterprice_Email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
        public int UpdateEnterpriceInfo1(string position,string email)
        {
            StringBuilder sql = new StringBuilder();
            sql.Append("update Enterprice set Enterprice_Position=@position where Enterprice_Email like @email");
            SqlParameter[] par ={
                                    new SqlParameter("@position",SqlDbType.Text),
                                    new SqlParameter("@email",SqlDbType.Text)
                                };
            par[0].Value = position;
            par[1].Value = email;
            return Common.DbHelperSQL.ExecuteSql(sql.ToString(), par);
        }
    }
}
