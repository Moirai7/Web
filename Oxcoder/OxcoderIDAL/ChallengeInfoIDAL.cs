using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIDAL
{
    public interface ChallengeInfoIDAL
    {
        int DeleteAChallenge(string id);
        int InsertAChallenge(Model.Challenge id);
        int UpdateNum(string id,int type);
    }
}
