@extends('layout')

@section('content')


<div class="main">
<!-- <div class="highspace35"></div> -->
    <div class="newsheading"><strong>Introducing</strong> our Magazine <span class="caps">CONNECT!</span></div>
    <div> <span id="errors" style="color:#FF0000;"></span> </div>
    <div class="highspace10"></div>
    <div class="textleft">
        <p  class="copy13">	 {!! Lang::get('pages.magazinetext') !!} <br><br>		
		</p>
        <p class="copy13bold">Subscribe to our Magazine CONNECT today! </p>
<br>


</div>

<ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">8th Annual Edition 2015/16</a></li>
  <li class="tabs-title"><a href="#panel2">7th Anniversary Edition 2014</a></li>
  <li class="tabs-title"><a href="#panel3">Winter/Spring 2012/13</a></li>
  <li class="tabs-title"><a href="#panel4">Winter/Spring 2011/12 </a></li>
  <li class="tabs-title"><a href="#panel5"> Summer/Fall 2011</a></li>
  <li class="tabs-title"><a href="#panel6">Winter 2010/11 </a></li>
  <li class="tabs-title"><a href="#panel7">Summer 2010</a></li>
  <li class="tabs-title"><a href="#panel8">Winter 2009/10</a></li>

  <li class="tabs-title"><a href="#panel9" class="button">Subscribe / Unsubscribe</a></li>
</ul>


