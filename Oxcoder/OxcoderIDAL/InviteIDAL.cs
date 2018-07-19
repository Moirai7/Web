using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIDAL
{
    public interface InviteIDAL
    {
        int GetInviteNumByEntp(string entpId);
        bool MinInviteNumByEntp(string entpId, int minNum);
        bool PlusInviteNumByEntp(string entpId, int plusNum);
    }
}
