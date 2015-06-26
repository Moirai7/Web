using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace OxcoderIDAL
{
    public interface EnterpriseChallengeIDAL
    {
        DataSet GetChallengeBriefByOwner(string ownerId, string state);
        DataSet GetMatchQuizs(int level, int type);
        DataSet GetAIMatchQuizs(int level, int type);
        bool AddChallenge(Model.Challenge chlg);
        bool MinEnterpriceChallengeNumber(string entpId, int number);

    }
}
