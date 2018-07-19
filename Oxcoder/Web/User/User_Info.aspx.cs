using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using Model;
namespace Web.User
{
    public partial class User_Info : System.Web.UI.Page
    {
        OxcoderIBL.UserIBL User = new OxcoderBL.UserBL();
        public string Name
        {
            get
            {
                return Session["username"].ToString();
            }
        }
        public String[] user0 {
            get {
                return temp;
            }
        }
        string[] temp = new string[6];
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string email = Session["email"].ToString();
                string userID = Session["userID"].ToString();
                Model.User user = User.UserInfo(userID);
                temp[0] = user.User_ID;
                temp[1] = user.User_Name;
                temp[2] = user.User_Phone;
                temp[3] = user.User_Email;
                temp[4] = user.User_Age;
                temp[5] = user.User_Sex;
            }
        }

        protected void ChangeUserInfo(object sender, EventArgs e)
        {
            string userName = Request.Form["name"];
            string userPhone = Request.Form["phone"];
            string userAge = Request.Form["age"];
            string userSex = null;
            if (radio1.Checked)
            {
                userSex = "1";
            }
            else {
                userSex = "0";
            }
            string userID = Session["userID"].ToString();
            Model.User user = new Model.User();
            user.User_ID = userID;
            user.User_Name = userName;
            user.User_Phone = userPhone;
            user.User_Age = userAge;
            user.User_Sex = userSex;
            Session["username"] = userName;
            User.UpdateUserInfo(user);
            Response.Redirect("User_Center.aspx");
        }
    }
}