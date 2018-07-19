using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    [Serializable]
    public class Compile
    {
        //private bool _compileSwitch;

        //public bool CompileSwitch
        //{
        //    get { return _compileSwitch; }
        //    set { _compileSwitch = value; }
        //}
        //private int _compileSwitchCountdown;

        //public int CompileSwitchCountdown
        //{
        //    get { return _compileSwitchCountdown; }
        //    set { _compileSwitchCountdown = value; }
        //}
        //private string _intervalCompile;

        //public string IntervalCompile
        //{
        //    get { return _intervalCompile; }
        //    set { _intervalCompile = value; }
        //}
        //private bool _timeoutCompile;

        //public bool TimeoutCompile
        //{
        //    get { return _timeoutCompile; }
        //    set { _timeoutCompile = value; }
        //}
        //private int _isSub;

        //public int IsSub
        //{
        //    get { return _isSub; }
        //    set { _isSub = value; }
        //}
        private int _statusCode;

        public int StatusCode
        {
            get { return _statusCode; }
            set { _statusCode = value; }
        }
        private string _runInfo;

        public string RunInfo
        {
            get { return _runInfo; }
            set { _runInfo = value; }
        }

        private string _result;

        public string Result
        {
            get { return _result; }
            set { _result = value; }
        }

    }
}
