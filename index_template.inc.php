<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
Taken from http://www.oswd.org/design/preview/id/3293
by http://www.sdworkz.com/
Ported to Senayan by Hendro Wicaksono (hendrowicaksono@yahoo.com)
-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $page_title; ?></title>
<!--<link href="css/style.css" rel="stylesheet" type="text/css" /> -->
<link href="template/core.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/gui.js"></script>
<?php echo $metadata; ?>
</head>
<body>
<div id="wrapper">
  <div id="content">
    <div id="header">
      <div id="logo">&nbsp;</div>
      <div id="logo-text"><div id="library-name"><a href="index.php"><?php echo $sysconf['library_name']; ?></a><div><?php echo $sysconf['library_subname']; ?></div></div></div>
      <div id="logo-left">&nbsp;</div>
    </div>
    <div id="mainimg">
      <div id="links">
        <ul>
          <li><a href="index.php" class="selected"><?php echo __('Home'); ?></a></li>
          <li><a href="index.php?p=about"><?php echo __('About PSF'); ?></a></li>
          <li><a href="index.php?p=libinfo"><?php echo __('Library Information'); ?></a></li>
          <li><a href="index.php?p=cliping"><?php echo __('PNPM Clipping'); ?></a></li>
          <li><a href="index.php?p=publication"><?php echo __('PNPM Publication List'); ?></a></li>
          <li><a href="index.php?p=member"><?php echo __('Member Area'); ?></a></li>
        </ul>
      </div>
    </div>
    <div id="contentarea">
      <!-- leftside -->      
      <div id="leftside">
        <h2><?php echo __('Site Language'); ?></h2>
        <p>
          <!--
          <div id="langselect">
            <form name="langSelect" action="index.php" method="get">
            <select name="select_lang" style="width: 99%;" onchange="document.langSelect.submit();">
            <?php echo $language_select; ?>
            </select>
            </form>
          </div>
          -->
        <div id="langselect">        <a href="index.php?select_lang=en_US"><img
            title="View site in English"
            src="template/pnpm-mandiri/images/en.gif"
            alt="Valid XHTML 1.0 Transitional" border="0" />&nbsp;</a>
		<a href="index.php?select_lang=id_ID"><img
            title="View site in Bahasa Indonesia"
            src="template/pnpm-mandiri/images/in.gif" border="0" />&nbsp;</a>
        </div>
        </p>

        <h2><?php echo __('Advanced Search'); ?></h2>
        <form name="advSearchForm" id="advSearchForm" action="index.php" method="get">

        <span class="orangetext"><?php echo __('Title'); ?>:</span>
        <input type="text" name="title" />
        <span class="orangetext"><?php echo __('Author(s)'); ?>:</span>
        <?php echo $advsearch_author; ?>
        <span class="orangetext"><?php echo __('Subject(s)'); ?>:</span>
        <?php echo $advsearch_topic; ?>
        <span class="orangetext"><?php echo __('ISBN/ISSN'); ?>:</span>
        <input type="text" name="isbn" />
        <span class="orangetext"><?php echo __('Publisher'); ?>:</span>
        <input type="text" name="publisher" />
        <span class="orangetext"><?php echo __('GMD'); ?>:</span>
        <select name="gmd">
        <?php echo $gmd_list; ?>
        </select>
        <span class="orangetext"><?php echo __('Collection Type'); ?>:</span>
        <select name="colltype">
        <?php echo $colltype_list; ?>
        </select>
        <span class="orangetext"><?php echo __('Location'); ?>:</span>
        <select name="location">
        <?php echo $location_list; ?>
        </select>
        <input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button marginTop" />
        <!-- <input type="button" value="More Options" onclick="" class="button marginTop" /> -->
        </form>

        <h2>PSF Publications</h2>
        <ul id="publication-list">
          <li><a href="#">Publication Title 1</a></li>
          <li><a href="#">Publication Title 2</a></li>
          <li><a href="#">Publication Title 3</a></li>
        </ul>
        <br />

        <h2>LINK</h2>
        <ul id="contact">
          <li><a href="http://www.conflictanddevelopment.com">Conflict and Development</a></li>
          <li><a href="http://www.worldbank.org/id/justice">World Bank Indonesia</a></li>
          <li><a href="http://www.pnpm-mandiri.org">PNPM Mandiri</a></li>
        </ul>
        <br />

        <h2>License</h2>
        <p>This Software is Released Under <a href="http://www.gnu.org/copyleft/gpl.html" title="GNU GPL License" target="_blank">GNU GPL License</a>
        Version 3.</p>
        <br />

        <h2>Validated</h2>
        <p align="center">
        <a href="http://validator.w3.org/check?uri=referer"><img
            src="template/valid-xhtml10.png"
            alt="Valid XHTML 1.0 Transitional" border="0" /></a>
        <br />
        <img src="template/valid-css.png" alt="Valid CSS" />
        </p>

      </div>
    </div>
    
    <!-- middle side -->
    <div id="midside">
    <p><?php echo $header_info; ?></p>

        <!-- simple search -->
            <form name="simpleSearch" action="index.php" method="get">
            <fieldset id="simpleSearch">
              <legend>Quick Search</legend>
              <input type="text" name="keywords" id="simpleKeywords" />
              <input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button" />
              <script type="text/javascript">$('simpleKeywords').focus();</script>
              <div id="infoBox"><?php echo $info; ?></div>
            </fieldset>
            </form>
        <!-- simple search end -->

    <?php echo $main_content; ?>
    </div>
    
    <!-- rightside -->
    <div id="rightside">
        <h2>Media Coverage</h2>
        <ul id="media-coverage">
          <li><a href="#">Media Coverage 1</a></li>
          <li><a href="#">Media Coverage 2</a></li>
          <li><a href="#">Media Coverage 3</a></li>
        </ul>
        <br />

        <h2>New Publication</h2>
        <ul id="new-publication">
          <li><a href="#">New Publication 1</a></li>
          <li><a href="#">New Publication 2</a></li>
          <li><a href="#">New Publication 3</a></li>
          <li><a href="#">New Publication 4</a></li>
          <li><a href="#">New Publication 5</a></li>
        </ul>
        <br />
        
        <a href="http://twitter.com" target="_blank"><div id="twitter"></div></a>
        <a href="http://www.facebook.com" target="_blank"><div id="facebook"></div></a>

      </div>
    </div>
    
    <div id="bottom">
      <div id="email"><a href="http://www.oswd.org/design/preview/id/3293">OSWD Template</a></div>
      <div id="validtext">
        <p><a href="http://senayan.diknas.go.id">SLiMS porting</a> by <a href="http://hendrowicaksono.net">Hendro Wicaksono</a> &amp; <a href="http://dicarve.blogspot.com">Arie Nugraha</a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
