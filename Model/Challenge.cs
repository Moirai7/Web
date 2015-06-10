using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    public class Challenge
    {
        private String _Challenge_ID;

        public String Challenge_ID
        {
            get { return _Challenge_ID; }
            set { _Challenge_ID = value; }
        }
        private String _Challenge_Name;

        public String Challenge_Name
        {
            get { return _Challenge_Name; }
            set { _Challenge_Name = value; }
        }
        private String _Challenge_Quiz;

        public String Challenge_Quiz
        {
            get { return _Challenge_Quiz; }
            set { _Challenge_Quiz = value; }
        }
        private String _Challenge_OwnerID;

        public String Challenge_OwnerID
        {
            get { return _Challenge_OwnerID; }
            set { _Challenge_OwnerID = value; }
        }
        private DateTime _Challenge_Time;

        public DateTime Challenge_Time
        {
            get { return _Challenge_Time; }
            set { _Challenge_Time = value; }
        }
        private int _Challenge_Level;

        public int Challenge_Level
        {
            get { return _Challenge_Level; }
            set { _Challenge_Level = value; }
        }
        private int _Challenge_Type;

        public int Challenge_Type
        {
            get { return _Challenge_Type; }
            set { _Challenge_Type = value; }
        }
        private String _Challenge_Salary;

        public String Challenge_Salary
        {
            get { return _Challenge_Salary; }
            set { _Challenge_Salary = value; }
        }
        private String _Challenge_Area;

        public String Challenge_Area
        {
            get { return _Challenge_Area; }
            set { _Challenge_Area = value; }
        }
        private String _Challenge_Position;

        public String Challenge_Position
        {
            get { return _Challenge_Position; }
            set { _Challenge_Position = value; }
        }
        private String _Challenge_EnTime;

        public String Challenge_EnTime
        {
            get { return _Challenge_EnTime; }
            set { _Challenge_EnTime = value; }
        }
        private int _Challenge_Num;

        public int Challenge_Num
        {
            get { return _Challenge_Num; }
            set { _Challenge_Num = value; }
        }
        private int _Challenge_State;

        public int Challenge_State
        {
            get { return _Challenge_State; }
            set { _Challenge_State = value; }
        }
    }
}
