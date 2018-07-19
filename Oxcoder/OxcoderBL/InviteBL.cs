using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderBL
{
    public class InviteBL : OxcoderIBL.InviteIBL
    {
        public int GetInviteNumByEntp(string entpId)
        {
            OxcoderIDAL.InviteIDAL i = new OxcoderDAL.InviteDAL();
            return i.GetInviteNumByEntp(entpId);
        }
        public bool sendInvites(string[] mailTo, string mailSubject, string mailContent, string entpId)
        {
            bool flag1 = false;
            bool flag2 = false;
            int len = mailTo.Length;

            OxcoderIDAL.InviteIDAL i = new OxcoderDAL.InviteDAL();
            flag1 = i.MinInviteNumByEntp(entpId, len);
            if (flag1 == true)
            {
                flag2 = Common.SendMails.SendEmails(mailTo, mailSubject, mailContent);
            }
            if (flag2 == false && flag1 == true)
            {
                flag1 = i.PlusInviteNumByEntp(entpId, len);
            }
            return flag2;
        }
    }
}
