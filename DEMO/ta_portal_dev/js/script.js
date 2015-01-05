(function (h) {
    h.browser = h.extend({
        chrome: (/chrome/i).test(navigator.userAgent)
    },
    h.browser);
    var m = h.scrollTo = function (b, c, g) {
        h(window).scrollTo(b, c, g)
    };
    m.defaults = {
        axis: 'y',
        duration: 1
    };
    m.window = function (b) {
        return h(window).scrollable()
    };
    h.fn.scrollable = function () {
        return this.map(function () {
            var b = this.parentWindow || this.defaultView,
                c = this.nodeName == '#document' ? b.frameElement || b : this,
            g = c.contentDocument || (c.contentWindow || c).document,
            i = c.setInterval;
            return c.nodeName == 'IFRAME' || i && (h.browser.safari || h.browser.chrome) ? g.body : i ? (g.compatMode && g.compatMode !== "BackCompat" ? g.documentElement : g.body) : this
        })
    };
    h.fn.scrollTo = function (r, j, a) {
        if (typeof j == 'object') {
            a = j;
            j = 0
        }
        if (typeof a == 'function') a = {
            onAfter: a
        };
        a = h.extend({},
        m.defaults, a);
        j = j || a.speed || a.duration;
        a.queue = a.queue && a.axis.length > 1;
        if (a.queue) j /= 2;
        a.offset = n(a.offset);
        a.over = n(a.over);
        return this.scrollable().each(function () {
            var k = this,
                o = h(k),
                d = r,
                l, e = {},
                p = o.is('html,body');
            switch (typeof d) {
            case 'number':
            case 'string':
                if (/^([+-]=)?\d+(px)?$/.test(d)) {
                    d = n(d);
                    break
                }
                d = h(d, this);
            case 'object':
                if (d.is || d.style) l = (d = h(d)).offset()
            }
            h.each(a.axis.split(''), function (b, c) {
                var g = c == 'x' ? 'Left' : 'Top',
                i = g.toLowerCase(),
                f = 'scroll' + g,
                s = k[f],
                t = c == 'x' ? 'Width' : 'Height',
                v = t.toLowerCase();
                if (l) {
                    e[f] = l[i] + (p ? 0 : s - o.offset()[i]);
                    if (a.margin) {
                        e[f] -= parseInt(d.css('margin' + g)) || 0;
                        e[f] -= parseInt(d.css('border' + g + 'Width')) || 0
                    }
                    e[f] += a.offset[i] || 0;
                    if (a.over[i]) e[f] += d[v]() * a.over[i]
                } else e[f] = d[i];
                if (/^\d+$/.test(e[f])) e[f] = e[f] <= 0 ? 0 : Math.min(e[f], u(t));
                if (!b && a.queue) {
                    if (s != e[f]) q(a.onAfterFirst);
                    delete e[f]
                }
            });
            q(a.onAfter);

            function q(b) {
                o.animate(e, j, a.easing, b &&
                function () {
                    b.call(this, r, a)
                })
            };

            function u(b) {
                var c = 'scroll' + b,
                    g = k.ownerDocument;
                return p ? Math.max(g.documentElement[c], g.body[c]) : k[c]
            }
        }).end()
    };

    function n(b) {
        return typeof b == 'object' ? b : {
            top: b,
            left: b
        }
    }
})(jQuery);
eval(function (p, a, c, k, e, r) {
    e = function (c) {
        return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
    };
    if (!''.replace(/^/, String)) {
        while (c--) r[e(c)] = k[c] || e(c);
        k = [function (e) {
            return r[e]
        }];
        e = function () {
            return '\\w+'
        };
        c = 1
    };
    while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
	
    return p
}('(4(){4 2C(28,H,S){6 1E=m.D(28).1r;6 E=\'<a f="#\'+H+\'">@\'+1E.17(/\\t|\\n|\\r\\n/g,"")+\' </a> \\n\';3f(E,S)}4 3g(28,H,2D,S){6 1E=m.D(28).1r;6 F=m.D(2D).1r;6 E=\'<3h 4G="#\'+2D+\'">\';E+=\'\\n<2E><a f="#\'+H+\'">\'+1E.17(/\\t|\\n|\\r\\n/g,"")+\'</a> :</2E>\';E+=F.17(/\\t/g,"");E+=\'</3h>\\n\';3i(E,S)}4 3f(E,S){h(m.D(S)&&m.D(S).T==\'3j\'){y=m.D(S)}W{29("3k F 2F 3l 3m 3n!");B I}h(y.j.4H(E)>-1){29("4I\'4J 4K 4L i 2C!");B I}h(y.j.17(/\\s|\\t|\\n/g,"")==\'\'){y.j=E}W{y.j=y.j.17(/[\\n]*$/g,"")+\'\\n\\n\'+E}}4 3i(E,S){h(m.D(S)&&m.D(S).T==\'3j\'){y=m.D(S)}W{29("3k F 2F 3l 3m 3n!");B I}h(m.3o){y.2a();3p=m.3o.4M();3p.1k=E;y.2a()}W h(y.2b||y.2b==\'0\'){6 2G=y.2b;6 3q=y.3r;6 2c=2G;y.j=y.j.3s(0,2G)+E+y.j.3s(3q,y.j.N);2c+=E.N;y.2a();y.2b=2c;y.3r=2c}W{y.j+=E;y.2a()}}4 3t(3u,2H,3v){m.D(3u).4N=4(3w){6 1F=1G;1F=18.3x?18.3x:3w;h(1F!=1G&&1F.4O&&1F.4P==13){m.D(2H).Q()}};m.D(2H).j+=3v}4 2I(19){6 2J=19.w(\'o.F-2K\');h(2J.N>0){2J.1l(1H);B}6 1I=19.w(\'a.1I\');6 H=1I.Z(\'f\').2d(9);6 1f=m.2e(\'o\');1f.1J=\'F-2K\';6 1K=m.2e(\'a\');1K.f=\'#3y\';1K.1r=\'4Q\';3(1K).Q(4(){2C(\'3z-\'+H,\'F-\'+H,\'F\')});1f.1L(1K);6 3A=m.3B(\' | \');1f.1L(3A);6 1M=m.2e(\'a\');1M.f=\'#3y\';1M.1r=\'4R\';3(1M).Q(4(){3g(\'3z-\'+H,\'F-\'+H,\'4S-\'+H,\'F\')});1f.1L(1M);h(/4T/.2L(1I.Z(\'C\'))){6 3C=m.3B(\' | \');1f.1L(3C);6 2f=m.2e(\'a\');2f.f=X.3D+\'/4U-4V/F.2g?1N=4W&c=\'+H;2f.1r=\'4X\';1f.1L(2f)}3(1f).J().3E(19.w(\'o.4Y\')).1l(1H)}4 2M(19){19.w(\'o.F-2K\').2h(1s)}3.4Z.1m=4(e){6 t=0,l=0;3F{t+=e.50||0;l+=e.51||0;e=e.52}53(e);B[l,t]};6 2N=1G;6 2O=1G;6 2P=1G;3(m).54(4(){h(m.D(\'3G\')){3(\'#3H\').Q(4(){3(i).1g(\'2i\').1a(\'2j\');3(\'#3I\').1g(\'2j\').1a(\'2i\');3(\'#3J\').2h(4(){3(\'#1h\').1l(4(){3(\'#2Q\').1O()})})});3(\'#3I\').Q(4(){3(i).1g(\'2i\').1a(\'2j\');3(\'#3H\').1g(\'2j\').1a(\'2i\');3(\'#2Q\').2k();3(\'#1h\').2h(4(){3(\'#3J\').1l()})});3(\'#55\').1i(4(){3(\'#3K\').1O();3(i).7(\'56 &3L;\')},4(){3(\'#3K\').2k();3(i).7(\'57 &3L;\');3(\'#58-59 2E\').7(3(\'#1E\').5a())});3(\'#1h k.1P\').2l(4(){2I(3(i))},4(){2M(3(i))});3t(\'F\',\'3M-1Q\',\' (5b+5c)\');h(!3.5d.5e){6 d=/^#F-/;6 3N=/^@/;6 K=3(\'#1h\');K.w(\'k p a\').3O(4(){h(3(i).Z(\'f\').3P(d)&&3(i).1k().3P(3N)){3(i).1a(\'3Q\')}});3(\'.3Q\').2l(4(){6 2m=i;6 H=3(i).Z(\'f\');h(3(H).5f(\'.1P\')){3(\'<k v="1P R"></k>\').J().7(\'<o v="3R"></o><o v="2n">\'+3(H).7()+\'</o>\').1t(3(\'#1h\'));K.w(\'.R\').1n({1b:3().1m(i)[0]+3(i).2R()+10,O:3().1m(i)[1]-22}).2o({2S:\'1\'})}W{6 d=H.2d(9);3.1u({T:\'3S\',12:\'?1N=5g&d=\'+d,3T:I,3U:\'7\',3V:\'3W=3X-8\',2T:4(){3(\'<k v="1P R"></k>\').J().7(\'<o v="3R"></o><o v="2n"><p v="1u-3Y 3Z">40...</p></o>\').1t(3(\'#1h\'));K.w(\'.R\').1n({1b:3().1m(2m)[0]+3(2m).2R()+10,O:3().1m(2m)[1]-22}).2o({2S:\'1\'})},2U:4(L){6 2V=3(L+\'</k>\');2V.J().1t(K);K.w(\'.R .2n\').7(2V.7())},2W:4(){K.w(\'.R .2n\').7(\'<p v="3Z">41, 42 1R 43 L.</p>\')}})}},4(){K.w(\'.R\').2h(1H,4(){3(i).5h()})})}}3(\'a.44-45\').Q(4(){18.1S(i.f);B I});3(\'a[C*="G"]\').Q(4(){18.1S(i.f);B I});3(\'a[f!="#"][f!="#46"][f^="#"]\').Q(4(){3.2X(i.f.17(/^.*#/g,\'#\'),1s,{1v:0});B I});h(3(\'#5i\').N>0){3(\'o.14\').3O(4(){6 1T=i;6 d=3(1T).Z(\'d\');h(/^14\\-[0-9]+$/.2L(d)){6 1i=3(\'<a C="P" v="1i 1U"></a>\');1i.1i(4(){2p(d,1T)},4(){1U(1T)});1i.3E(3(1T))}})}6 47=48({1w:X.1w,1x:X.1x,1V:X.1V,2q:X.3D,1W:X.1W});6 2Y=3(47);2Y.J().1t(3(\'#5j o.2Z\'));49(\'A\',\'1X\',\'5k 1k 1R 4a 5l...\');2Y.1l(4b);6 4c=4d({1Y:X.1Y,1y:X.1y,M:X.M,1Z:X.1Z});3(4c).J().1t(3(\'#5m o.2Z\')).1l(4b);3(\'#1z\').2l(4(){6 1o=i;31(2O);2N=2r(4(){3(1o).w(\'a#20\').1a(\'4e\');3(1o).w(\'2s\').1n({1b:3(\'#20\').1m(1o)[0],O:3(\'#20\').1m(1o)[1]+30}).1O()},1H)},4(){6 1o=i;31(2N);2O=2r(4(){3(1o).w(\'2s\').2k(4(){3(\'#1z a#20\').1g(\'4e\')})},1H)});3(18).5n(4(){32()});32()});4 48(Y){6 1w=Y.1w;6 1x=Y.1x;6 1V=Y.1V;6 2q=Y.2q;6 1W=Y.1W;7=\'<o d="5o">\';h(1w&&1x.N>0){7+=\'<2t 1N="\'+1V+\'" d="1w-4a-2F">\';7+=\'<o v="U">\';7+=\'<1p d="A" T="1k" v="4f" 1A="q" 4g="24" />\';7+=\'<1p d="1X" T="1Q" v="2u" 1A="5p" j="" />\';7+=\'<1p T="33" 1A="5q" j="\'+1x+\'" />\';7+=\'<1p T="33" 1A="5r" j="5s:11" />\';7+=\'<1p T="33" 1A="5t" j="3X-8" />\';7+=\'</o>\';7+=\'</2t>\'}W{7+=\'<2t 1N="\'+2q+\'" 5u="5v">\';7+=\'<o v="U">\';7+=\'<1p d="A" T="1k" v="4f" 1A="s" 4g="24" j="\'+1W+\'" />\';7+=\'<1p d="1X" T="1Q" v="2u" j="" />\';7+=\'</o>\';7+=\'</2t>\'}7+=\'</o>\';B 7}4 4d(Y){6 1Y=Y.1Y;6 1y=Y.1y;6 M=Y.M;6 1Z=Y.1Z;7=\'<o>\';7+=\'<a C="G P" d="5w" 2v="5x 5y!" f="\'+1Z+\'">5z</a>\';h(1Y&&1y.N>0){7+=\'<a C="G P" d="5A" 2v="4h 1R i 4i 5B 5C..." f="\'+1y+\'">5D 2w</a>\'}7+=\'<o d="1z">\';7+=\'<a C="G P" d="20" 2v="4h 1R i 4i..." f="\'+M+\'"><4j 2v="5E 5F 5G">5H</4j> 2w</a>\';7+=\'<2s d="2w-5I">\';7+=\'<k d="4k-x"><a C="G P" v="x" f="15://5J.4k.16/34?5K=\'+M+\'"><z>5L</z></a></k>\';7+=\'<k d="4l-x"><a C="G P" v="x" f="15://x.4l.16/b.3F?12=\'+M+\'"><z>鏈夐亾</z></a></k>\';7+=\'<k d="4m-x"><a C="G P" v="x" f="15://35.4m.16/1z.2g?12=\'+M+\'"><z>椴滄灉</z></a></k>\';7+=\'<k d="4n-x"><a C="G P" v="x" f="15://35.4n.16/5M.2g?12=\'+M+\'"><z>鎶撹櫨</z></a></k>\';7+=\'<k d="4o-x"><a C="G P" v="x" f="15://9.4o.16/x/1z?12=\'+M+\'"><z>璞嗙摚涔濈偣</z></a></k>\';7+=\'<k d="4p-x"><a C="G P" v="x" f="15://5N.4p.16/5O-5P/2w?u=\'+M+\'"><z>5Q 閭</z></a></k>\';7+=\'<k d="36-x"><a C="G P" v="x" f="15://x.36.16/1z/\'+M+\'"><z>36</z></a></k>\';7+=\'<k d="37-x"><a C="G P" v="x" f="15://35.37.16/5R/5S/5T.5U?12=\'+M+\'"><z>37</z></a></k>\';7+=\'<k d="4q-x"><a C="G P" v="x" f="15://34.5V.4q.16/5W?12=\'+M+\'"><z>5X 5Y!</z></a></k>\';7+=\'<k d="4r-x"><a C="G P" v="x" f="15://4r.16/34?12=\'+M+\'"><z>鍝悞缃�</z></a></k>\';7+=\'</2s>\';7+=\'</o>\';7+=\'</o>\';B 7}4 32(){6 1c=3(\'#4s\');6 U=3(\'#U .2Z\');h(1c.N>0){31(2P);1c.J()}W{1c=3(\'<a d="4s" f="#5Z">60</a>\');1c.1t(3(\'#U\'));1c.Q(4(){3.2X(i.f.17(/^.*#/g,\'#\'),1s,{1v:0});B I})}h(3(m).4t()<=61){B}2P=2r(4(){6 2x=3(\'#2x\');6 38=2x.1v().O+2x.2y();6 O=3(m).4t()+3(18).4u();h(O>=38-62){O=38-63}W{O-=21}1c.1n(\'O\',O+\'1j\');1c.1n(\'1b\',(U.1v().1b+U.2z())+\'1j\');1c.1l()},1s)}4 2p(d,14){h(3(14).w(\'.U\').1k()==\'\'||3(14).w(\'.U a.64-66\').N>0){39(d)}3(14).w(\'.U\').1O();3(14).w(\'a.1i\').1g(\'1U\').1a(\'2p\')}4 1U(14){3(14).w(\'.U\').2k();3(14).w(\'a.1i\').1g(\'2p\').1a(\'1U\')}4 49(4v,4w,R){6 A=m.D(4v);6 1X=m.D(4w);h(A.j==\'\'||A.j==R){A.1J+=\' 3a\';A.j=R}A.67=4(e){h(A.j==R){A.j=\'\';A.1J=A.1J.17(\' 3a\',\'\')}};A.68=4(e){h(A.j==\'\'){A.1J+=\' 3a\';A.j=R}};1X.4x=4(e){h(A.j==\'\'||A.j==R){B I}}}4 39(d){6 4y=d.2d(5);3.1u({T:\'3S\',12:\'?1N=69&d=\'+4y,3T:I,3U:\'7\',3V:\'6a/6b; 3W=6c-8\',2T:4(L){2A(d,\'<p v="1u-3Y">40...</p>\')},2U:4(L){2A(d,L,6d)},2W:4(L){2A(d,\'<p>41, 42 1R 43 L. <4z><a f="6e:6f(0);" 4x="6g.39(\\\'\'+d+\'\\\');">[6h]</a></4z></p>\')}})}4 2A(d,L,4A){6 23=3(\'#\'+d+\' .U\');23.7(L);h(4A){23.w(\'a.44-45\').Q(4(){18.1S(i.f);B I});23.w(\'a[C*="G"]\').Q(4(){18.1S(i.f);B I});23.w(\'a[f!="#"][f!="#46"][f^="#"]\').Q(4(){3.2X(i.f.17(/^.*#/g,\'#\'),1s,{1v:0});B I})}}h(3(\'#1B\').N>0){6 1q=3(\'#1B\');6 K=3(\'#1h\');6 1d=3(\'#1B-4B\');6 1e=3(\'#1B-4C\');6 V=3(\'#3M-1Q\');4 3b(1C,25,26,V){h(--1C>0){2r(4(){V.1a(\'1D-2u\');V.Z(\'j\',1C+25);3b(1C,25,26,V)},6i)}W{V.Z(\'j\',26);V.1g(\'1D-2u\');V.4D(\'1D\')}}1q.1Q(4(){6 3c=0;6 3d=K.w(\'k:3e .1I\');h(3d.N>0){3c=6j(3d.1k().2d(1),10)}3.1u({12:X.6k+\'/3G-1u.2g\',L:3(i).6l()+\'&6m=\'+3c,T:\'6n\',2T:4(){h(1d.N<=0){1d=3(\'<o d="1B-4B"></o>\').J()}h(1e.N<=0){1e=3(\'<z d="1B-4C">6o 4E...</z>\').J()}27=1q.1v();1d.1n({\'2S\':\'0.65\',\'2R\':1q.2z()+\'1j\',\'4u\':1q.2y()+\'1j\',\'1b\':27.1b+\'1j\',\'O\':27.O+\'1j\'}).2o();V.Z(\'1D\',\'1D\');1q.2B(1d);1q.2B(1e);1e.1n({\'1b\':(27.1b+(1d.2z()-1e.2z())/2)+\'1j\',\'O\':(27.O+(1d.2y()-1e.2y())/2)+\'1j\'}).2o()},2W:4(L){1d.J();1e.J();V.4D(\'1D\');29(L.6p)},2U:4(L){1d.J();1e.J();m.D(\'F\').j=\'\';6 26=V.Z(\'j\');6 1C=10;6 25=\' 6q 4E 2B 6r F\';3b(1C,25,26,V);h(K.N<=0){3(\'#2Q\').2B(\'<4F d="1h"></4F>\')}W h(K.N==1){6 19=K.w(\'k:3e\');h(!/1P/.2L(19.Z(\'v\'))){19.J()}}K.6s(L);K.w(\'k:3e\').J().1O(1s).2l(4(){2I(3(i))},4(){2M(3(i))}).w(\'a[C*="G"]\').Q(4(){18.1S(i.f);B I})}});B I})}})();', 62, 401, '|||jQuery|function||var|html||||||id||href||if|this|value|li||document||div|||||||class|find|reader|field|span|searchtxt|return|rel|getElementById|insertStr|comment|external|commentId|false|hide|commentList|data|feedUrl|length|top|nofollow|click|tip|commentBox|type|content|submitButton|else|global|args|attr|||url||post|http|com|replace|window|commentNode|addClass|left|topLink|commentMask|commentMessage|wrap|removeClass|thecomments|toggle|px|text|fadeIn|cumulativeOffset|css|_self|input|commentformNode|innerHTML|400|appendTo|ajax|offset|cse|cseCx|emailFeedUrl|subscribe|name|commentform|delayTime|disabled|author|ev|null|200|anchor|className|replyButton|appendChild|quoteButton|action|slideDown|hreview|submit|to|open|_post|collapse|cseUrl|searchKeywords|searchbtn|includeEmailFeed|twitterUrl|feedrss|||contentNode||delayText|submitText|formOffset|authorId|alert|focus|selectionStart|cursorPos|slice|createElement|editButton|php|fadeOut|tab|curtab|slideUp|hover|target|innerbox|show|expand|searchUrl|setTimeout|ul|form|button|title|feed|footer|outerHeight|outerWidth|loadPostContent|before|reply|commentBodyId|strong|box|startPos|submitbnt|overComment|actionNode|act|test|outComment|feedMouseoverThread|feedMouseoutThread|topLinkThread|commentnavi|width|opacity|beforeSend|success|addedComment|error|scrollTo|searchObj|inner||clearTimeout|toggleGotop|hidden|add|www|livedoor|newsgator|pageHeight|loadPost|searchtip|delayComment|commentCount|commentAnchor|last|appendReply|quote|blockquote|insertQuote|textarea|The|does|not|exist|selection|sel|endPos|selectionEnd|substring|loadCommentShortcut|frm|desc|moz_ev|event|respond|reviewer|sepBetweenReplyAndQuote|createTextNode|sepBetweenQuoteAndEdit|serverUrl|prependTo|do|comments|commenttab|trackbacktab|thetrackbacks|author_info|raquo|cmt|at|each|match|atreply|arrow|GET|cache|dataType|contentType|charset|UTF|loader|msg|Loading|Oops|failed|load|highslide|image|ViewPollResults|searchHtml|createSearch|searchboxInit|search|800|scocialHtml|createSocials|current|textfield|size|Subscribe|blog|abbr|google|youdao|xianguo|zhuaxia|douban|qq|yahoo|inezha|gotop|scrollTop|height|textfileId|buttonId|onclick|postId|small|needInit|mask|message|removeAttr|wait|ol|cite|indexOf|You|ve|already|appended|createRange|onkeydown|ctrlKey|keyCode|Reply|Quote|commentbody|editable|wp|admin|editcomment|Edit|info|fn|offsetTop|offsetLeft|offsetParent|while|ready|show_author_info|Close|Change|welcome|row|val|Ctrl|Enter|browser|opera|is|load_comment|remove|pagenavi|header|Type|here|navigation|scroll|searchbox|sa|cx|cof|FORID|ie|method|get|followme|Follow|me|Twitter|feedemail|via|email|Email|Really|Simple|Syndication|RSS|readers|fusion|feedurl|Google|add_channel|mail|cgi|bin|QQ|ngs|subscriber|subfext|aspx|my|rss|My|Yahoo|container|Top|90|70|91|more||link|onfocus|onblur|load_post|application|json|utf|true|javascript|void|POS|Reload|1000|parseInt|templateUrl|serialize|index|POST|Please|responseText|sec|next|append'.split('|'), 0, {}))

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-3684098-3']);
_gaq.push(['_trackPageview']);

(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();