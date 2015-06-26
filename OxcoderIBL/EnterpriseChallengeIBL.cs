using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace OxcoderIBL
{
    public interface EnterpriseChallengeIBL
    {
        //ownerId 企业的ID
        DataSet GetChallengeBriefByOwner(string ownerId, string state);
        DataSet GetMatchQuizs(int level, int type);
        DataSet GetAIMatchQuizs(int level, int type);
        bool PublishChallenge(string exercise, string entpId, string level, string type);
    }
}