<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
    <p><object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=150706153000-3ebd4792271e61b53064a92a027a12c4&amp;docName=Web Magazine 2015&amp;username=Robinson-Harmsen&amp;loadingInfoText=2015 Connect Magazine&amp;et=2147483647&amp;er=91">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=150706153000-3ebd4792271e61b53064a92a027a12c4&amp;docName=Web Magazine 2015&amp;username=Robinson-Harmsen&amp;loadingInfoText=2015 Connect Magazine&amp;et=2147483647&amp;er=91" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object>        </p>
  </div>
  <div class="tabs-panel" id="panel2">
    <p>  <object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=141117233159-81b1b6610670e0dc38f3843be1d24c7a&amp;docName=Web24Connect 2014&amp;username=Robinson-Harmsen&amp;loadingInfoText=2014 Connect Magazine&amp;et=2147483647&amp;er=24">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=141117233159-81b1b6610670e0dc38f3843be1d24c7a&amp;docName=Web24Connect 2014&amp;username=Robinson-Harmsen&amp;loadingInfoText=2014 Connect Magazine&amp;et=2147483647&amp;er=24" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object></p>
  </div>
  <div class="tabs-panel" id="panel3">
    <p>   <object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=130206174526-017a92e75eea4851a520b64288ee82ac&amp;docName=winter2012-2013_webversion&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter-Spring 2012/13&et=1360174015871&amp;et=2147483647&amp;er=50">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=130206174526-017a92e75eea4851a520b64288ee82ac&amp;docName=winter2012-2013_webversion&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter-Spring 2012/13&et=1360174015871&amp;et=2147483647&amp;er=50" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object> </p>
  </div>
  <div class="tabs-panel" id="panel4">
    <p>                <object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=120814134117-db91dcb4ee0e4d80bb8c395cc8404676&amp;docName=magazine_for_web&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter-Spring 2011/12&amp;et=2147483647&amp;er=91">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=120814134117-db91dcb4ee0e4d80bb8c395cc8404676&amp;docName=magazine_for_web&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter-Spring 2011/12&amp;et=2147483647&amp;er=91" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object>   </p>
  </div>
  <div class="tabs-panel" id="panel5">
    <p> <object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110622185345-c171447ffa4f4f1984faf42ec6bbdd88&amp;docName=linksspring_mag&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Summer/Fall 2011&amp;et=2147483647&amp;er=25">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110622185345-c171447ffa4f4f1984faf42ec6bbdd88&amp;docName=linksspring_mag&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Summer/Fall 2011&amp;et=2147483647&amp;er=25" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object></p>
  </div>
  <div class="tabs-panel" id="panel6">
    <p><object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110526161631-73c12bff0ca242caaf1a947161b2562c&amp;docName=cc_group_-_winter_2010&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter 2010&amp;et=2147483647&amp;er=59">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110526161631-73c12bff0ca242caaf1a947161b2562c&amp;docName=cc_group_-_winter_2010&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter 2010&amp;et=2147483647&amp;er=59" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object> </p>
  </div>
  <div class="tabs-panel" id="panel7">
    <p><object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110526153825-75b26374709d4ed99b72c1f0607d886d&amp;docName=connect_canada_edition_summer_2010&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Magazine Summer Edition 2010&amp;et=2147483647&amp;er=72">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110526153825-75b26374709d4ed99b72c1f0607d886d&amp;docName=connect_canada_edition_summer_2010&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Magazine Summer Edition 2010&amp;et=2147483647&amp;er=72" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object> </p>
  </div>
  <div class="tabs-panel" id="panel8">
    <p><object style="width:100%;height:668px" 
		type="application/x-shockwave-flash" 
		data="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110601165019-666035f0d3104ae58f46a246e5d660ed&amp;docName=inal_winter_edition_09-10__new_cover_&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter 2009/10&amp;et=2147483647&amp;er=62">
		<param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=110601165019-666035f0d3104ae58f46a246e5d660ed&amp;docName=inal_winter_edition_09-10__new_cover_&amp;username=Robinson-Harmsen&amp;loadingInfoText=Connect Canada Magazine - Edition Winter 2009/10&amp;et=2147483647&amp;er=62" />
		<param name="allowfullscreen" value="true"/>
		<param name="menu" value="false"/>
		</object> </p>
  </div>
    <div class="tabs-panel" id="panel9">
    <p> <form action="" method="post" name="subscribe" target="_self" id="subscribe"  style="margin:0px;padding:0px;" accept-charset="utf-8">
                    <div class="divborder">
            <div class="divtext copy12">
                <input value="subscribe" name="action" type="hidden" />
            <p><strong>To Subscribe:</strong></p>
            <p>  {!! Lang::get('pages.magazinesubscribe') !!}  </p>
					  </div>
					  <div class="highspace10"></div>
                        <div class="formtext copy12">
                            <table align="center" width="600" border="0">
                                <tr>
                                    <td width="260" rowspan="2" align="right" valign="top">Captcha</td>
                                    <td width="25" rowspan="2" align="right" valign="top"><br /></td>
                                    <td width="308"  align="center"><img src="{{Captcha::src('flat')}}" id="register-captcha-image">
									<input type="text" name="captcha">
                              <br />
                              <br />


                            </div></td>
                          </tr>
                              <tr>
                            <td align="right" valign="top">Subscribe Email: </td>
                                    <td align="right" valign="top">&nbsp;</td>
                                    <td  align="left"><input id="email" maxlength="100" size="32" name="email" class="input" value=""/>
                                        <input id="submit-button1" value="Subscribe" name="submit-button1" type="submit" class="btn"/>
                                        </p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
                <div class="highspace35"></div>
                <form action="" method="post" name="unsubscribe" target="_self" id="unsubscribe"  style="margin:0px;padding:0px;" accept-charset="utf-8">
                    <div class="divborder">
            <div class="divtext copy12">
                  <input value="unsubscribe" name="action" type="hidden" />
					<p><strong>To Unsubscribe:</strong></p>
                <p>{!! Lang::get('pages.magazineunsubscribe') !!} </p>
              </div>
                        <div class="highspace10"></div>
                        <div class="formtext copy12">
                            <table align="center" width="600" border="0">
                                <tr>
                                    <td width="260"  align="right" valign="top">Unsubscribe Email:  </td>
                                    <td width="25"  align="right" valign="top">&nbsp;</td>
                                    <td  align="left"><input id="rememail" maxlength="100" size="32" name="rememail" class="input"/>
                                        <input id="submit-button2" value="Unsubscribe" name="submit-button2" type="submit" class="btn"/>
                                        </p></td>
                          </tr>
                        </table>

						    </div> 
</div>
                </form> </p>
  </div>



</div>

----------------------------------------------------------------------

          
          


@stop