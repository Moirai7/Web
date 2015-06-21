using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderBL
{
    public class TestInfoBL:OxcoderIBL.TestInfoIBL
    {
        public int InsertATest(string challengeid, string userid)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.TestInfoIDAL dalad = factory.getTestInstance();
            Model.Test test = new Model.Test();
            test.Test_ID = Guid.NewGuid().ToString();
            test.Test_ChallengeID = challengeid;
            test.Test_UserID = userid;

            OxcoderIDAL.ChallengeInfoIDAL ci = factory.getChallengeInstance();
            ci.UpdateNum(test.Test_ID);
            return dalad.InsertATest(test);
        }

        public int DeleteATest(string id)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.TestInfoIDAL dalad = factory.getTestInstance();
            return dalad.DeleteATest(id);
        }
    }
}
