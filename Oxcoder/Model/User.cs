using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

/// <summary>
/// Users 的摘要说明
/// 此类为User的model
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/04/29
/// 
namespace Model
{
    public class User
    {
        private String _User_ID;
        public String User_ID
        {
            get { return _User_ID; }
            set { _User_ID = value; }
        }
        private String _User_Email;
        public String User_Email
        {
            get { return _User_Email; }
            set { _User_Email = value; }
        }
        private String _User_Password;

        public String User_Password
        {
            get { return _User_Password; }
            set { _User_Password = value; }
        }
        private String _User_Age;

        public String User_Age
        {
            get { return _User_Age; }
            set { _User_Age = value; }
        }
        private String _User_Sex;

        public String User_Sex
        {
            get { return _User_Sex; }
            set { _User_Sex = value; }
        }
        private String _User_Name;

        public String User_Name
        {
            get { return _User_Name; }
            set { _User_Name = value; }
        }
        private String _User_Level;

        public String User_Level
        {
            get { return _User_Level; }
            set { _User_Level = value; }
        }
        private String _User_Price;

        public String User_Price
        {
            get { return _User_Price; }
            set { _User_Price = value; }
        }
        private String _User_Phone;

        public String User_Phone
        {
            get { return _User_Phone; }
            set { _User_Phone = value; }
        }
        private String _User_State;

        public String User_State
        {
            get { return _User_State; }
            set { _User_State = value; }
        }
        private String _User_Md5;

        public String User_Md5
        {
            get { return _User_Md5; }
            set { _User_Md5 = value; }
        }
    }
}