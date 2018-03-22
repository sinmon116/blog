var Msg = {defaultIptVal: "想说点什么呢...", noCon: "好像还没填写评论哦！", submitIng: "评论正在提交，请稍后..."};
var Sys = {scrollLoading: false, currentQing: 0, qingX: [0, 371, 742], qingY: [0, 0, 0], qingZIndex: 50000};
Array.prototype.max = function() {
    return Math.max.apply({}, this)
};
Array.prototype.min = function() {
    return Math.min.apply({}, this)
};
Array.prototype.minKey = function() {
    var b = this.min();
    for (var a = 0; a < this.length; a++) {
        if (this[a] <= b) {
            return a
        }
    }
    return this.length - 1
};
Array.prototype.maxKey = function() {
    var a = this.max();
    for (var b = 0; b < this.length; b++) {
        if (this[b] >= a) {
            return b
        }
    }
    return this.length - 1
};
Array.prototype.unique = function() {
    var c = {}, b = [];
    for (var a = 0; a < this.length; a++) {
        if (!c[this[a]]) {
            c[this[a]] = true;
            b.push(this[a])
        }
    }
    return b
};
Array.prototype.findKeyByValue = function(b) {
    for (var a = 0; a < this.length; a++) {
        if (b == this[a]) {
            return a
        }
    }
    return -1
};
SSCookie = {get: function(c) {
        var b = document.cookie.split("; ");
        var d = [], a;
        for (i = 0; i < b.length; i++) {
            a = b[i].split("=");
            d[a[0]] = unescape(a[1])
        }
        if (c) {
            return d[c]
        } else {
            return d
        }
    }, set: function(d, f, a, h, e, g) {
        if (d == null || f == null) {
            return false
        }
        if (a) {
            if (/^[0-9]+$/.test(a)) {
                var c = new Date();
                a = new Date(c.getTime() + a * 1000).toGMTString()
            } else {
                if (!/^wed, \d{2} \w{3} \d{4} \d{2}\:\d{2}\:\d{2} GMT$/.test(a)) {
                    a = undefined
                }
            }
        }
        var b = d + "=" + escape(f) + ";" + ((a) ? " expires=" + a + ";" : "") + ((h) ? "path=" + h + ";" : "") + ((e) ? "domain=" + e + ";" : "") + ((g && g != 0) ? "secure" : "");
        if (b.length < 4096) {
            this.del(d, h, e);
            document.cookie = b;
            return true
        } else {
            return false
        }
    }, del: function(a, c, b) {
        if (!a) {
            return false
        }
        if (a == "") {
            return false
        }
        if (!this.get(a)) {
            return false
        }
        document.cookie = a + "=;" + ((c) ? "path=" + c + ";" : "") + ((b) ? "domain=" + b + ";" : "") + "expires=Thu, 01-Jan-1970 00:00:01 GMT;";
        return true
    }};
