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
        private String _user_name;
        public String user_name
        {
            get { return _user_name; }
            set { _user_name = value; }
        }
        private String _user_id;
        public String user_id
        {
            get { return _user_id; }
            set { _user_id = value; }
        }
        private DateTime _user_postTime;
        public DateTime user_postTime
        {
            get { return _user_postTime; }
            set { _user_postTime = value; }
        }
        private String _user_message;
        public String user_message
        {
            get { return _user_message; }
            set { _user_message = value; }
        }
        private bool _user_isReplied;
        public bool user_isReplied
        {
            get { return _user_isReplied; }
            set { _user_isReplied = value; }
        }
        private String _user_reply;
        public String user_reply
        {
            get { return _user_reply; }
            set { _user_reply = value; }
        }
    }
}