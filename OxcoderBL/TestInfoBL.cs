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
            OxcoderIDAL.TestInfoIDAL dalad = new OxcoderDAL.TestInfoDAL();
            Model.Test test = new Model.Test();
            test.Test_ID = Guid.NewGuid().ToString();
            test.Test_ChallengeID = challengeid;
            test.Test_UserID = userid;
            return dalad.InsertATest(test);
        }

        public int DeleteATest(string id)
        {
            OxcoderIDAL.TestInfoIDAL dalad = new OxcoderDAL.TestInfoDAL();
            return dalad.DeleteATest(id);
        }
    }
}
