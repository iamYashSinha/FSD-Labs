<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="2.0">
       <xsl:template match="/">
        <html>
            <body>
                <h2>Employee Information</h2>
                <table border="1">
                    <tr bgcolor="#9acd32">
                        <th>srno</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>salary</th>
                    </tr>
                    <xsl:for-each select="stafflist/staff">
                        <tr>
                            <td><xsl:value-of select="sno"/></td>
                            <td><xsl:value-of select="name/fnm"/></td>
                            <td><xsl:value-of select="name/lnm"/></td>
                            <td><xsl:value-of select="sal"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <br></br><br></br><br></br>
                <table border="1">
                    <tr bgcolor="# ">
                        <th>
                            Branch Number
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Branch Name
                        </th>
                    </tr>
                    <xsl:for-each select="stafflist/branch">
                        <tr>
                            <td>
                                <xsl:value-of select="bno"/>
                            </td>
                            <td>
                                <xsl:value-of select="city"/>
                            </td>
                            <td>
                                <xsl:value-of select="bnm"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                    
                </table>
            </body>
        </html>
    </xsl:template>  
</xsl:stylesheet>