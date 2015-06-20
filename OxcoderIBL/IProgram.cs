using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIBL
{
    public interface IProgram
    {
         bool createSub(string code,int lang,string input);


         Model.Compile getStatus();
    }
}
