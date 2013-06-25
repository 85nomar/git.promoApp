<header>
    <section id="navigation" class="container">
      <a href="http://www.ricardo.ch/" class="span3" id="channellogo"><img width="205px" height="36px" alt="Online Auktion ricardo.ch" src="//www.ricardo.ch/ImgWeb/2/V3/header/logo.gif" id="logo"></a>
      <!-- MAINNAV -->
      <nav id="mainnav" class="span8 pull-right">
        <ul class="nav nav-pills pull-right noprint">
          <li><a href="http://www.ricardo.ch/ueber-uns" title="News"><i class="icon-alt-about"></i> Über ricardo.ch</a></li>
          <li><a href="http://www.ricardo.ch/kaufen/" id="it_toBuy" title="Kaufen"><i class="icon-alt-buy"></i> Kaufen</a></li>
          <li><a id="it_toSell" href="https://www.ricardo.ch/form/AddObj_NOC.asp" title="Verkaufen" rel="nofollow"><i class="icon-alt-sell"></i> Verkaufen</a></li>
          <li><a id="it_toMypages" href="https://www.ricardo.ch/MyPages/Summary.asp" title="My ricardo" rel="nofollow"><i class="icon-alt-myricardo"></i> My Ricardo</a></li>
          <li><a id="rico" href="http://www.ricardo.ch/ueber-uns/de-ch/kundendienst/rico.aspx" title="Hilfe"><i class="icon-alt-support"></i> Hilfe</a></li>
        </ul>
      </nav>
      <!-- MAINNAV END -->
    </section>
    <section id="search" class="container">
      <div id="FormNavPre">
        <!-- SERACH -->
        <!-- Start Search Part 1 /DEFAULT.ASP?-->   
        <script type="text/javascript">     var HasChanged = 0;     var countryNr = 2;     var partnerNr = 2;     function stripTagsHTML(txt) {      return txt.replace(/(<\/?\w+((\s+\w+(\s*=\s*(?:".*?"|'.*?'|[^'">\s]+))?)+\s*|\s*)\/?>)|(<!--.*?-->)/gim, "")     }     function StartQueryNav() {      if (HasChanged == 0) {document.FormNav.txtSearch.value="";document.FormNav.txtSearch.style.color="";HasChanged=1;}     var level, CategoryAndLevel, Catg, level;     var CategoryAndLevel = document.FormNav.CategoryAndLevel.value.split('|');     level   = parseInt(CategoryAndLevel[0]);     Catg    = parseInt(CategoryAndLevel[1]);      if (document.FormNav.txtSearch.value != '') {			var param; param = '?'; param = param + 'txtSearch=' + encodeURIComponent(stripTagsHTML(document.FormNav.txtSearch.value));      param = param + '&Catg=' + Catg;       if ($("#IsAutoCompletSearch").length > 0){ param = param + '&IsAutoCompletSearch=' + 1; }      param = param + '&InTitleAndDesc=' + document.FormNav.InTitleAndDesc.value;       param = param + '&IsNavBarSearch=' + document.FormNav.IsNavBarSearch.value;       document.location.href = document.FormNav.action + param;      }       else if (level < 2){ 			if (document.FormNav.CategoryAndLevel.options.selectedIndex == '0') { 				document.location.href = 'http://www.ricardo.ch/kaufen/';			} else { 				document.location.href = CatRewriteNames[document.FormNav.CategoryAndLevel.options.selectedIndex]; } } return false; } function clearSearchInput() {		if (HasChanged == 0) {			document.FormNav.txtSearch.value="";			document.FormNav.txtSearch.style.color="";			HasChanged=1;		} }    </script><form accept-charset="UTF-8" name="FormNav" id="FormNav" action="http://www.ricardo.ch/search/search.asp" method="get" onsubmit="return StartQueryNav();" class="form-inline"><input type="hidden" value="0|1" name="CategoryAndLevel" id="CategoryAndLevel"><div class="btn-group"><input type="text" name="txtSearch" id="txtSearch" autocomplete="off" maxlength="200" size="25" value="" onfocus="clearSearchInput();" tabindex="1" style=""><a id="FormNavCategories" class="btn dropdown-toggle" data-toggle="dropdown" href="#" data-catid="0|1">Alle Kategorien <span class="caret"></span></a><ul id="newcatselect" class="dropdown-menu"><li><a data-catid="0|1" href="#">Alle Kategorien</a></li><li><a data-catid="1|38399" href="#">&nbsp;Antiquitäten &amp; Kunst</a></li><li><a data-catid="1|63787" href="#">&nbsp;Audio, TV &amp; Video</a></li><li><a data-catid="1|38766" href="#">&nbsp;Briefmarken</a></li><li><a data-catid="1|38889" href="#">&nbsp;Bücher &amp; Comics</a></li><li><a data-catid="1|63788" href="#">&nbsp;Büro &amp; Gewerbe</a></li><li><a data-catid="1|39091" href="#">&nbsp;Computer &amp; Netzwerk</a></li><li><a data-catid="1|46822" href="#">&nbsp;Dienstleistungen</a></li><li><a data-catid="1|39349" href="#">&nbsp;Filme &amp; DVD</a></li><li><a data-catid="1|39460" href="#">&nbsp;Foto &amp; Optik</a></li><li><a data-catid="1|48906" href="#">&nbsp;Ferien &amp; Reisen</a></li><li><a data-catid="1|69956" href="#">&nbsp;Fahrzeuge</a></li><li><a data-catid="1|69989" href="#">&nbsp;Fahrzeugzubehör</a></li><li><a data-catid="1|39563" href="#">&nbsp;Games &amp; Spielkonsolen</a></li><li><a data-catid="1|39825" href="#">&nbsp;Handwerk &amp; Garten</a></li><li><a data-catid="1|39940" href="#">&nbsp;Handy, Festnetz, Funk</a></li><li><a data-catid="1|40295" href="#">&nbsp;Haushalt &amp; Wohnen</a></li><li><a data-catid="1|43930" href="#">&nbsp;Immobilien</a></li><li><a data-catid="1|40520" href="#">&nbsp;Kind &amp; Baby</a></li><li><a data-catid="1|40748" href="#">&nbsp;Kleidung &amp; Accessoires</a></li><li><a data-catid="1|41057" href="#">&nbsp;Kosmetik &amp; Pflege</a></li><li><a data-catid="1|41126" href="#">&nbsp;Modellbau &amp; Hobby</a></li><li><a data-catid="1|41260" href="#">&nbsp;Münzen</a></li><li><a data-catid="1|63781" href="#">&nbsp;Musik &amp; Musikinstrumente</a></li><li><a data-catid="1|41518" href="#">&nbsp;Sammeln &amp; Seltenes</a></li><li><a data-catid="1|41733" href="#">&nbsp;Spielzeug &amp; Basteln</a></li><li><a data-catid="1|41875" href="#">&nbsp;Sports</a></li><li><a data-catid="1|48423" href="#">&nbsp;Stellenangebote</a></li><li><a data-catid="1|42099" href="#">&nbsp;Tickets &amp; Gutscheine</a></li><li><a data-catid="1|42135" href="#">&nbsp;Tierzubehör</a></li><li><a data-catid="1|63804" href="#">&nbsp;Tiere</a></li><li><a data-catid="1|42272" href="#">&nbsp;Uhren &amp; Schmuck</a></li><li><a data-catid="1|42454" href="#">&nbsp;Wein &amp; Genuss</a></li></ul><input id="it_btnSearch" class="n_SearchButt btn btn-primary" type="submit" value="Finden" tabindex="4"></div><input type="hidden" name="RemoveSuggestionsListLink" id="RemoveSuggestionsListLink" value="Vorschläge ausblenden"><input type="hidden" name="InTitleAndDesc" id="InTitleAndDesc" value="1"><input type="hidden" name="IsNavBarSearch" id="IsNavBarSearch" value="1"></form><!--End Search Part 1-->
        <!--Start Search Part 2--><a id="it_btnAdvSearchLink" rel="nofollow" class="n_advsearch" href="http://www.ricardo.ch/search/advsearch.asp?Adv=1" tabindex="5">Erweiterte Suche</a><!--End Search Part 2-->
        <!-- SEARCH END -->
        <!-- MYLINKS -->
        <div id="mylinks" class="btn-group pull-right">
          <a href="/Usability/CH/MyFavorites.aspx" class="btn btn-primary fancybox.iframe" id="favortieMerkliste" style="display: none;"><i class="icon-favorite icon-white"></i> Merkliste</a><a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle single" id="mylinks_menu"><i class="icon-mylinks icon-white"></i> Meine Links <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/MyPages/Mybuying/MyBuying.asp"><i class="icon-folder-open"></i> <strong>Mein Kaufen</strong></a></li>
            <li><a href="/MyPages/Mybuying/MyBuying.asp"><i class=""></i> Offen</a></li>
            <li><a href="/MyPages/Mybuying/WonAuctions.asp"><i class=""></i> Gekauft</a></li>
            <li class="divider"></li>
            <li><a href="/MyPages/MySelling/MySelling.asp"><i class="icon-folder-open"></i> <strong>Mein Verkaufen</strong></a></li>
            <li><a href="/MyPages/MySelling/MySelling.asp"><i class=""></i> Offene</a></li>
            <li><a href="/MyPages/MySelling/SoldAuctions.asp"><i class=""></i> Verkauft</a></li>
            <li><a href="/MyPages/MySelling/UnsoldAuctions.asp"><i class=""></i> Nicht verkauft</a></li>
            <li class="divider"></li>
            <li><a href="/MyPages/Favorite/Observer.asp">Beobachter</a></li>
            <li><a href="/MyPages/Favorite/NewSearch.asp">Suchaufträge</a></li>
            <li><a href="/Accdb/ViewUser.asp">Bewertungen</a></li>
            <li><a href="/MyPages/MyInbox/Inbox.asp">Postfach</a></li>
          </ul>
        </div>
        <!-- MYLINKS END -->
      </div>
    </section>
</header>