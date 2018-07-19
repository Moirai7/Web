using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    public  class QuizForDB
    {
        private Guid _Quiz_ID;

        public Guid Quiz_ID
        {
            get { return _Quiz_ID; }
            set { _Quiz_ID = value; }
        }
        private string _Quiz_Name;

        public string Quiz_Name
        {
            get { return _Quiz_Name; }
            set { _Quiz_Name = value; }
        }
        private string _Quiz_Content;

        public string Quiz_Content
        {
            get { return _Quiz_Content; }
            set { _Quiz_Content = value; }
        }
        private string _Quiz_Info;

        public string Quiz_Info
        {
            get { return _Quiz_Info; }
            set { _Quiz_Info = value; }
        }
        private string _Quiz_Type;

        public string Quiz_Type
        {
            get { return _Quiz_Type; }
            set { _Quiz_Type = value; }
        }
        private string _Quiz_Input;

        public string Quiz_Input
        {
            get { return _Quiz_Input; }
            set { _Quiz_Input = value; }
        }
        private string _Quiz_Output;

        public string Quiz_Output
        {
            get { return _Quiz_Output; }
            set { _Quiz_Output = value; }
        }
        private int _Quiz_Level;

        public int Quiz_Level
        {
            get { return _Quiz_Level; }
            set { _Quiz_Level = value; }
        }
        private int _Quiz_Time;

        public int Quiz_Time
        {
            get { return _Quiz_Time; }
            set { _Quiz_Time = value; }
        }
        private int _Quiz_TypeID;

        public int Quiz_TypeID
        {
            get { return _Quiz_TypeID; }
            set { _Quiz_TypeID = value; }
        }
    }
}
