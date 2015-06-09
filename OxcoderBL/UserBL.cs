using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

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
        public DataSet DSUser(int pageindex, int pagesize, String table)
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.DSUser(pageindex,pagesize,table);
        }
        public int Count()
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.Count();
        }
        public int DeleteUser(Model.User user)
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.DeleteUser(user);
        }
        public SqlDataReader UserInfo(Model.User user)
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.UserInfo(user);
        }
        public int Insert(Model.User user)
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.Insert(user);
        }
        public DataSet AllUserInfo()
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.AllUserInfo();
        }
        public int Update(Model.User user)
        {
            OxcoderIDAL.UserIDAL dalad = new OxcoderDAL.UserDAL();
            return dalad.Update(user);
        }
    }
}