(function(a) {
    a.fn.ssFocusBlur = function() {
        var b = Msg.defaultIptVal;
        a(this).focus(function() {
            if (a(this).val() == b) {
                a(this).val("")
            }
            a(this).parent().parent().find(".sub").show();
            a(this).addClass("on").animate({height: "70px"})
        }).blur(function() {
            if (!a(this).val() || a(this).val() == b) {
                a(this).val(b);
                a(this).parent().parent().find(".sub").hide();
                a(this).removeClass("on").animate({height: "27px"})
            }
        });
        return a(this)
    }
})(jQuery);
var commonLib = {base64EncodeChars: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/", base64DecodeChars: new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1)};
commonLib.base64encode = function(g) {
    var c, e, a;
    var f, d, b;
    a = g.length;
    e = 0;
    c = "";
    while (e < a) {
        f = g.charCodeAt(e++) & 255;
        if (e == a) {
            c += this.base64EncodeChars.charAt(f >> 2);
            c += this.base64EncodeChars.charAt((f & 3) << 4);
            c += "==";
            break
        }
        d = g.charCodeAt(e++);
        if (e == a) {
            c += this.base64EncodeChars.charAt(f >> 2);
            c += this.base64EncodeChars.charAt(((f & 3) << 4) | ((d & 240) >> 4));
            c += this.base64EncodeChars.charAt((d & 15) << 2);
            c += "=";
            break
        }
        b = g.charCodeAt(e++);
        c += this.base64EncodeChars.charAt(f >> 2);
        c += this.base64EncodeChars.charAt(((f & 3) << 4) | ((d & 240) >> 4));
        c += this.base64EncodeChars.charAt(((d & 15) << 2) | ((b & 192) >> 6));
        c += this.base64EncodeChars.charAt(b & 63)
    }
    return c
};
commonLib.base64decode = function(h) {
    var g, f, d, b;
    var e, a, c;
    a = h.length;
    e = 0;
    c = "";
    while (e < a) {
        do {
            g = this.base64DecodeChars[h.charCodeAt(e++) & 255]
        } while (e < a && g == -1);
        if (g == -1) {
            break
        }
        do {
            f = this.base64DecodeChars[h.charCodeAt(e++) & 255]
        } while (e < a && f == -1);
        if (f == -1) {
            break
        }
        c += String.fromCharCode((g << 2) | ((f & 48) >> 4));
        do {
            d = h.charCodeAt(e++) & 255;
            if (d == 61) {
                return c
            }
            d = this.base64DecodeChars[d]
        } while (e < a && d == -1);
        if (d == -1) {
            break
        }
        c += String.fromCharCode(((f & 15) << 4) | ((d & 60) >> 2));
        do {
            b = h.charCodeAt(e++) & 255;
            if (b == 61) {
                return c
            }
            b = this.base64DecodeChars[b]
        } while (e < a && b == -1);
        if (b == -1) {
            break
        }
        c += String.fromCharCode(((d & 3) << 6) | b)
    }
    return c
};
commonLib.mergeObj = function(c, b) {
    for (var a in b) {
        c[a] = b[a]
    }
    return c
};
commonLib.imageLoadedCallback = function(b, a) {
    document.getElementById(b).onload = function() {
        a()
    }
};
commonLib.addFavorite = function(c, d) {
    var b = c || vars.homeUrl;
    var a = d || vars.siteName;
    if (document.all) {
        window.external.addFavorite(b, a)
    } else {
        if (window.sidebar) {
            window.sidebar.addPanel(a, b, "")
        }
    }
};
commonLib.SetHome = function(c) {
    var d = vars.homeUrl;
    try {
        c.style.behavior = "url(#default#homepage)";
        c.setHomePage(d)
    } catch (b) {
        if (window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
            } catch (b) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'")
            }
            var a = Components.classes["@@mozilla.org/preferences-service;1"].getService(Components.interfaces.nsIPrefBranch);
            a.setCharPref("browser.startup.homepage", d)
        }
    }
};
commonLib.getOS = function() {
    var d = navigator.userAgent;
    var f = (navigator.platform == "Win32") || (navigator.platform == "Windows");
    var g = (navigator.platform == "Mac68K") || (navigator.platform == "MacPPC") || (navigator.platform == "Macintosh") || (navigator.platform == "MacIntel");
    if (g) {
        return"Mac"
    }
    var c = (navigator.platform == "X11") && !f && !g;
    if (c) {
        return"Unix"
    }
    var a = (String(navigator.platform).indexOf("Linux") > -1);
    if (a) {
        return"Linux"
    }
    if (f) {
        var e = d.indexOf("Windows NT 5.0") > -1 || d.indexOf("Windows 2000") > -1;
        if (e) {
            return"Windows2000"
        }
        var k = d.indexOf("Windows NT 5.1") > -1 || d.indexOf("Windows XP") > -1;
        if (k) {
            return"WindowsXP"
        }
        var b = d.indexOf("Windows NT 5.2") > -1 || d.indexOf("Windows 2003") > -1;
        if (b) {
            return"Windows2003"
        }
        var h = d.indexOf("Windows NT 6.0") > -1 || d.indexOf("Windows Vista") > -1;
        if (h) {
            return"WindowsVista"
        }
        var j = d.indexOf("Windows NT 6.1") > -1 || d.indexOf("Windows 7") > -1;
        if (j) {
            return"Windows7"
        }
        var j = d.indexOf("Windows NT 6.2") > -1 || d.indexOf("Windows 8") > -1;
        if (isWin8) {
            return"Windows8"
        }
    }
    return"Others"
};
commonLib.preLoadImage = function(b, d, c) {
    var a = new Image();
    a.src = b;
    if (a.complete) {
        typeof (d) == "function" && d.call(a, c);
        return
    }
    a.onload = function() {
        typeof (d) == "function" && d.call(a, c)
    }
};
commonLib.copyToClipboard = function(f, c, j) {
    if (c == null) {
        c = "^哈哈^ 已经成功复制到您的粘贴板,您可以任意粘贴啦！"
    }
    if (j == null) {
        j = "^汗颜^ 您的浏览器目前不支持此功能！"
    }
    if (window.clipboardData) {
        window.clipboardData.clearData();
        window.clipboardData.setData("Text", f)
    } else {
        if (navigator.userAgent.indexOf("Opera") != -1) {
            window.location = f
        } else {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
                } catch (h) {
                    W.tips(j)
                }
                var d = Components.classes["@mozilla.org/widget/clipboard;1"].createInstance(Components.interfaces.nsIClipboard);
                if (!d) {
                    return
                }
                var l = Components.classes["@mozilla.org/widget/transferable;1"].createInstance(Components.interfaces.nsITransferable);
                if (!l) {
                    return
                }
                l.addDataFlavor("text/unicode");
                var k = new Object();
                var g = new Object();
                var k = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
                var b = f;
                k.data = b;
                l.setTransferData("text/unicode", k, b.length * 2);
                var a = Components.interfaces.nsIClipboard;
                if (!d) {
                    return false
                }
                d.setData(l, null, a.kGlobalClipboard)
            }
        }
    }
    W.msg(c)
};
commonLib.fixPlaceholder = function() {
    var a = document.createElement("input");
    if ("placeholder" in a) {
        return true
    }
    $("input").each(function() {
        var c = $(this).attr("placeholder");
        if (c) {
            var b = $(this).prop("type");
            if (b == "password") {
                $(this).prop("type", "text")
            }
            $(this).val(c);
            $(this).focusin(function() {
                if ($(this).val() == c) {
                    if (b == "password") {
                        $(this).prop("type", "password")
                    }
                    $(this).val("")
                }
            }).focusout(function() {
                if ($(this).val() == "") {
                    if (b == "password") {
                        $(this).prop("type", "text")
                    }
                    $(this).val(c)
                }
            })
        }
    })
};
function tpl2html(c, b) {
    if (b == null) {
        b = {}
    }
    var a = new jSmart($("#" + c).html());
    b.userNickname = vars.nickname;
    b.sysImageUrl = vars.sysImageUrl;
    b.qingImageUrl = vars.qingImageUrl;
    b.headImageUrl = vars.headImageUrl;
    b.qingImageUrl = vars.qingImageUrl;
    b.postImageUrl = vars.postImageUrl;
    b.jokesImageUrl = vars.jokesImageUrl;
    b.showgirlImageUrl = vars.showgirlImageUrl;
    b.photoImageUrl = vars.photoImageUrl;
    b.status = new Array("正常", "锁定");
    return a.fetch(b)
}
function yiiPagerClick(jqObj, loadedCb) {
    tpl = jqObj.attr("tpl");
    targetId = jqObj.attr("targetid");
    $.get(jqObj.attr("link"), function(data) {
        $("#" + targetId).html(tpl2html(tpl, data));
        eval("if(typeof(" + loadedCb + ")== 'function'){" + loadedCb + "();};")
    }, "json")
}
function timestamp2string(a) {
    return new Date(parseInt(a) * 1000).toLocaleString().replace(/:\d{1,2}$/, "")
}
function displayVerifyCodeMsgbox(a, d, c, b) {
    var e = '<div id="VerifyCodeWrapper">' + a + '<input type="text" name="tmp_verifycode" class="verifycode-input" id="tmp_verifycode"/><input type="button" value="确定" class="button" id="tmp_verifycode_commit"/></div>';
    W.open(e, {title: "请输入验证码", width: 400, height: 200});
    $("#tmp_verifycode").focus();
    if (typeof (b) == "undefined") {
        b = "verifyCode"
    }
    if (typeof (vars.verifyTimes) == "undefined") {
        vars.verifyTimes = 0
    } else {
        changeVerifyCodeImage()
    }
    $("#tmp_verifycode_commit").click(function() {
        vars.verifyTimes += 1;
        var f = $("#tmp_verifycode").val();
        $.get(d + "?verifyCode=" + f, function(g) {
            msg = "验证码输入错误";
            if (g == "1") {
                switch (vars.verifyTimes) {
                    case 1:
                        msg = "一次就输入成功了，真厉害！";
                        break;
                    case 2:
                        msg = "两次就成功了，挺牛！";
                        break;
                    default:
                        msg = "经过" + vars.verifyTimes + "次的努力，终于蒙对了，不容易啊，下次不能这样哦-_-!！"
                }
                if (typeof (b) == "object") {
                    b.val(f)
                } else {
                    $("#" + b).val(f)
                }
                vars.verifyTimes = 0;
                c();
                W.close()
            } else {
                switch (vars.verifyTimes) {
                    case 1:
                        msg = "没关系，才一次错误，再来么！";
                        break;
                    case 2:
                        msg = "已经错误两次了哦，要加啊！";
                        break;
                    default:
                        msg = "已经连续错误" + vars.verifyTimes + "次了，我是不是有点笨啊？0.0！"
                }
                W.tips(msg)
            }
        })
    })
}
var W = {};
W.tips = function(b, a) {
    art.dialog.tips(b, a ? a : 3)
};
W.msg = function(a) {
    art.dialog({content: a, title: "尊敬的 " + vars.nickname})
};
W.iframe = function(b, a) {
    art.dialog.open(b, a, false)
};
W.open = function(d, b) {
    var a = {title: "享笑欢迎您", content: d, fixed: true, drag: false, resize: false, width: 700, padding: 0, height: 550};
    for (var c in b) {
        a[c] = b[c]
    }
    vars.lastDialog = $.dialog(a);
    return vars.lastDialog
};
W.confirm = function(c, b, a) {
    if (b == null) {
        b = function() {
        }
    }
    if (a == null) {
        a = function() {
        }
    }
    art.dialog.confirm(c, b, a)
};
W.close = function(a) {
    vars.lastDialog.close()
};
W.notice = function(b, d, c) {
    if (typeof (d) != "number") {
        d = 500
    } else {
        d *= 1000
    }
    if (typeof (c) == "undefined") {
        c = {}
    }
    var a = {title: "亲爱的 " + vars.nickname, width: 250, content: b, icon: "ss", time: 120, padding: "10px"};
    setTimeout(function() {
        art.dialog.notice(commonLib.mergeObj(a, c))
    }, d)
};
Sys.updateNumeric = function(e, c, b) {
    var d = (typeof (e) == "object" ? e : $("#" + e));
    if (typeof (b) == "undefined") {
        b = true
    }
    if (typeof (c) == "undefined") {
        c = 1
    }
    var a = parseInt(d.html());
    a += c;
    if (b && a < 0) {
        a = 0
    }
    d.html(a);
    return a
};
Sys.scrollLoad = function(d) {
    var a = $(".pb-footer").offset().top - 500;
    var c = $(window).height();
    var b = $(window).scrollTop();
    if (c + b > a && !this.scrollLoading) {
        this.scrollLoading = true;
        d()
    }
};
Sys.processRetTimestamp = function(b) {
    for (var a in b) {
        post[a].createdate = timestamp2string(post[a].createdate);
        post[a].updatedate = timestamp2string(post[a].updatedate)
    }
    return post
};
Sys.genSwfupload = function(a, f) {
    var c = {flash_url: vars.jsUrl + "swfupload/Flash/swfupload.swf", upload_url: "", post_params: {PHPSESSID: vars.PHPSESSID}, file_size_limit: "3 MB", file_types: "*.*", file_types_description: "images", file_upload_limit: 100, file_queue_limit: 0, custom_settings: {progressTarget: "fsUploadProgress", cancelButtonId: "btnCancel"}, debug: false, button_image_url: vars.publicUrl + "system/bg_swfbutton_new.png", button_width: "105", button_height: "90", button_placeholder_id: "", button_text: "", button_text_style: "", button_text_left_padding: 12, button_text_top_padding: 3, button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT, button_cursor: SWFUpload.CURSOR.HAND, file_queued_handler: fileQueued, file_queue_error_handler: fileQueueError, file_dialog_complete_handler: fileDialogComplete, upload_start_handler: uploadStart, upload_progress_handler: uploadProgress, upload_error_handler: uploadError, upload_success_handler: uploadSuccess, upload_complete_handler: uploadComplete, queue_complete_handler: queueComplete};
    if (typeof (f) != "undefined") {
        c.button_placeholder_id = f
    }
    for (var b in a) {
        if (typeof (c[b]) != "undefined") {
            if (b == "post_params") {
                for (var e in a.post_params) {
                    c.post_params[e] = a.post_params[e]
                }
            } else {
                c[b] = a[b]
            }
        }
    }
    var d = new SWFUpload(c);
    return d
};
Sys.genEditor = function genCk(c, b) {
    var a = {resize_enabled: true, toolbarCanCollapse: true, toolbarStartupExpanded: false, toolbar: "Basic", height: 80, resize_maxWidth: 646, width: 646, fullPage: false, forcePasteAsPlainText: true, allowedContent: "p;img[!src,alt,width,height];a[!href];"};
    delete CKEDITOR.instances[c];
    return CKEDITOR.replace(c, commonLib.mergeObj(a, b))
};
Sys.openJscropDialog = function(n, a, k, q, s, d, h, p, c) {
    if (k > (window.screen.width)) {
        W.tips("图片尺寸超过您电脑的屏幕，没办法编辑啦，可以较小的图片试试看哦！");
        return false
    }
    var j = '<span><a href="javascript:void(0);" class="jcropReselect"> 重新裁切 </a> | <a href="javascript:void(0);" class="jcropSubmit"> 确定 </a></span>';
    var o = "photoFaceImage";
    var r = '( 当前尺寸<span id="jscropCrrrSzieSpan"></span> )';
    var f = (typeof (p.zoom) != "undefined" ? p.zoom : false);
    var g = (f ? ' 缩放：<input type="text" id="jcropZoomInput" style="width:30px"/>' : "");
    var l = '<input type="hidden" name="jcrop_x" id="jcrop_x"/><input type="hidden" name="jcrop_y" id="jcrop_y"/><input type="hidden" name="jcrop_x2" id="jcrop_x2"/><input type="hidden" name="jcrop_y2" id="jcrop_y2"/>';
    var m = '<div><img id="' + o + '" src="' + n + '"/></div><div class="d-n">' + l + "</div>";
    if (k < 400) {
        f = false;
        g = "";
        r = ""
    }
    W.open(m, {width: k, height: q, top: 10, fixed: false, title: ((typeof (p.title) == "undefined" || k < 500) ? r + g + j : (p.title + r + g + j))});
    var e = document.getElementById(o);
    var b = new Image();
    b.src = n;
    e.onload = function() {
        var u = Math.round((k - s) / 2);
        var t = Math.round((q - d) / 2);
        var x = u + s;
        var z = t + d;
        var y = [u, t, x, z];
        function w(A) {
            r && $("#jscropCrrrSzieSpan").html(Math.floor(A.w) + "*" + Math.floor(A.h));
            $("#jcrop_x").val(A.x);
            $("#jcrop_y").val(A.y);
            $("#jcrop_x2").val(A.x2);
            $("#jcrop_y2").val(A.y2)
        }
        var v = {};
        if (a == 1) {
            v = {bgFade: true, bgOpacity: 0.3, animateTo: y, aspectRatio: s / d, allowResize: true, maxSize: (typeof (p.maxSize) == "undefined" ? [0, 0] : p.maxSize), minSize: (typeof (p.minSize) == "undefined" ? [0, 0] : p.minSize), onRelease: function() {
                    jcrop_api.animateTo(y)
                }, onChange: w, onSelect: w}
        } else {
            if (a == 2) {
                v = {bgFade: true, bgOpacity: 0.3, animateTo: y, aspectRatio: 0, allowResize: false, maxSize: [s, d], minSize: [s, d], onRelease: function() {
                        jcrop_api.animateTo(y)
                    }, onChange: w, onSelect: w}
            } else {
                if (a == 3) {
                    v = {bgFade: true, bgOpacity: 0.3, animateTo: y, allowResize: true, maxSize: (typeof (p.maxSize) == "undefined" ? [0, 0] : p.maxSize), minSize: (typeof (p.minSize) == "undefined" ? [0, 0] : p.minSize), onRelease: function() {
                            jcrop_api.animateTo(y)
                        }, onChange: w, onSelect: w}
                } else {
                    W.tips("编辑图片出错");
                    return false
                }
            }
        }
        $("#photoFaceImage").Jcrop(v, function() {
            jcrop_api = this;
            jcrop_api.animateTo(y);
            $(".jcropReselect").click(function() {
                jcrop_api.animateTo(y)
            });
            $(".jcropSubmit").click(function() {
                var B = 1;
                if (f && $("#jcropZoomInput").val() != "") {
                    var B = $("#jcropZoomInput").val();
                    if (B <= 0 || B > 1) {
                        W.tips("缩放值应介于0到1之间的小数");
                        return false
                    }
                    var C = Math.floor(B * Math.abs(parseInt($("#jcrop_x2").val()) - parseInt($("#jcrop_x").val())));
                    var A = Math.floor(B * Math.abs(parseInt($("#jcrop_y2").val()) - parseInt($("#jcrop_y").val())));
                    if (v.minSize[0] * v.minSize[1] && (C < v.minSize[0] || A < v.minSize[1])) {
                        W.tips("缩放后比例为: " + C + "*" + A + " 过小，请适当调大比例！");
                        return false
                    }
                }
                c({x: $("#jcrop_x").val(), y: $("#jcrop_y").val(), x2: $("#jcrop_x2").val(), y2: $("#jcrop_y2").val(), zoom: B});
                W.close()
            })
        })
    }
};
Sys.adminMainLoad = function(a) {
    $("#content-box-loader").html(a)
};
Sys.userMainLoad = function(a, b) {
    if (b != null) {
        $(".goto").each(function() {
            if ($(this).attr("id") == b) {
                $.get($(this).attr("link"), function(c) {
                    $("#user-loader").html(c)
                })
            }
        });
        return true
    }
    $("#user-loader").html(a)
};
Sys.resizeTopNav = function(c, a) {
    var b = {};
    if (typeof (c) != "undefined" && c != 0) {
        b.width = c + "px"
    }
    if (typeof (a) != "undefined" && a != 0) {
        b.height = a + "px"
    }
    $(".pb-navwrap").css(b);
    $(".pb-breadcrumbs").css(b)
};
Sys.generateLegalDayopt = function(f, g, c) {
    var h = new Date(f, g, 0);
    var b = parseInt(h.getDate());
    var a = '<option value="0">日</option>';
    for (var e = 1; e <= b; e++) {
        if (e == c) {
            tmpOpt = '<option value="' + e + '" selected="true">' + e + "日</option>"
        } else {
            tmpOpt = '<option value="' + e + '">' + e + "日</option>"
        }
        a += tmpOpt
    }
    return a
};
Sys.isValidMail = function(a) {
    var b = /^(?:\w+\.?)*\w+@(?:\w+\.?)*\w+$/;
    return b.test(a)
};
Sys.isValidPhone = function(a) {
    var b = /^(1[3458][0-9]{9})$/;
    return b.test(a)
};
Sys.isValidQQ = function(a) {
    var b = /^([0-9]{5,10})$/;
    return b.test(a)
};
Sys.isValidUsername = function(b) {
    if (b.length < 5) {
        return -2
    }
    if (Sys.isValidMail(b)) {
        return 1
    }
    var a = /[^a-zA-Z0-9_.\-]/;
    if (a.test(b)) {
        return -1
    }
    if (b.length > 16) {
        return -3
    }
    return 2
};
Sys.isValidNick = function(a) {
    var b = /^[\u4E00-\u9FA5\w\d\-@]{2,12}$/g;
    return b.test(a)
};
Sys.isValidUrl = function(c) {
    var b = "^((https|http|ftp|rtsp|mms)://)(([0-9]{1,3}.){3}[0-9]{1,3}|([0-9a-zA-Z_!~*'()-]+.)*([0-9a-zA-Z][0-9a-zA-Z-]{0,61})?[0-9a-zA-Z].[a-zA-Z]{2,6})(:[0-9]{1,4})?((/?)|(/[0-9a-zA-Z_!~*'().;?:@&=+$,%#-]+)+/?)$";
    var a = new RegExp(b);
    return a.test(c)
};
Sys.generateOpt = function(c, b, d) {
    if (typeof (b) == "undefined") {
        b = 0
    }
    if (typeof (d) == "undefined") {
        d = true
    }
    correctDayOpt = "";
    for (var a in c) {
        if (a == 0 && !d) {
            continue
        }
        if (isNaN(a)) {
            continue
        }
        if (a == b) {
            tmpOpt = '<option value="' + a + '" selected="true">' + c[a] + "</option>"
        } else {
            tmpOpt = '<option value="' + a + '">' + c[a] + "</option>"
        }
        correctDayOpt += tmpOpt
    }
    return correctDayOpt
};
Sys.getUrlParam = function(b) {
    var a = b ? b : window.location.href;
    var c = a.split("#");
    return(typeof (c[1]) == "undefined" ? "" : c[1])
};
Sys.getUrlParams = function(a) {
    var f = Sys.getUrlParam(a);
    var e = f.split("&");
    var d = {};
    for (var c = 0; c < e.length; c++) {
        var b = e[c].split("=");
        if (typeof (b[0]) != "undefined" && typeof (b[1]) != "undefined") {
            d[b[0]] = b[1]
        }
    }
    return d
};
Sys.changeUrlParams = function(e) {
    var b = window.location.href;
    var d = b.split("#");
    var a = new Array();
    for (var c in e) {
        a.push(c + "=" + e[c])
    }
    window.location.href = d[0] + "#" + a.join("&")
};
Sys.showLoginDiv = function(b, a) {
    if (typeof a == "undefined") {
        a = true
    }
    if (a) {
        $.dialog({title: "", lock: true, background: "#000", opacity: 0.5, fixed: true, drag: false, resize: false, width: 520, padding: "20px 0", content: tpl2html("loginFormTpl")})
    }
    var c = $("#user-login-form");
    c.find("#sub").click(function() {
        Sys.userLoginAction(b)
    });
    c.find("input").keypress(function(d) {
        if (d.keyCode == 13) {
            Sys.userLoginAction(b, $(this).attr("type"))
        }
    });
    commonLib.fixPlaceholder()
};
Sys.showRuleDiv = function(a) {
    $.dialog({title: "", lock: true, fixed: true, drag: true, resize: false, width: 920, height: 580, content: tpl2html("tpl-pb-rule"), padding: ""})
};
Sys.userLoginAction = function(b, c) {
    var a = $("#user-login-form");
    if ($("#LoginForm_username").val() == "" || $("#LoginForm_password").val() == "") {
        if (c == "text" && $("#LoginForm_username").val() == "") {
            W.tips("您好像还没填写用户名哦！")
        } else {
            if (c == "password" && $("#LoginForm_password").val() == "") {
                W.tips("您好像还没填写密码哦！")
            }
        }
        return false
    }
    $.post(a.attr("action"), a.serialize(), function(d) {
        if (d.ret == 0) {
            var e = window.top.location.href;
            if (b) {
                e = b
            } else {
                if (d.redirect) {
                    e = d.redirect
                }
            }
            window.top.location.href = e;
            return true
        } else {
            if (d.ret == 3) {
                W.tips("您输入密码的次数，超过限制，系统将对您锁定一段时间！");
                return false
            }
        }
        W.tips(d.msg)
    }, "json")
};
Sys.checkUserLogin = function(a, c, b) {
    a = typeof (a) !== "undefined" ? a : true;
    c = typeof (c) !== "undefined" ? c : false;
    b = typeof (b) !== "undefined" ? b : window.location.href;
    if (vars.userid != "") {
        return true
    } else {
        a && Sys.showLoginDiv(b);
        c && W.tips("您需要登录才能继续哦！");
        return false
    }
};
Sys.isJsonString = function(a) {
    return(a.match("^{.*}$") != null)
};
Sys.getNameBySize = function(a, c) {
    var b = new Array();
    b = a.split(".");
    return b.length > 1 ? (b[0] + "_" + c + "." + b[1]) : ""
};
Sys.insertQingToBox = function(a, g) {
    var f = $("#" + g);
    for (var b = 0; b < a.length; b++) {
        var d = a[b];
        d.zIndex = this.qingZIndex--;
        var e;
        if (Sys.indexQingType) {
            e = this.currentQing;
            if (++this.currentQing > 2) {
                this.currentQing = 0
            }
        } else {
            e = this.qingY.minKey()
        }
        var d = a[b];
        d.left = this.qingX[e];
        d.top = this.qingY[e];
        var c = d.width / d.height;
        d.width = 310;
        d.height = parseInt(d.width / c);
        d.wrapHeight = d.height > 550 ? 550 : d.height;
        d.content = d.content.length > 140 ? (d.content.substr(0, 140) + "...") : d.content;
        d.image = vars.qingImageUrl + Sys.getNameBySize(d.image, d.width);
        f.append(tpl2html("qingTpl", d));
        currBox = f.find("#a-qing-wp-" + d.id);
        this.qingY[e] += (parseInt(currBox.height()) + 25);
        f.height(this.qingY.max());
        commonLib.preLoadImage(d.image, function(h) {
            $("#qing_image_" + h.qingId).fadeOut("fast", function() {
                $(this).attr("src", h.imgUrl).fadeIn(1500)
            })
        }, {qingId: d.id, imgUrl: d.image})
    }
};
Sys.resetQingBox = function(b) {
    var a = $("#" + b);
    a.html("").height(0);
    this.qingZIndex = 5000;
    this.qingY = [0, 0, 0, 0];
    this.kQingY = [0, 0, 0, 0, 0];
    this.currentQing = 0;
    vars.lastQingId = -1
};
Sys.fixedBox = function(a, e, j) {
    var h = (typeof (a) == "object" ? a : $("#" + a));
    var g = h.offset().top;
    var f = h.css("position");
    var k = h.css("top");
    var l = h.css("left");
    var b = h.css("z-index");
    var c = (typeof (e) !== "undefined" ? e : 41);
    var b = (typeof (j) !== "undefined" ? j : 999);
    var d = function() {
        if ($(this).scrollTop() + c > g) {
            if ($.browser.msie && $.browser.version == "6.0") {
                h.css({position: "absolute", top: $(this).scrollTop() + c, left: ((h.offset().left - $(window).scrollLeft())), "z-index": b})
            } else {
                h.css({position: "fixed", top: c, left: (h.offset().left - $(window).scrollLeft()), "z-index": b})
            }
        } else {
            h.css({position: f, top: k, left: l, "z-index": b})
        }
    };
    $(window).scroll(d);
    $(window).resize(d)
};
Sys.scrollTo = function(f, a, d, b, c) {
    var e = typeof (f) == "object" ? f : $("#" + f);
    if (!d) {
        d = 800
    }
    if (!b) {
        b = 0
    }
    if (!c) {
        c = 0
    }
    setTimeout(function() {
        $("html,body").animate({scrollTop: e.offset().top - c}, d, null, function() {
            if (typeof (a) == "function") {
                a()
            }
        })
    }, b)
};
Sys.applyMouseLeftRight = function(c, a, b) {
    $("#" + c).mousemove(function(g) {
        var f = $(this).width();
        var d = g.pageX - $(this).offset().left;
        if (d > parseInt(f / 2)) {
            b();
            $(this).css("cursor", "url('" + vars.sysImageUrl + "right.cur'), auto")
        } else {
            a();
            $(this).css("cursor", "url('" + vars.sysImageUrl + "left.cur'), auto")
        }
    })
};
Sys.loadVoteByData = function(b, h, k, g, j, l, d, c) {
    var f = {inputType: (g ? "radio" : null), inputName: j, allowSelectMore: (h.selectlimit > 1 ? true : false)};
    if (l.titleLenLimit == null) {
        l.titleLenLimit = 50
    }
    if (l.optionLenLimit == null) {
        l.optionLenLimit = 50
    }
    f.list = new Array();
    for (var e = 0; e < k.length; e++) {
        if (d != null && e >= d) {
            break
        }
        var a = k[e];
        a.votenum = parseInt(a.votenum);
        f.list.push({id: a.id, title: a.optionname.substr(0, l.optionLenLimit) + ":", num: a.votenum, color: vars.voteBlankColor[parseInt(a.id) % 5], inputValue: a.id})
    }
    $(b).html("");
    $.createJqVote($(b), h.title.substr(0, l.titleLenLimit), l.width, null, l.txtWidth, l.height, "票", true).loadData(f);
    $(b + " .slip_bar").hide().toggle("slow");
    if (typeof c == "function") {
        c()
    }
};
Sys.goHome = function() {
    window.top.location.href = vars.homeUrl
};
Sys.generateTitle = function(b, a) {
    if (a == null) {
        a = true
    }
    var c = b + " -- " + vars.siteName;
    if (a) {
        document.title = c
    } else {
        return c
    }
};
Sys.todayFirstLogin = function(a) {
    if (vars.todayFirstLogin == "undefined") {
        vars.todayFirstLogin = false
    }
    var b = vars.userid + vars.todayTimeString;
    if (!SSCookie.get(b) || vars.todayFirstLogin == true) {
        SSCookie.set(b, 1, 86500, "/");
        vars.todayFirstLogin = true;
        if (typeof a == "function") {
            a()
        }
        return true
    }
    return false
};
Sys.updateEntityClicknum = function(a, h, b, f) {
    $.post(a, "cat=" + h + "&id=" + b);
    return true;
    b = b.toString();
    if (f == null) {
        f = 20
    }
    var c = ",";
    var g = "vl";
    var d = SSCookie.get(g);
    if (!d) {
        d = "{}"
    }
    var e = $.parseJSON(d);
    var j = new Array();
    if (typeof (e[h]) != "undefined") {
        j = e[h].split(c)
    }
    if ($.inArray(b, j) < 0) {
        j.unshift(b);
        j = j.slice(0, f);
        e[h] = j.join(c);
        SSCookie.set(g, $.toJSON(e), 86500);
        $.post(a, "cat=" + h + "&id=" + b)
    }
};
Sys.loveQing = function(g, d, a) {
    if (d == null) {
        d = false
    }
    if (a == null) {
        a = vars.loveQingUrl
    }
    var e = $("#a-qing-wp-" + g);
    var f = e.find(".thumb-wrap").attr({onmouseover: "return false;", onmouseout: "return false;"}).find(".like").fadeOut();
    var c = e.find(".bottom .like").attr("onclick", "return false;");
    var b = c.find("i");
    if (d && (diffH = parseInt(c.offset().top - f.offset().top)) > 0) {
        b.css("top", "-" + diffH + "px").show()
    }
    b.show().animate({top: "0px"}, 1000, "swing", function() {
        $(this).hide(1000);
        var h = $(this).next("span");
        Sys.updateNumeric(h);
        c.css({color: "grey", "background-position": "0 -25px"})
    });
    $.post(a, "id=" + g)
};
Sys.showQingLove = function(c, b) {
    var a = "qingLoveTimeB" + c;
    vars[a] = setTimeout(function() {
        b.unbind("mouseout");
        var f = "qingLoveTime" + c;
        if (vars[f] != null) {
            clearTimeout(vars[f])
        }
        var e = b.find(".thumb_but");
        if (b.attr("on") != "1") {
            b.attr("on", "1");
            e.slideDown()
        }
        var d = function() {
            vars[f] = setTimeout(function() {
                b.attr("on", "0");
                e.slideUp()
            }, 700)
        };
        b.bind("mouseout", d);
        e.hover(function() {
            clearTimeout(vars[f]);
            b.unbind("mouseout")
        }, function() {
            clearTimeout(vars[f]);
            b.unbind("mouseout");
            vars[f] = setTimeout(d, 700)
        })
    }, b.attr("on") != "1" ? 500 : 0);
    b.mouseout(function() {
        clearTimeout(vars[a])
    })
};
Sys.loadQing = function(c) {
//    if (vars.lastQingId == 0) {
//        return false
//    }
//    if (c == null) {
//        c = vars.loadQingUrl
//    }
//    if (typeof (vars.listQingTimes) == "undefined") {
//        vars.listQingTimes = 0
//    }
//    if (vars.listQingLimit > 0 && vars.listQingTimes > vars.listQingLimit) {
//        $(".loading img").hide();
//        var b = $(".loading p").show().find("a");
//        return false
//    }
//    $.get(c + "?lastId=" + vars.lastQingId + "&catId=" + vars.lastQingCatId, function(a) {
//        if (a.ret === 0) {
//            if (a.qings.length > 0) {
//                Sys.insertQingToBox(a.qings, "pic-list");
//                if (a.qings.length < a.limit) {
//                    $(".loading img").hide();
//                    $(".loading p").show()
//                }
//            }
//            vars.lastQingId = a.lastId;
//            Sys.scrollLoading = false;
//            if (++vars.listQingTimes > 1) {
//                if (vars.listQingTimes < 11) {
//                    Sys.commStat(21 + vars.listQingTimes)
//                } else {
//                    Sys.commStat(32)
//                }
//            }
//        } else {
//            W.tips(a.msg)
//        }
//    }, "json")
};
Sys.setFlicker = function(c, b) {
    var a = $("#" + c);
    if (typeof (vars.flickerObj) == "undefined") {
        vars.flickerObj = {}
    }
    if (typeof (b) == "undefined") {
        b = 800
    }
    vars.flickerObj[c] = setInterval(function() {
        if (a.css("display") == "none") {
            a.show()
        } else {
            a.hide()
        }
    }, b)
};
Sys.clearFlicker = function(a) {
    if (typeof (vars.flickerObj) != "undefined" && vars.flickerObj[a] != null) {
        clearInterval(vars.flickerObj[a]);
        $("#" + a).show()
    }
};
Sys.addPostAction = function(b) {
    var a = b.attr("link");
    if (Sys.checkUserLogin(null, null, a)) {
        window.top.location.href = a
    }
};
Sys.insetEditBox = function(e, d, b, a, c) {
    e.html(tpl2html("editBoxTpl", {cpid: b, id: d, commid: c})).find("textarea").val("@" + a + " ")
};
Sys.commentChildReply = function(f, c, a, d, b) {
    if (vars.userid == b) {
        W.tips("亲，你想和自己说什么呢？");
        return false
    }
    var e = $(".childReplyBox");
    if (e.length > 0) {
        e.each(function() {
            var g = $(this);
            if (g.find("textarea").val() != "") {
                W.confirm("继续操作，之前输入信息，将会丢失。确定继续？", function() {
                    g.slideToggle("normal", function() {
                        $(this).remove();
                        Sys.insetEditBox($("#reply-box-" + c), f, c, a, d)
                    })
                }, function() {
                })
            } else {
                g.slideToggle("normal", function() {
                    $(this).remove();
                    Sys.insetEditBox($("#reply-box-" + c), f, c, a, d)
                })
            }
        })
    } else {
        Sys.insetEditBox($("#reply-box-" + c), f, c, a, d)
    }
};
Sys.loadEntityComm = function(b, a) {
    if (a == null) {
        a = vars.loadCommUrl
    }
    $.get(a + "?id=" + b, function(c) {
        if (c.ret === 0) {
            $("#comment-wrapper").html(tpl2html("dataTpl", c))
        } else {
            W.tips(c.msg)
        }
    }, "json")
};
Sys.loadEntityChildComm = function(c, a, b) {
    if (b == null) {
        b = vars.loadChildCommUrl
    }
    $.get(b + "?id=" + c + "&cpid=" + a, function(d) {
        if (d.ret === 0) {
            $("#child-wrapper-" + a).html(tpl2html("childCommentTpl", d))
        } else {
            W.tips(d.msg)
        }
    }, "json")
};
Sys.removeAllForm = function() {
    $(".childReplyBox").slideToggle("normal", function() {
        $(this).remove()
    })
};
Sys.loadQingComment = function(c, a) {
    if (a == null) {
        a = vars.qingCommUrl
    }
    var b = $("#commentlistHeight");
    if (vars.lastQingCommentId == 0) {
        b.find("#more").find("a").css("color", "grey");
        return true
    }
    if (c == null) {
        c = vars.currQingId
    }
    $.get(a + "?qingId=" + c + "&lastId=" + vars.lastQingCommentId, function(d) {
        if (d.ret === 0) {
            if (d.comments.length > 0) {
                b.find("#more").remove();
                b.append(tpl2html("qingCommentTpl", d));
                if (d.comments.length < d.limit) {
                    b.find("#more").remove()
                }
            }
            vars.lastQingCommentId = d.lastId
        } else {
            W.tips(d.msg)
        }
    }, "json")
};
Sys.resetQingShowList = function(b) {
    var a = new Array();
    if (b == "next") {
        for (var c = 0; c < vars.qingShowList.length; c++) {
            if (vars.qingShowList[c] > vars.firstResetQingId) {
                a.push(vars.qingShowList[c])
            }
        }
    } else {
        for (var c = 0; c < vars.qingShowList.length; c++) {
            if (vars.qingShowList[c] < vars.lastResetQingId) {
                a.push(vars.qingShowList[c])
            }
        }
    }
    vars.firstResetQingId = a[0];
    vars.lastResetQingId = a[a.length - 1];
    vars.qingShowList = a
};
Sys.isQingDataFull = function(c, f, a) {
    var e = false;
    var d = vars.qingShowList.findKeyByValue(f);
    if (d >= 0) {
        if (c == "next" && d + 1 < vars.qingShowList.length) {
            e = true;
            a(vars.qingShowListData["qing_" + vars.qingShowList[d + 1]])
        } else {
            if (c == "prior" && d - 1 >= 0) {
                e = true;
                a(vars.qingShowListData["qing_" + vars.qingShowList[d - 1]])
            }
        }
    } else {
        d = 0
    }
    var b = false;
    if (c == "next") {
        if (Math.abs(vars.qingShowList.length - d) < 3) {
            b = true
        }
    } else {
        if (c == "prior") {
            if (d < 2) {
                b = true
            }
        } else {
            b = true
        }
    }
    if (!e || b) {
        $.get(vars.qingGetmoreUrl + "?act=" + c + "&id=" + f + "&cid=" + (isNaN(vars.qingNeedCid) ? 0 : vars.qingNeedCid), function(g) {
            if (g.qings != null) {
                for (var h = 0; h < g.qings.length; h++) {
                    var j = g.qings[h];
                    vars.qingShowList.push(parseInt(j.id));
                    var k = "qing_" + j.id;
                    vars.qingShowListData[k] = j;
                    commonLib.preLoadImage(vars.qingImageUrl + j.image)
                }
                vars.qingShowList = vars.qingShowList.unique();
                vars.qingShowList.sort(function(n, m) {
                    return n < m ? 1 : -1
                });
                if (c == "current" || c == "preload") {
                    vars.firstResetQingId = vars.qingShowList[0];
                    vars.lastResetQingId = vars.qingShowList[vars.qingShowList.length - 1]
                }
            } else {
                if (c == "next") {
                } else {
                    if (c == "prior" && d < 2) {
                    } else {
                    }
                }
            }
            if (!e && c != "preload") {
                if (c == "current") {
                    a(vars.qingShowListData["qing_" + vars.currQingId])
                } else {
                    var l = 0;
                    var h = vars.qingShowList.findKeyByValue(f);
                    if (h >= 0) {
                        if (c == "next") {
                            l = h + 1;
                            if (l >= vars.qingShowList.length) {
                                Sys.resetQingShowList(c);
                                l = 0
                            }
                        } else {
                            if (c == "prior") {
                                l = h - 1;
                                if (l < 0) {
                                    Sys.resetQingShowList(c);
                                    l = vars.qingShowList.length - 1
                                }
                            }
                        }
                    }
                    a(vars.qingShowListData["qing_" + vars.qingShowList[l]])
                }
            }
        }, "json")
    }
};
Sys.loadQingByAct = function(a, b) {
    if (a == null) {
        a = vars.nextQingAct
    }
    if (b == null) {
        b = vars.currQingId
    }
    Sys.isQingDataFull(a, b, function(c) {
        if (c != null) {
            vars.urlPrams.id = vars.currQingId = c.id;
            vars.lastQingCommentId = -1;
            $("#commentlistHeight").html("");
            Sys.changeUrlParams(vars.urlPrams);
            var d = c.title ? c.title : c.content.substr(0, 20);
            Sys.generateTitle(d);
            $(".pb-breadcrumbs a:last").html(d);
            Sys.fixedAllBox(c)
        } else {
        }
    })
};
Sys.adjustBoxByQingImage = function(a, d) {
    var c = $("#qing-pic-box");
    var b = Math.max((window.screen.height - 100), d);
    c.css({height: b + "px", "line-height": b + "px"});
    if (vars.browser == "IE6") {
        c.find("img").css({margin: (b - d) / 2 + "px 0", "vertical-align": "middle"})
    }
    c.find("#img").css({height: b + "px"})
};
Sys.fixedAllBox = function(b, d) {
    var a = Math.min(940, b.width);
    var c = b.width > 940 ? (940 * b.height / b.width) : b.height;
    if (d == true) {
        Sys.adjustBoxByQingImage(a, c)
    } else {
        $("#qing-pic-box").find("img").fadeOut("fast", function() {
            Sys.adjustBoxByQingImage(a, c);
            $(this).attr({width: a, height: c, src: vars.qingImageUrl + b.image}).fadeIn(500)
        })
    }
    $("#qing-txt-info").html(tpl2html("qingTxtInfoTpl", b));
    if (b.commentnum > 0) {
        Sys.loadQingComment()
    }
    Sys.updateEntityClicknum(vars.statQingClickUrl, "q", b.id)
};
Sys.submitQingComment = function() {
    var a = $("#qing-txt-info").find("#qing-add-comment");
    var b = "verifyCodeQing";
    if (a.find("#QingCommentUser_content").val().length < 1) {
        W.tips("您还未填写评论哦！");
        return false
    }
    if (!Sys.checkUserLogin(false) && $("#" + b).val() == "") {
        displayVerifyCodeMsgbox(vars.verifyHtml, vars.qingCheckVerifyUrl, function() {
            Sys.submitQingComment()
        }, b);
        return false
    }
    if (vars.ajaxSubmiting) {
        W.tips(Msg.submitIng);
        return false
    }
    vars.ajaxSubmiting = true;
    a.ajaxSubmit(function(c) {
        ret = $.parseJSON(c);
        if (ret.ret == 0) {
            Sys.updateNumeric("qing-comment-num");
            vars.lastQingCommentId = -1;
            $("#commentlistHeight").html("");
            Sys.loadQingComment();
            a.resetForm();
            $("#" + b).val("");
            vars.ajaxSubmiting = false;
            if (!Sys.checkUserLogin(false)) {
                W.tips("已收藏您的评论，推荐您注册享笑网，做一个有头有脸有身份的人！", 3)
            }
            return false
        } else {
            if (ret.ret == 3) {
                vars.ajaxSubmiting = false;
                displayVerifyCodeMsgbox(vars.verifyHtml, vars.qingCheckVerifyUrl, function() {
                    Sys.submitQingComment()
                }, b);
                return false
            }
        }
        W.tips(ret.msg)
    })
};
Sys.checkUserMessage = function(a) {
    if (!vars.userid) {
        return false
    }
    function b() {
        $("#uSetEntry").attr("href", ($("#uSetEntry").attr("href") + "#go=message")).css("color", "#d72227");
        $("#uSetEntry-head").attr("href", ($("#uSetEntry-head").attr("href") + "#go=message"));
        $(".pb-ucenter .notice").show();
        Sys.setFlicker("uMessageCenter");
        Sys.todayFirstLogin(function() {
            W.notice('<p style="line-height:1.6;font-size:13px;">您有收到新的消息，<a href="/user/index.html#go=message" class="c_tx">点击查看详情</a>。</p>', 5)
        })
    }
    if (parseInt(SSCookie.get(vars.cookieUMessage)) > 0) {
        b();
        return true
    }
    $.get(a, function(c) {
        if (c.ret == 0 && c.msgnum > 0) {
            b();
            SSCookie.set(vars.cookieUMessage, c.msgnum, 86500, "/")
        }
    }, "json")
};
Sys.getSysTips = function(a) {
    $.get(a, function(b) {
        if (b.ret == 0 && b.tips.content) {
            W.notice(b.tips.content)
        }
    }, "json")
};
Sys.slideQingNav = function() {
    $("#QingNavBut").mouseenter(function() {
        $("#QingNavBut ul").stop().slideDown()
    }).mouseleave(function() {
        $("#QingNavBut ul").stop().slideUp()
    })
};
Sys.commStat = function(e, b) {
    var d = {};
    d.id = e;
    d.num = typeof (b) == "undefined" ? 1 : parseInt(b);
    var a = new Array();
    for (var c in d) {
        a.push(c + "=" + d[c])
    }
//    $.post(vars.commStatUrl, a.join("&"), function() {
//    })
};
Sys.submitJokeComment = function(e, a) {
    var d = "v-joke-" + e;
    var c = $("#f-joke-" + e);
    var b = c.find(".c-l-jk-ipt").val();
    if (!b || b == Msg.defaultIptVal) {
        W.tips(Msg.noCon);
        return false
    }
    if (!Sys.checkUserLogin(false) && $("#" + d).val() == "") {
        displayVerifyCodeMsgbox(vars.verifyHtml, vars.jokesVerifyUrl, function() {
            Sys.submitJokeComment(e, a)
        }, d);
        return false
    }
    if (vars.ajaxSubmiting) {
        W.tips(Msg.submitIng);
        return false
    }
    vars.ajaxSubmiting = true;
    c.ajaxSubmit(function(f) {
        f = $.evalJSON(f);
        if (f.ret == 0) {
            c.resetForm();
            $("#" + d).val("");
            vars.ajaxSubmiting = false;
            if (a) {
                a(f.id, b, f.head)
            }
            return true
        } else {
            if (f.ret == 3) {
                vars.ajaxSubmiting = false;
                displayVerifyCodeMsgbox(vars.verifyHtml, vars.jokesVerifyUrl, function() {
                    Sys.submitJokeComment(e, a)
                }, d);
                return false
            }
        }
        W.tips(f.msg)
    })
};
Sys.subJokeEvaluate = function(c, d, b, a) {
    $.get(b + "?jokeId=" + c + "&eva=" + d + "&verifyCode=" + $("#verifyCode").val(), function(e) {
        if (e.ret == 0) {
            if (typeof (a) == "function") {
                a()
            }
            return true
        } else {
            if (e.ret == 3) {
                displayVerifyCodeMsgbox(vars.verifyHtml, vars.jokesVerifyUrl, function() {
                    subJokeEvaluate(c, d)
                });
                return false
            }
        }
        W.tips(e.msg)
    }, "json")
};
Sys.loadJokesComm = function(d, c, a) {
    var b = d.children().last().attr("name");
    if (typeof (b) == "undefined") {
        b = 0
    }
    $.get(vars.jokesCommentUrl + "?jid=" + c + "&lastId=" + b, function(e) {
        d.append(tpl2html("replyTpl", e));
        if (a) {
            a(e.comments.length)
        }
    }, "json")
};
Sys.hide51 = function() {
    $("a").each((function() {
        if ($(this).attr("href") && $(this).attr("href").indexOf("www.51.la") > 0) {
            $(this).remove()
        }
    }))
};
Sys.removeHTMLTag = function(a) {
    a = a.replace(/<button.*>.*<\/button>/g, "");
    a = a.replace(/<\/?[^>]*>/g, "");
    a = a.replace(/[ | ]*\n/g, "\n");
    a = a.replace(/&nbsp;/ig, "");
    a = a.replace(/^[ | ]*/g, "");
    return a
};
Sys.placeCaretAtEnd = function(b) {
    b.focus();
    if (typeof window.getSelection != "undefined" && typeof document.createRange != "undefined") {
        var a = document.createRange();
        a.selectNodeContents(b);
        a.collapse(false);
        var d = window.getSelection();
        d.removeAllRanges();
        d.addRange(a)
    } else {
        if (typeof document.body.createTextRange != "undefined") {
            var c = document.body.createTextRange();
            c.moveToElementText(b);
            c.collapse(false);
            c.select()
        }
    }
};