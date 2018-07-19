using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIFactory
{
    public interface IFactory
    {
        OxcoderIDAL.ChallengeInfoIDAL getChallengeInstance();
        OxcoderIDAL.EnterpriseInfoIDAL getEnterpriseInstance();
        OxcoderIDAL.QuizInfoIDAL getQuizInstance();
        OxcoderIDAL.SearchChallengeIDAL getSearchInstance();
        OxcoderIDAL.TestInfoIDAL getTestInstance();
        OxcoderIDAL.UserIDAL getUserInstance();
    }
}
