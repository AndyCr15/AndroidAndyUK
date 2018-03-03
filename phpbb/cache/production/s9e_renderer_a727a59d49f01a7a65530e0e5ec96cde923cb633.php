<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2017 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
class s9e_renderer_a727a59d49f01a7a65530e0e5ec96cde923cb633 extends \s9e\TextFormatter\Renderers\PHP
{
	protected $params=['L_CODE'=>'','L_COLON'=>'','L_IMAGE'=>'','L_SELECT_ALL_CODE'=>'','L_WROTE'=>'','STYLE_ID'=>'','S_VIEWFLASH'=>'','S_VIEWIMG'=>'','S_VIEWSMILIES'=>'','T_SMILIES_PATH'=>''];
	protected function renderNode(\DOMNode $node)
	{
		switch($node->nodeName){case'ATTACHMENT':$this->out.='<div class="inline-attachment"><!-- ia'.htmlspecialchars($node->getAttribute('index'),0).' -->'.htmlspecialchars($node->getAttribute('filename'),0).'<!-- ia'.htmlspecialchars($node->getAttribute('index'),0).' --></div>';break;case'B':if($this->params['STYLE_ID']==1||$this->params['STYLE_ID']==3){$this->out.='<strong class="text-strong">';$this->at($node);$this->out.='</strong>';}else{$this->out.='<span style="font-weight:bold">';$this->at($node);$this->out.='</span>';}break;case'CODE':$this->out.='<div class="codebox"><p>'.htmlspecialchars($this->params['L_CODE'].$this->params['L_COLON'],0).' <a href="#" onclick="selectCode(this); return false;">'.htmlspecialchars($this->params['L_SELECT_ALL_CODE'],0).'</a></p><pre><code>';$this->at($node);$this->out.='</code></pre></div>';break;case'COLOR':$this->out.='<span style="color:'.htmlspecialchars($node->getAttribute('color'),2).'">';$this->at($node);$this->out.='</span>';break;case'E':if(empty($this->params['S_VIEWSMILIES']))$this->out.=htmlspecialchars($node->textContent,0);else{switch($node->textContent){case'8-)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cool.gif" width="15" height="17" alt="8-)" title="Cool">';break;case':!:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_exclaim.gif" width="15" height="17" alt=":!:" title="Exclamation">';break;case':(':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":(" title="Sad">';break;case':)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":)" title="Smile">';break;case':-(':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":-(" title="Sad">';break;case':-)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":-)" title="Smile">';break;case':-?':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":-?" title="Confused">';break;case':-D':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":-D" title="Very Happy">';break;case':-P':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":-P" title="Razz">';break;case':-o':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":-o" title="Surprised">';break;case':-x':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":-x" title="Mad">';break;case':-|':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_neutral.gif" width="15" height="17" alt=":-|" title="Neutral">';break;case':?':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":?" title="Confused">';break;case':?:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_question.gif" width="15" height="17" alt=":?:" title="Question">';break;case':???:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":???:" title="Confused">';break;case':D':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":D" title="Very Happy">';break;case':P':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":P" title="Razz">';break;case':arrow:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_arrow.gif" width="15" height="17" alt=":arrow:" title="Arrow">';break;case':cool:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cool.gif" width="15" height="17" alt=":cool:" title="Cool">';break;case':cry:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cry.gif" width="15" height="17" alt=":cry:" title="Crying or Very Sad">';break;case':eek:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":eek:" title="Surprised">';break;case':evil:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_evil.gif" width="15" height="17" alt=":evil:" title="Evil or Very Mad">';break;case':geek:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_geek.gif" width="17" height="17" alt=":geek:" title="Geek">';break;case':grin:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":grin:" title="Very Happy">';break;case':idea:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_idea.gif" width="15" height="17" alt=":idea:" title="Idea">';break;case':lol:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_lol.gif" width="15" height="17" alt=":lol:" title="Laughing">';break;case':mad:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":mad:" title="Mad">';break;case':mrgreen:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mrgreen.gif" width="15" height="17" alt=":mrgreen:" title="Mr. Green">';break;case':o':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":o" title="Surprised">';break;case':oops:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_redface.gif" width="15" height="17" alt=":oops:" title="Embarrassed">';break;case':razz:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":razz:" title="Razz">';break;case':roll:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_rolleyes.gif" width="15" height="17" alt=":roll:" title="Rolling Eyes">';break;case':sad:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":sad:" title="Sad">';break;case':shock:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_eek.gif" width="15" height="17" alt=":shock:" title="Shocked">';break;case':smile:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":smile:" title="Smile">';break;case':twisted:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_twisted.gif" width="15" height="17" alt=":twisted:" title="Twisted Evil">';break;case':ugeek:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_ugeek.gif" width="17" height="18" alt=":ugeek:" title="Uber Geek">';break;case':wink:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=":wink:" title="Wink">';break;case':x':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":x" title="Mad">';break;case':|':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_neutral.gif" width="15" height="17" alt=":|" title="Neutral">';break;case';)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=";)" title="Wink">';break;case';-)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=";-)" title="Wink">';break;default:$this->out.=htmlspecialchars($node->textContent,0);}}break;case'EMAIL':$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2).'">';$this->at($node);$this->out.='</a>';break;case'EMOJI':if(!empty($this->params['S_VIEWSMILIES']))$this->out.='<img alt="'.htmlspecialchars($node->textContent,2).'" class="emoji smilies" draggable="false" src="//cdn.jsdelivr.net/emojione/assets/3.1/png/64/'.htmlspecialchars($node->getAttribute('seq'),2).'.png">';else$this->out.=htmlspecialchars($node->textContent,0);break;case'FLASH':if(!empty($this->params['S_VIEWFLASH']))$this->out.='<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="'.htmlspecialchars($node->getAttribute('width'),2).'" height="'.htmlspecialchars($node->getAttribute('height'),2).'"><param name="movie" value="'.htmlspecialchars($node->getAttribute('url'),2).'"><param name="play" value="false"><param name="loop" value="false"><param name="quality" value="high"><param name="allowScriptAccess" value="never"><param name="allowNetworking" value="internal"><embed src="'.htmlspecialchars($node->getAttribute('url'),2).'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="'.htmlspecialchars($node->getAttribute('width'),2).'" height="'.htmlspecialchars($node->getAttribute('height'),2).'" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></object>';else$this->at($node);break;case'I':if($this->params['STYLE_ID']==1||$this->params['STYLE_ID']==3){$this->out.='<em class="text-italics">';$this->at($node);$this->out.='</em>';}else{$this->out.='<span style="font-style:italic">';$this->at($node);$this->out.='</span>';}break;case'IMG':if(!empty($this->params['S_VIEWIMG']))$this->out.='<img src="'.htmlspecialchars($node->getAttribute('src'),2).'" class="postimage" alt="'.htmlspecialchars($this->params['L_IMAGE'],2).'">';else$this->at($node);break;case'LI':$this->out.='<li>';$this->at($node);$this->out.='</li>';break;case'LINK_TEXT':$this->out.=htmlspecialchars($node->getAttribute('text'),0);break;case'LIST':if(!$node->hasAttribute('type')){$this->out.='<ul>';$this->at($node);$this->out.='</ul>';}elseif((strpos('upperlowerdecim',mb_substr($node->getAttribute('type'),0,5,'utf-8'))!==false)){$this->out.='<ol style="list-style-type:'.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ol>';}else{$this->out.='<ul style="list-style-type:'.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ul>';}break;case'QUOTE':$this->out.='<blockquote';if(!$node->hasAttribute('author'))$this->out.=' class="uncited"';$this->out.='><div>';if($node->hasAttribute('author')){$this->out.='<cite>';if($node->hasAttribute('url'))$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" class="postlink">'.htmlspecialchars($node->getAttribute('author'),0).'</a>';elseif($node->hasAttribute('profile_url'))$this->out.='<a href="'.htmlspecialchars($node->getAttribute('profile_url'),2).'">'.htmlspecialchars($node->getAttribute('author'),0).'</a>';else$this->out.=htmlspecialchars($node->getAttribute('author'),0);$this->out.=' '.htmlspecialchars($this->params['L_WROTE'].$this->params['L_COLON'],0);if($node->hasAttribute('post_url'))$this->out.=' <a href="'.htmlspecialchars($node->getAttribute('post_url'),2).'" data-post-id="'.htmlspecialchars($node->getAttribute('post_id'),2).'" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a>';if($node->hasAttribute('date'))$this->out.='<div class="responsive-hide">'.htmlspecialchars($node->getAttribute('date'),0).'</div>';$this->out.='</cite>';}$this->at($node);$this->out.='</div></blockquote>';break;case'SIZE':$this->out.='<span style="font-size:'.htmlspecialchars($node->getAttribute('size'),2).'%;line-height:116%">';$this->at($node);$this->out.='</span>';break;case'U':$this->out.='<span style="text-decoration:underline">';$this->at($node);$this->out.='</span>';break;case'URL':$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" class="postlink">';$this->at($node);$this->out.='</a>';break;case'YOUTUBE':$this->out.='<iframe title="YouTube video player" width="560" height="315" src="https://www.youtube.com/embed/'.htmlspecialchars($node->getAttribute('content'),2).'" frameborder="0" allowfullscreen=""></iframe>';break;case'br':$this->out.='<br>';break;case'e':case'i':case's':break;case'p':$this->out.='<p>';$this->at($node);$this->out.='</p>';break;default:$this->at($node);}
	}
	/** {@inheritdoc} */
	public $enableQuickRenderer=true;
	/** {@inheritdoc} */
	protected $static=['/CODE'=>'</code></pre></div>','/COLOR'=>'</span>','/EMAIL'=>'</a>','/LI'=>'</li>','/QUOTE'=>'</div></blockquote>','/SIZE'=>'</span>','/U'=>'</span>','/URL'=>'</a>','LI'=>'<li>','U'=>'<span style="text-decoration:underline">'];
	/** {@inheritdoc} */
	protected $dynamic=['COLOR'=>['(^[^ ]+(?> (?!color=)[^=]+="[^"]*")*(?> color="([^"]*)")?.*)s','<span style="color:$1">'],'EMAIL'=>['(^[^ ]+(?> (?!email=)[^=]+="[^"]*")*(?> email="([^"]*)")?.*)s','<a href="mailto:$1">'],'SIZE'=>['(^[^ ]+(?> (?!size=)[^=]+="[^"]*")*(?> size="([^"]*)")?.*)s','<span style="font-size:$1%;line-height:116%">'],'URL'=>['(^[^ ]+(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<a href="$1" class="postlink">'],'YOUTUBE'=>['(^[^ ]+(?> (?!content=)[^=]+="[^"]*")*(?> content="([^"]*)")?.*)s','<iframe title="YouTube video player" width="560" height="315" src="https://www.youtube.com/embed/$1" frameborder="0" allowfullscreen=""></iframe>']];
	/** {@inheritdoc} */
	protected $quickRegexp='(<(?:(?!/)((?:ATTACHMENT|E(?>MOJI)?|LINK_TEXT|YOUTUBE))(?: [^>]*)?>.*?</\\1|(/?(?!br/|p>)[^ />]+)[^>]*?(/)?)>)s';
	/** {@inheritdoc} */
	protected $quickRenderingTest='(<(?:[!?]|(?>FLASH|IMG)[ />]))';
	/** {@inheritdoc} */
	protected function renderQuickTemplate($id, $xml)
	{
		$attributes=$this->matchAttributes($xml);
		$html='';switch($id){case'/B':if($this->params['STYLE_ID']==1||$this->params['STYLE_ID']==3)$html.='</strong>';else$html.='</span>';break;case'/I':if($this->params['STYLE_ID']==1||$this->params['STYLE_ID']==3)$html.='</em>';else$html.='</span>';break;case'/LIST':$attributes=array_pop($this->attributes);if(!isset($attributes['type']))$html.='</ul>';elseif((strpos('upperlowerdecim',mb_substr(htmlspecialchars_decode($attributes['type']),0,5,'utf-8'))!==false))$html.='</ol>';else$html.='</ul>';break;case'ATTACHMENT':$attributes+=['index'=>null,'filename'=>null];$html.='<div class="inline-attachment"><!-- ia'.str_replace('&quot;','"',$attributes['index']).' -->'.str_replace('&quot;','"',$attributes['filename']).'<!-- ia'.str_replace('&quot;','"',$attributes['index']).' --></div>';break;case'B':if($this->params['STYLE_ID']==1||$this->params['STYLE_ID']==3)$html.='<strong class="text-strong">';else$html.='<span style="font-weight:bold">';break;case'CODE':$html.='<div class="codebox"><p>'.htmlspecialchars($this->params['L_CODE'].$this->params['L_COLON'],0).' <a href="#" onclick="selectCode(this); return false;">'.htmlspecialchars($this->params['L_SELECT_ALL_CODE'],0).'</a></p><pre><code>';break;case'E':$textContent=$this->getQuickTextContent($xml);if(empty($this->params['S_VIEWSMILIES']))$html.=htmlspecialchars($textContent,0);else{switch($textContent){case'8-)':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cool.gif" width="15" height="17" alt="8-)" title="Cool">';break;case':!:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_exclaim.gif" width="15" height="17" alt=":!:" title="Exclamation">';break;case':(':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":(" title="Sad">';break;case':)':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":)" title="Smile">';break;case':-(':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":-(" title="Sad">';break;case':-)':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":-)" title="Smile">';break;case':-?':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":-?" title="Confused">';break;case':-D':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":-D" title="Very Happy">';break;case':-P':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":-P" title="Razz">';break;case':-o':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":-o" title="Surprised">';break;case':-x':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":-x" title="Mad">';break;case':-|':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_neutral.gif" width="15" height="17" alt=":-|" title="Neutral">';break;case':?':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":?" title="Confused">';break;case':?:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_question.gif" width="15" height="17" alt=":?:" title="Question">';break;case':???:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":???:" title="Confused">';break;case':D':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":D" title="Very Happy">';break;case':P':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":P" title="Razz">';break;case':arrow:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_arrow.gif" width="15" height="17" alt=":arrow:" title="Arrow">';break;case':cool:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cool.gif" width="15" height="17" alt=":cool:" title="Cool">';break;case':cry:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cry.gif" width="15" height="17" alt=":cry:" title="Crying or Very Sad">';break;case':eek:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":eek:" title="Surprised">';break;case':evil:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_evil.gif" width="15" height="17" alt=":evil:" title="Evil or Very Mad">';break;case':geek:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_geek.gif" width="17" height="17" alt=":geek:" title="Geek">';break;case':grin:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":grin:" title="Very Happy">';break;case':idea:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_idea.gif" width="15" height="17" alt=":idea:" title="Idea">';break;case':lol:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_lol.gif" width="15" height="17" alt=":lol:" title="Laughing">';break;case':mad:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":mad:" title="Mad">';break;case':mrgreen:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mrgreen.gif" width="15" height="17" alt=":mrgreen:" title="Mr. Green">';break;case':o':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":o" title="Surprised">';break;case':oops:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_redface.gif" width="15" height="17" alt=":oops:" title="Embarrassed">';break;case':razz:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":razz:" title="Razz">';break;case':roll:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_rolleyes.gif" width="15" height="17" alt=":roll:" title="Rolling Eyes">';break;case':sad:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":sad:" title="Sad">';break;case':shock:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_eek.gif" width="15" height="17" alt=":shock:" title="Shocked">';break;case':smile:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":smile:" title="Smile">';break;case':twisted:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_twisted.gif" width="15" height="17" alt=":twisted:" title="Twisted Evil">';break;case':ugeek:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_ugeek.gif" width="17" height="18" alt=":ugeek:" title="Uber Geek">';break;case':wink:':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=":wink:" title="Wink">';break;case':x':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":x" title="Mad">';break;case':|':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_neutral.gif" width="15" height="17" alt=":|" title="Neutral">';break;case';)':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=";)" title="Wink">';break;case';-)':$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=";-)" title="Wink">';break;default:$html.=htmlspecialchars($textContent,0);}}break;case'EMOJI':$attributes+=['seq'=>null];$textContent=$this->getQuickTextContent($xml);if(!empty($this->params['S_VIEWSMILIES']))$html.='<img alt="'.htmlspecialchars($textContent,2).'" class="emoji smilies" draggable="false" src="//cdn.jsdelivr.net/emojione/assets/3.1/png/64/'.$attributes['seq'].'.png">';else$html.=htmlspecialchars($textContent,0);break;case'I':if($this->params['STYLE_ID']==1||$this->params['STYLE_ID']==3)$html.='<em class="text-italics">';else$html.='<span style="font-style:italic">';break;case'LINK_TEXT':$attributes+=['text'=>null];$html.=str_replace('&quot;','"',$attributes['text']);break;case'LIST':$attributes+=['type'=>null];if(!isset($attributes['type']))$html.='<ul>';elseif((strpos('upperlowerdecim',mb_substr(htmlspecialchars_decode($attributes['type']),0,5,'utf-8'))!==false))$html.='<ol style="list-style-type:'.$attributes['type'].'">';else$html.='<ul style="list-style-type:'.$attributes['type'].'">';$this->attributes[]=$attributes;break;case'QUOTE':$attributes+=['url'=>null,'author'=>null,'post_id'=>null];$html.='<blockquote';if(!isset($attributes['author']))$html.=' class="uncited"';$html.='><div>';if(isset($attributes['author'])){$html.='<cite>';if(isset($attributes['url']))$html.='<a href="'.$attributes['url'].'" class="postlink">'.str_replace('&quot;','"',$attributes['author']).'</a>';elseif(isset($attributes['profile_url']))$html.='<a href="'.$attributes['profile_url'].'">'.str_replace('&quot;','"',$attributes['author']).'</a>';else$html.=str_replace('&quot;','"',$attributes['author']);$html.=' '.htmlspecialchars($this->params['L_WROTE'].$this->params['L_COLON'],0);if(isset($attributes['post_url']))$html.=' <a href="'.$attributes['post_url'].'" data-post-id="'.$attributes['post_id'].'" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a>';if(isset($attributes['date']))$html.='<div class="responsive-hide">'.str_replace('&quot;','"',$attributes['date']).'</div>';$html.='</cite>';}}

		return $html;
	}
}