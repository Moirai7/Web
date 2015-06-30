using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    [Serializable]
    public class Invoice
    {
        private Guid _invoiceID;
        public Guid invoiceID
        {
            get { return _invoiceID; }
            set { _invoiceID = value; }
        }

        private string _invoiceHead;
        public string invoiceHead
        {
            get { return _invoiceHead; }
            set { _invoiceHead = value; }
        }

        private string _invoiceContent;
        public string invoiceContent
        {
            get { return _invoiceContent; }
            set { _invoiceContent = value; }
        }

        private string _invoiceType;
        public string invoiceType
        {
            get { return _invoiceType; }
            set { _invoiceType = value; }
        }

        private string _invoiceAddress;
        public string invoiceAddress
        {
            get { return _invoiceAddress; }
            set { _invoiceAddress = value; }
        }

        private string _invoiceTele;
        public string invoiceTele
        {
            get { return _invoiceTele; }
            set { _invoiceTele = value; }
        }
    }
}
