<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <h3>Recent Activity</h3>
    <xsl:for-each select="feed/entry">
      <p>
      <a href="<xsl:value-of select="link:href" /><xsl:value-of select="title" /></a><br />
      <xsl:value-of select="author:name" /> - <xsl:value-of select="published" /></p> 
      <hr>
    </xsl:for-each>
</xsl:template>

</xsl:stylesheet> 
