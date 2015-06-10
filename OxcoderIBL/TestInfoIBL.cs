using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIBL
{
    public interface TestInfoIBL
    {
        int InsertATest(string challengeid,string userid);
        int DeleteATest(string id);
    }
}
