using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;

namespace OxcoderIBL
{
    public interface PayIBL
    {
        DataSet GetAccountDetail(string entpId);
    }
}
