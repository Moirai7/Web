using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    [Serializable]
    public class Quiz
    {
        private string _chineseName;
        public string chineseName
        {
            get { return _chineseName; }
            set { _chineseName = value; }
        }

        private string _code;
        public string code
        {
            get { return _code; }
            set { _code = value; }
        }

        private string _codepath;
        public string codepath
        {
            get { return _codepath; }
            set { _codepath = value; }
        }
        private string _countDown;
        public string countDown
        {
            get { return _countDown; }
            set { _countDown = value; }
        }

        private int _order;
        public int order
        {
            get { return _order; }
            set { _order = value; }
        }

        private string _pid;
        public string pid
        {
            get { return _pid; }
            set { _pid = value; }
        }
        private string _pname;
        public string pname
        {
            get { return _pname; }
            set { _pname = value; }
        }

        private bool _previewfileExist;
        public bool previewfileExist
        {
            get { return _previewfileExist; }
            set { _previewfileExist = value; }
        }

        private string _ptype;
        public string ptype
        {
            get { return _ptype; }
            set { _ptype = value; }
        }
        private string _ptypeName;
        public string ptypeName
        {
            get { return _ptypeName; }
            set { _ptypeName = value; }
        }
        private string _target;
        public string target
        {
            get { return _target; }
            set { _target = value; }
        }
        private string _totalTime;
        public string totalTime
        {
            get { return _totalTime; }
            set { _totalTime = value; }
        }
        private string _input;
        public string input
        {
            get { return _input; }
            set { _input = value; }
        }
        private string _output;
        public string output
        {
            get { return _output; }
            set { _output = value; }
        }

    }
}
