﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OxcoderIBL
{
    public interface Test_QuizInfoIBL
    {
        Model.Quiz searchQuizInfo(string reid, int order);
    }
}
