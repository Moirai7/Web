using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
using OxcoderIBL;

namespace OxcoderBL
{
    public class EnterpriseChallengeBL : OxcoderIBL.EnterpriseChallengeIBL
    {
        public DataSet GetChallengeBriefByOwner(string ownerId, string state)
        {
            OxcoderIDAL.EnterpriseChallengeIDAL ec = new OxcoderDAL.EnterpriseChallengeDAL();
            return ec.GetChallengeBriefByOwner(ownerId, state);
        }
        public DataSet GetMatchQuizs(int level, int type)
        {
            OxcoderIDAL.EnterpriseChallengeIDAL ec = new OxcoderDAL.EnterpriseChallengeDAL();
            return ec.GetMatchQuizs(level, type);
        }
        public DataSet GetAIMatchQuizs(int level, int type)
        {
            OxcoderIDAL.EnterpriseChallengeIDAL ec = new OxcoderDAL.EnterpriseChallengeDAL();
            return ec.GetAIMatchQuizs(level, type);
        }
        public bool PublishChallenge(string exercise, string entpId, string level, string type)
        {
            OxcoderIDAL.EnterpriseChallengeIDAL ec = new OxcoderDAL.EnterpriseChallengeDAL();
            Model.Challenge chlg = new Model.Challenge();
            string area = "";
            string name = "";
            string position = "";
            string salary = "";

            OxcoderIDAL.EnterpriseInfoIDAL ei = new OxcoderDAL.EnterpriseInfoDAL();
            DataSet ds = ei.EnterpriceInfo(entpId);
            area = ds.Tables[0].Rows[0]["Enterprice_Location"].ToString();
            position = "五险一金";

            /*
            switch (level)
            {
                case "1":
                    salary = "1k~2k";
                    break;
                case "2":
                    salary = "2k~4k";
                    break;
                case "3":
                    salary = "5k~8k";
                    break;
                case "4":
                    salary = "8k~12k";
                    break;
                case "5":
                    salary = "12k~15k";
                    break;
                case "6":
                    salary = "15k以上";
                    break;
                default:
                    salary = "1k~2k";
                    break;
            }
             */
            salary = level;
            switch (type)
            {
                case "1":
                    name = "JAVA工程师";
                    break;
                case "2":
                    name = "Android工程师";
                    break;
                case "3":
                    name = "IOS工程师";
                    break;
                case "4":
                    name = "C语言工程师";
                    break;
                case "5":
                    name = "C++工程师";
                    break;
                case "6":
                    name = "PHP工程师";
                    break;
                case "7":
                    name = "Python工程师";
                    break;
                default:
                    name = "JAVA工程师";
                    break;
            }
            chlg.Challenge_Area = area;
            chlg.Challenge_EnTime = DateTime.Now.AddDays(30).ToString();
            chlg.Challenge_ID = System.Guid.NewGuid().ToString();
            chlg.Challenge_Level = Convert.ToInt32(level);
            chlg.Challenge_Name = name;
            chlg.Challenge_Num = 0;
            chlg.Challenge_OwnerID = entpId;
            chlg.Challenge_Position = position;
            chlg.Challenge_Quiz = exercise;
            chlg.Challenge_Salary = salary;
            chlg.Challenge_State = 1;
            chlg.Challenge_Time = DateTime.Now;
            chlg.Challenge_Type = Convert.ToInt32(type);

            ec.AddChallenge(chlg);

            ec.MinEnterpriceChallengeNumber(entpId, 1);

            return true;
        }
    }
}
