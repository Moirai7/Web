<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Admin.aspx.cs" Inherits="Web.Admin" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:Label ID="username" runat="server" Text="username"></asp:Label>
            <asp:Repeater ID="rpt_Message" runat="server" OnItemCommand="rpt_Message_ItemCommand">
                <ItemTemplate>
                    <table width="600px" style="border: solid 1px #666666; font-size: 10pt; background-color: #f0f0f0">
                        <tr>
                            <td align="left" width="400px">
                                <%# Eval("Message")%>
                            </td>
                            <td align="right" width="200px">
                                <%# Eval("PostTime")%> - <%# Eval("UserName")%>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <hr width="300px" align="right" />
                                管理员回复：<asp:TextBox runat="server" ID="tb_Reply" TextMode="MultiLine" Width="300px" Text='<%# Eval("Reply")%>' />
                                <asp:Button ID="btn_SendReply" runat="server" Text="发表回复" CommandName="SendReply" CommandArgument='<%# Eval("ID")%>' />
                                <asp:Button ID="btn_DeleteMessage" runat="server" Text="删除留言" CommandName="DeleteMessage" CommandArgument='<%# Eval("ID")%>' />
                            </td>
                        </tr>
                    </table>
                    <br />
                </ItemTemplate>
            </asp:Repeater>
        </div>
    </form>
</body>
</html>
