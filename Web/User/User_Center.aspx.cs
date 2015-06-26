using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.User
{
    public partial class User_Center : System.Web.UI.Page
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
        string[] temp = new string[9];
        public String[] ability {
            get
            {
                return abilityTemp;
            }
        }
        string[] abilityTemp = new string[8];
        protected void Page_Load(object sender, EventArgs e)
        {
            string email = Session["email"].ToString();
            string userID = Session["userID"].ToString();
            Model.User userInfo = User.UserInfo(userID);
            temp[0] = userInfo.User_ID;
            temp[1] = userInfo.User_Name;
            temp[2] = userInfo.User_Password;
            temp[3] = userInfo.User_Level;
            temp[4] = userInfo.User_Price;
            temp[5] = userInfo.User_Phone;
            temp[6] = userInfo.User_Age;
            temp[7] = userInfo.User_Email;
            temp[8] = userInfo.User_Sex;
            double[] abilityTemp = User.GetUserAbility(userID);
            manitoOfAll.Value = Convert.ToString(abilityTemp[0]);
            speedOfAll.Value = Convert.ToString(abilityTemp[1]);
            errorOfAll.Value = Convert.ToString(abilityTemp[2]);
            timeOfAll.Value = Convert.ToString(abilityTemp[3]);
            manito.Value = "0.0";
            speed.Value = "0.0";
            error.Value = "0.0";
            time.Value = "0.0";
        }
    }
}