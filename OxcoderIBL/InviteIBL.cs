using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIBL
{
    public interface InviteIBL
    {
        int GetInviteNumByEntp(string entpId);
        bool sendInvites(string[] mailTo, string mailSubject, string mailContent, string entpId);
    }
}
