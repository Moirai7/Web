using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIDAL
{
    public interface TestInfoIDAL
    {
        int InsertATest(Model.Test test);
        int DeleteATest(string id);
    }
}
