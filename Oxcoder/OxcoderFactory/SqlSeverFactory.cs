using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderFactory
{
    public class SqlSeverFactory:OxcoderIFactory.IFactory
    {
        public OxcoderIDAL.ChallengeInfoIDAL getChallengeInstance()
        {
            return new OxcoderDAL.ChallengeInfoDAL();
        }
        public OxcoderIDAL.EnterpriseInfoIDAL getEnterpriseInstance()
        {
            return new OxcoderDAL.EnterpriseInfoDAL();
        }
        public OxcoderIDAL.QuizInfoIDAL getQuizInstance()
        {
            return new OxcoderDAL.QuizInfoDAL();
        }
        public OxcoderIDAL.SearchChallengeIDAL getSearchInstance()
        {
            return new OxcoderDAL.SearchChallengeDAL();
        }
        public OxcoderIDAL.TestInfoIDAL getTestInstance()
        {
            return new OxcoderDAL.TestInfoDAL();
        }
        public OxcoderIDAL.UserIDAL getUserInstance()
        {
            return new OxcoderDAL.UserDAL();
        }
    }
}
